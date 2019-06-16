<?php $__env->startSection('content-category'); ?>


<div class="container" id="category">

    <div class="row">

        <h4>Thêm loại sản phẩm</h4>

    </div>

    <?php if ($errors->any()): ?>

        <div class="alert alert-danger">

            <ul>

                <?php $__currentLoopData = $errors->all();
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $error): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>

                    <li><?php echo e($error); ?></li>

                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>

            </ul>

        </div>

    <?php endif; ?>

    <div class="alert alert-danger" v-bind:style="alert" style="display: none;">

        <ul>

            <li>vui lòng chọn danh mục sản phẩm</li>

        </ul>

    </div>

    <div class="alert alert-danger" v-bind:style="alert" style="display: none;">

        <ul>

            <li>vui lòng chọn danh mục con sản phẩm</li>

        </ul>

    </div>

    <div class="row">

        <div class="col">

            <div class="col-sm-12 bg-success cateHeader">

                <h4 class="table-admin">Thêm danh mục chính</h4>

            </div>

            <div class="row cateBorder">

                <form method="post" action="<?php echo e(route('admin.category.store')); ?>" class="cateForm">

                    <?php echo csrf_field(); ?>

                    <div class="col-sm-8 form-group cateInput">

                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Thêm" v-model="message">

                    </div>

                    <div class="col-sm-4 cateInput">

                        <button class="btn btn-success">Thêm</button>

                    </div>

                </form>

            </div>

        </div>

        <div class="col">

            <div class="col-sm-12 bg-success cateHeader">

                <h4 class="table-admin">Thêm danh mục con</h4>

            </div>

            <form action="<?php echo e(route('admin.subCategory.store')); ?>" method="post" @submit="checkForm">

                <?php echo csrf_field(); ?>

                <div class="row subcateBorder">

                    <select class="select-admin" v-model="category_id" name="category_id">

                        <option value="" selected disabled>loại chính</option>

                        <?php $__currentLoopData = $categories;
                        $__env->addLoop($__currentLoopData);
                        foreach ($__currentLoopData as $category): $__env->incrementLoopIndices();
                            $loop = $__env->getLastLoop(); ?>

                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>

                        <?php endforeach;
                        $__env->popLoop();
                        $loop = $__env->getLastLoop(); ?>

                    </select>

                </div>

                <div class="row cateBorder">

                    <div class="col-sm-8 form-group  cateInput">

                        <input type="text" name="subCategory" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Thêm">

                    </div>

                    <div class="col-sm-4 cateInput">

                        <button class="btn btn-success" type="submit">Thêm</button>

                    </div>

                </div>

            </form>


        </div>


    </div>


</div>


<script type="text/javascript">


    new Vue({

        el: '#category',

        data: {

            selected: '',

            category_id: '',

            subCategory_id: '',

            message: '',

            alert: {

                display: 'none',


            },


        },

        methods: {

            checkForm: function (e) {


                if (!this.category_id) {

                    this.alert.display = 'block';

                    e.preventDefault();

                } else

                    return true;

            },


        },


    });


</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.category.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>