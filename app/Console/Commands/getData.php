<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class getData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $dom = file_get_html('http://baohovietnam.com/');
        $a = $dom->find('#menu-danh_muc_san_pham li ul li a');
        print_r($a);
        // foreach($a as $index=> $data)
        // {
        //     echo $data->innertext;
        //     echo "<br></br>";
        // }
    }
}
