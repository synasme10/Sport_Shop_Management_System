<?php $__env->startSection('maincontent'); ?>
    <div class="container">
        <div class="signup">
            <div class="row ">
                <div class="col-lg-1"></div>
                <div class="col-lg-12">
                    <div id="UI">
<?php $__currentLoopData = $updatepro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form  method="Post" action="/editproduct"  enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="page-header"><h3 class="font-bold ">Add Product</h3>
                                
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <i class="fa fa-money-check"></i>
                                    <label>Item Name:</label>
                                    <input type="text" name="itemname"  value="<?php echo e($data->item_name); ?>" placeholder="Item Name" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    <i class="fa fa-money-bill"></i>
                                    <label>Price:</label>
                                    <input type="text" name="price" value="<?php echo e($data->item_price); ?>" placeholder="Item Price" class="form-control">
                                </div>
                                
                                
                                
                                
                                
                            </div><br/>
                            <div class="row">
                                <div class="col-lg-6">
                                    <i class="fa fa-adjust"></i>
                                    <span ><label>Color:</label></span>
                                    <input type="text" name="color" value="<?php echo e($data->color); ?>" placeholder="Color" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <i class="fa fa-globe"></i>
                                    <span><label>Sports:</label></span>
                                    <input type="text" name="sports" value="<?php echo e($data->sport); ?>" placeholder="Sports" class="form-control">
                                </div>
                            </div><br/>

                            <div class="row">
                                <div class="col-lg-6">
                                    <i class="fa fa-apple-alt"></i>
                                    <span><label>Brand:</label></span>
                                    <input type="text" name="brand" value="<?php echo e($data->brand); ?>" placeholder="brand" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <i class="fa fa-th-large"></i>
                                    <span><label>Accessories:</label></span>
                                    <input type="text" name="accessories" value="<?php echo e($data->accessories); ?>" placeholder="Accessories" class="form-control">
                                </div>
                            </div><br/>
                            <div class="row">
                                <div class="col-lg-6">
                                    <i class="fa fa-strikethrough"></i>
                                    <span><label>Supplier:</label></span>
                                    <input type="text" name="supplier" value="<?php echo e($data->supplier); ?>" placeholder="Supplier" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    <i class="fa fa-transgender"></i><span>Gender:</span><br>
                                    <input type="radio" name="gender" value="Male" <?php echo e((($data->gender)=='Male')?'checked':''); ?>>Male
                                    <input type="radio" name="gender" value="Female" <?php echo e((($data->gender)=='Female')?'checked':''); ?>>Female<br/>
                                </div>
                            </div><br/>

                            <div class="row">
                                <div class="col-lg-11">
                                    <i class="fa fa-list-alt"></i><span><label>Description:</label></span>
                                    <textarea name="description"  placeholder="Description" rows="5"  class="form-control"><?php echo e($data->description); ?></textarea>
                                </div>
                            </div><br/>

                            <div class="form-file">
                                <label for="file" class="filetype">
                                    <i class="fa fa-upload"></i>
                                    Select Image</label>
                                <input id="file" type="file" name="proimage"/>
                            </div>
                            <input type="hidden" value="<?php echo e($data->proid); ?>" name="productid"/>
                            <div class="row">
                                <div class="addpro"><input type="submit" value="Add Your Product" class="btn btn-danger btn-lg"></div><br/>

                                <div class="proback"><a href="/admindashboard"  type="button" class="btn btn-info btn-lg">Back</a></div>
                            </div>
                        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('include/admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>