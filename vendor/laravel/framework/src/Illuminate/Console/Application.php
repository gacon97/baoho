<?php

namespace Illuminate\Console;

use Closure;
use Illuminate\Support\ProcessUtils;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Container\Container;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Process\PhpExecutableFinder;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Application as SymfonyApplication;
use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Exception\CommandNotFoundException;
use Illuminate\Contracts\Console\Application as ApplicationContract;

class Application extends SymfonyApplication implements ApplicationContract
{
    /**
     * The console application bootstrappers.
     *
     * @var array
     */
    protected static $bootstrappers = [];
    /**
     * The Laravel application instance.
     *
     * @var \Illuminate\Contracts\Container\Container
     */
    protected $laravel;
    /**
     * The output from the previous command.
     *
     * @var \Symfony\Component\Console\Output\BufferedOutput
     */
    protected $lastOutput;
    /**
     * The Event Dispatcher.
     *
     * @var \Illuminate\Contracts\Events\Dispatcher
     */
    protected $events;

    /**
     * Create a new Artisan console application.
     *
     * @param  \Illuminate\Contracts\Container\Container $laravel
     * @param  \Illuminate\Contracts\Events\Dispatcher $events
     * @param  string $version
     * @return void
     */
    public function __construct(Container $laravel, Dispatcher $events, $version)
    {
        parent::__construct('Laravel Framework', $version);

        $this->laravel = $laravel;
        $this->events = $events;
        $this->setAutoExit(false);
        $this->setCatchExceptions(false);

        $this->events->dispatch(new Events\ArtisanStarting($this));

        $this->bootstrap();
    }

    /**
     * Determine the proper PHP executable.
     *
     * @return string
     */
    public static function phpBinary()
    {
        return ProcessUtils::escapeArgument((new PhpExecutableFinder)->find(false));
    }

    /**
     * Determine the proper Artisan executable.
     *
     * @return string
     */
    public static function artisanBinary()
    {
        return defined('ARTISAN_BINARY') ? ProcessUtils::escapeArgument(ARTISAN_BINARY) : 'artisan';
    }

    /**
     * Format the given command as a fully-qualified executable command.
     *
     * @param  string $string
     * @return string
     */
    public static function formatCommandString($string)
    {
        return sprintf('%s %s %s', static::phpBinary(), static::artisanBinary(), $string);
    }

    /**
     * Register a console "starting" bootstrapper.
     *
     * @param  \Closure $callback
     * @return void
     */
    public static function starting(Closure $callback)
    {
        static::$bootstrappers[] = $callback;
    }

    /**
     * Clear the console application bootstrappers.
     *
     * @return void
     */
    public static function forgetBootstrappers()
    {
        static::$bootstrappers = [];
    }

    /**
     * {@inheritdoc}
     */
    public function run(InputInterface $input = null, OutputInterface $output = null)
    {
        $commandName = $this->getCommandName(
            $input = $input ?: new ArgvInput
        );

        $this->events->fire(
            new Events\CommandStarting(
                $commandName, $input, $output = $output ?: new ConsoleOutput
            )
        );

        $exitCode = parent::run($input, $output);

        $this->events->fire(
            new Events\CommandFinished($commandName, $input, $output, $exitCode)
        );

        return $exitCode;
    }

    /**
     * Run an Artisan console command by name.
     *
     * @param  string $command
     * @param  array $parameters
     * @param  \Symfony\Component\Console\Output\OutputInterface|null $outputBuffer
     * @return int
     *
     * @throws \Symfony\Component\Console\Exception\CommandNotFoundException
     */
    public function call($command, array $parameters = [], $outputBuffer = null)
    {
        if (is_subclass_of($command, SymfonyCommand::class)) {
            $command = $this->laravel->make($command)->getName();
        }

        if (!$this->has($command)) {
            throw new CommandNotFoundException(sprintf('The command "%s" does not exist.', $command));
        }

        array_unshift($parameters, $command);

        $this->lastOutput = $outputBuffer ?: new BufferedOutput;

        $this->setCatchExceptions(false);

        $result = $this->run(new ArrayInput($parameters), $this->lastOutput);

        $this->setCatchExceptions(true);

        return $result;
    }

    /**
     * Get the output for the last run command.
     *
     * @return string
     */
    public function output()
    {
        return $this->lastOutput && method_exists($this->lastOutput, 'fetch')
            ? $this->lastOutput->fetch()
            : '';
    }

    /**
     * Add a command to the console.
     *
     * @param  \Symfony\Component\Console\Command\Command $command
     * @return \Symfony\Component\Console\Command\Command
     */
    public function add(SymfonyCommand $command)
    {
        if ($command instanceof Command) {
            $command->setLaravel($this->laravel);
        }

        return $this->addToParent($command);
    }

    /**
     * Add a command, resolving through the application.
     *
     * @param  string $command
     * @return \Symfony\Component\Console\Command\Command
     */
    public function resolve($command)
    {
        return $this->add($this->laravel->make($command));
    }

    /**
     * Resolve an array of commands through the application.
     *
     * @param  array|mixed $commands
     * @return $this
     */
    public function resolveCommands($commands)
    {
        $commands = is_array($commands) ? $commands : func_get_args();

        foreach ($commands as $command) {
            $this->resolve($command);
        }

        return $this;
    }

    /**
     * Get the Laravel application instance.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public function getLaravel()
    {
        return $this->laravel;
    }

    /**
     * Bootstrap the console application.
     *
     * @return void
     */
    protected function bootstrap()
    {
        foreach (static::$bootstrappers as $bootstrapper) {
            $bootstrapper($this);
        }
    }

    /**
     * Add the command to the parent instance.
     *
     * @param  \Symfony\Component\Console\Command\Command $command
     * @return \Symfony\Component\Console\Command\Command
     */
    protected function addToParent(SymfonyCommand $command)
    {
        return parent::add($command);
    }

    /**
     * Get the default input definitions for the applications.
     *
     * This is used to add the --env option to every available command.
     *
     * @return \Symfony\Component\Console\Input\InputDefinition
     */
    protected function getDefaultInputDefinition()
    {
        return tap(parent::getDefaultInputDefinition(), function ($definition) {
            $definition->addOption($this->getEnvironmentOption());
        });
    }

    /**
     * Get the global environment option for the definition.
     *
     * @return \Symfony\Component\Console\Input\InputOption
     */
    protected function getEnvironmentOption()
    {
        $message = 'The environment the command should run under';

        return new InputOption('--env', null, InputOption::VALUE_OPTIONAL, $message);
    }
}
