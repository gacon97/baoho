<?php $__env->startSection('content-product'); ?>

<div class="container add-item">

    <div class="row">


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

        <div class="col-sm">

            <form class="form-inline" method="POST" action="<?php echo e(route('admin.color.store')); ?>">

                <?php echo e(csrf_field()); ?>


                <div class="form-group mx-sm-12">

                    <label class="sr-only">Màu</label>

                    <input type="text" class="form-control" placeholder="Thêm màu" name="color">

                </div>

                <button type="submit" class="btn btn-primary ">Thêm</button>

            </form>

        </div>

        <div class="col-sm">

            <form class="form-inline" method="POST" action="<?php echo e(route('admin.size.store')); ?>">

                <?php echo e(csrf_field()); ?>


                <div class="form-group mx-sm-12">

                    <label class="sr-only">Cỡ</label>

                    <input type="text" class="form-control" placeholder="Thêm cỡ" name="size">

                </div>

                <button type="submit" class="btn btn-success ">Thêm</button>

            </form>

        </div>

        <div class="col-sm">

            <form class="form-inline" method="POST" action="<?php echo e(route('admin.material.store')); ?>">

                <?php echo e(csrf_field()); ?>


                <div class="form-group mx-sm-12">

                    <label class="sr-only">Chất liệu</label>

                    <input type="text" class="form-control" placeholder="Thêm chất liệu" name="material">

                </div>

                <button type="submit" class="btn btn-danger ">Thêm</button>

            </form>

        </div>

    </div>

</div>


<div class="col-12">

    <br>

    <h3>Sửa sản phẩm</h3>

    <br>

    <form action="<?php echo e(route('admin.product.update', ['id' => $product->id])); ?>" enctype="multipart/form-data"
          method="POST" class="form-product">

        <?php echo csrf_field(); ?>


        <div class="form-group row">

            <label class="col-sm-2 col-form-label">Tên sản phẩm</label>

            <div class="col-sm-10">

                <input type="text" class="form-control" name="name"
                       value="<?php echo e(old('name', isset($product) ? $product->name : null)); ?>">

            </div>

        </div>

        <div class="form-group row">

            <label class="col-sm-2 col-form-label">Mức độ ưu tiên: </label>

            <div class="col-sm-10">

                <select name="priority" class="select-admin">

                    <option selected
                            disabled><?php echo e(old('priority', isset($product) ? $product->priority : null)); ?></option>

                    <?php $__currentLoopData = App\Product::PRIORITY;
                    $__env->addLoop($__currentLoopData);
                    foreach ($__currentLoopData as $priority): $__env->incrementLoopIndices();
                        $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($priority); ?>"><?php echo e($priority); ?></option>

                    <?php endforeach;
                    $__env->popLoop();
                    $loop = $__env->getLastLoop(); ?>

                </select>

            </div>

        </div>

        <div class="form-group row">

            <label class="col-sm-2 col-form-label">Vị trí hiển thị: </label>

            <div class="col-sm-10">

                <select name="show" class="select-admin">

                    <option selected
                            disabled><?php echo e(old('show', isset($product) ? $product->show : null)); ?></option>

                    <?php $__currentLoopData = App\Product::SHOW;
                    $__env->addLoop($__currentLoopData);
                    foreach ($__currentLoopData as $show): $__env->incrementLoopIndices();
                        $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($show); ?>"><?php echo e($show); ?></option>

                    <?php endforeach;
                    $__env->popLoop();
                    $loop = $__env->getLastLoop(); ?>

                </select>

            </div>

        </div>

        <div class="form-group row">

            <label class="col-sm-2 col-form-label">Loại sản phẩm chính: </label>

            <div class="col-sm-10">

                <select name="category_id" class="select-admin" onchange="selectCategory(this)" id="category">

                    <option selected
                            disabled><?php echo e(old('category_id', isset($product) ? $product->category->name : null)); ?></option>

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

        </div>

        <div class="form-group row">

            <label class="col-sm-2 col-form-label">Danh mục con: </label>

            <div class="col-sm-10">

                <select name="sub_category_id" class="select-admin" id="subCategory">

                    <option value="" selected
                            disabled><?php echo e(old('sub_category_id', isset($product) ? $product->subCategory->name : null)); ?></option>


                </select>

            </div>

        </div>


        <div class="form-group row">

            <label class="col-sm-2 col-form-label">chọn màu sắc: </label>

            <div class="col-sm-10">

                <?php $__currentLoopData = $colors;
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $key => $color): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>

                    <div class="form-check form-check-inline">

                        <input class="form-check-input checkbox" type="checkbox" id="inlineCheckbox1"
                               value="<?php echo e($color->id); ?>" name="color[]"

                            <?php $__currentLoopData = $product->colors;
                            $__env->addLoop($__currentLoopData);
                            foreach ($__currentLoopData as $pc): $__env->incrementLoopIndices();
                                $loop = $__env->getLastLoop(); ?>

                                <?php if ($color->id == $pc->id): ?>

                                    <?php echo e('checked'); ?>


                                <?php endif; ?>

                            <?php endforeach;
                            $__env->popLoop();
                            $loop = $__env->getLastLoop(); ?>>

                        <label class="form-check-label" for="inlineCheckbox1"><?php echo e($color->color); ?></label>

                    </div>

                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>

            </div>

        </div>


        <div class="form-group row">

            <label class="col-sm-2 col-form-label">chọn kích cỡ: </label>

            <div class="col-sm-10">

                <?php $__currentLoopData = $sizes;
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $key => $size): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>

                    <div class="form-check form-check-inline">

                        <input class="form-check-input checkbox" type="checkbox" id="inlineCheckbox1"
                               value="<?php echo e($size->id); ?>" name="size[]"

                            <?php $__currentLoopData = $product->sizes;
                            $__env->addLoop($__currentLoopData);
                            foreach ($__currentLoopData as $ps): $__env->incrementLoopIndices();
                                $loop = $__env->getLastLoop(); ?>

                                <?php if ($size->id == $ps->id): ?>

                                    <?php echo e('checked'); ?>


                                <?php endif; ?>

                            <?php endforeach;
                            $__env->popLoop();
                            $loop = $__env->getLastLoop(); ?>>

                        <label class="form-check-label" for="inlineCheckbox1"><?php echo e($size->size); ?></label>

                    </div>

                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>

            </div>

        </div>


        <div class="form-group row">

            <label class="col-sm-2 col-form-label">chọn chất liệu: </label>

            <div class="col-sm-10">

                <?php $__currentLoopData = $materials;
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $key => $material): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>

                    <div class="form-check form-check-inline">

                        <input class="form-check-input checkbox" type="checkbox" id="inlineCheckbox1"
                               value="<?php echo e($material->id); ?>" name="material[]"

                            <?php $__currentLoopData = $product->materials;
                            $__env->addLoop($__currentLoopData);
                            foreach ($__currentLoopData as $pm): $__env->incrementLoopIndices();
                                $loop = $__env->getLastLoop(); ?>

                                <?php if ($material->id == $pm->id): ?>

                                    <?php echo e('checked'); ?>


                                <?php endif; ?>

                            <?php endforeach;
                            $__env->popLoop();
                            $loop = $__env->getLastLoop(); ?>>

                        <label class="form-check-label" for="inlineCheckbox1"><?php echo e($material->name); ?></label>

                    </div>

                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>

            </div>

        </div>


        <div class="form-group row">

            <label class="col-sm-2 col-form-label">Giá:</label>

            <div class="col-sm-10">

                <input type="text" class="form-control" name="price"
                       value="<?php echo e(old('price', isset($product->price) ? $product->price : 'null')); ?>">

            </div>

        </div>

        <div class="form-group row">

            <label class="col-sm-2 col-form-label">Nhà sản xuất:</label>

            <div class="col-sm-10">

                <input type="text" class="form-control" name="producer"
                       value="<?php echo e(old('producer', isset($product->producer) ? $product->producer : 'null')); ?>">

            </div>

        </div>

        <div class="form-group row">

            <label class="col-sm-2 col-form-label">Thời gian bảo hành:</label>

            <div class="col-sm-10">

                <input type="text" class="form-control" name="warranties"
                       value="<?php echo e(old('warranties', isset($product->warranties) ? $product->warranties : 'null')); ?>">

            </div>

        </div>

        <div class="form-group row">

            <label class="col-sm-2 col-form-label">Mô tả chi tiết:</label>

            <div class="col-sm-10">

                <div class="document-editor">

                    <div class="document-editor__toolbar"></div>

                    <div class="document-editor__editable-container"
                    ">

                    <div class="document-editor__editable">

                                <textarea name="description" id="editor">

                                    <?php echo old('description', isset($product->description) ? $product->description : 'null'); ?>



                                </textarea>

                    </div>

                </div>

            </div>

        </div>

</div>


<div class="form-group row">

    <label class="col-sm-2 col-form-label">Chọn ảnh cho sản phẩm:</label>

    <div class="col-sm-10">

        <div id="gallery">

            <?php $__currentLoopData = $product->images;
            $__env->addLoop($__currentLoopData);
            foreach ($__currentLoopData as $image): $__env->incrementLoopIndices();
                $loop = $__env->getLastLoop(); ?>

                <img src="<?php echo e($image->image); ?>">

            <?php endforeach;
            $__env->popLoop();
            $loop = $__env->getLastLoop(); ?>

        </div>


        <div class="upload-file-wrapper">

            <div class="add-image">

                <div class="image-container new">

                    <div class="image">


                    </div>

                </div>

            </div>

            <input type="file" id="media" name="images[]"

                   class="input-file"

                   accept="image/*" multiple/">

        </div>

    </div>


    <div class="form-group row">

        <div class="col-sm-2"></div>

        <div class="col-sm-10" style="padding-left: 160px;">

            <button class="btn btn-primary" type="submit">Sửa sản phẩm</button>

        </div>

    </div>

    </form>

</div>

<script>


    ClassicEditor

        .create(document.querySelector('#editor'))

        .catch(error => {

            console.error(error);

        });


    'use strict';


    (function (document, window, index) {

        var inputFile = document.querySelector('.input-file');

        var gallery = document.querySelector('#gallery');


        inputFile.addEventListener('change', function (e) {

            var reader = null;

            $('#gallery').html("");


            if (this.files) {


                for (var i = 0; i < this.files.length; i++) {

                    reader = new FileReader();// nhận đầu vào là file và xử lý file


                    reader.onload = function (event) {

                        var newImg = '<img src="' + event.target.result + '"> ';// result truy cập đến nội dung file

                        $($.parseHTML(newImg)).appendTo(gallery);

                    }


                    reader.readAsDataURL(this.files[i]);//chuẩn bị dữ liệu để gửi file

                }//hết for

            }


        });

        // test


        // Firefox bug fix

        inputFile.addEventListener('focus', function () {

            inputFile.classList.add('has-focus');

        });

        inputFile.addEventListener('blur', function () {

            inputFile.classList.remove('has-focus');

        });

    }(document, window, 0));


    function selectCategory(obj) {

        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });


        var data = obj.value;


        //var data = $('#category').val();


        $.ajax({

            type: 'get',

            data: data,

            url: "/dashboard/products/" + data + "/",

            success: function (data) {

                if (data != '[]') {

                    $('#subCategory').html("");

                    $.each(JSON.parse(data), function (key, value) {

                        var option = new Option(value.name, value.id, true);

                        $('#subCategory').append(option);

                    });

                } else {

                    $('#subCategory').html("");

                    $('#subCategory').append("<option selected disabled>" + "không có danh mục con tương ứng" + "</option>");

                }

            }

        });

    }

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.list-product.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>