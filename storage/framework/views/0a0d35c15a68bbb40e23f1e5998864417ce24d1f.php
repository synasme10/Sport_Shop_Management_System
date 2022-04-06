<?php $__env->startSection('maincontent'); ?>

    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="image-pad"> <img class="card-img-top " src="<?php echo e(asset('Sport_Gallery')); ?>/<?php echo e($data->picture); ?>" alt="product" height="410px" ></div></div>

    <div class="col-lg-5">
        <div class="pro-detail">
        <div class="page-header">
            <div class="product-title"><?php echo e($data->brand); ?> <?php echo e($data->brand); ?>/<?php echo e($data->color); ?>/<?php echo e($data->item_name); ?> <?php echo e($data->accessories); ?>

            For <?php echo e($data ->gender); ?>

            </div>
            <div class="brand"> <h5>By <?php echo e($data->supplier); ?></h5></div>
        </div>
            <form method="post" action="/addorder" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <input type="hidden" value="<?php echo e($data->proid); ?>" name="productid"/>
                    <input type="hidden" value="<?php echo e(Auth::user()->id); ?>" name="userid"/>
                    <div class="col-lg-4">
                        <i class="fa fa-chart-area"></i>
                        <span>Size</span>

                      <?php if($data->accessories=='Shoes' or $data->accessories=='Boots' ): ?>

                            <select name="size" class="form-control">
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        </select>

                        <?php elseif($data->accessories=='Clothes'or $data->accessories=='Jersey'): ?>

                            <select name="size" class="form-control">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>

                        </select>
                        <?php elseif($data->accessories=='Ball'): ?>

                            <select name="size" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>

                            </select>
                        <?php else: ?>

                                <option name="size" value=""  hidden></option>
                            <span class="input-group"><i class="fa fa-save"></i></span>
                            <span>Save Rs 250 </span>

                          <?php endif; ?>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Quantity</span>
                        <input type="number" name="quantity" placeholder="Quantity" class="form-control" required>
                    </div>
                </div><br/>


                <div class="row">
                <div class="col-lg-4">
                    <span><b><div class="price">Rs <?php echo e($data->item_price); ?></div></b></span><br/>
                    <strike> Rs <?php echo e($data->item_price+0.16*$data->item_price); ?></strike><b><input type="button" class="btn btn-warning btn-sm" value="16% off" disabled></b>
                </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Delivery Address</span>
                        <input type="text" name="address" placeholder="Address" class="form-control" required>
                    </div>

                </div><br/><br/>
                <div  style="margin-left: 3px;">
                    <input type="submit" value="Order" class="btn btn-warning btn-lg"><br/>
                </div>
            </form>
            <div class="addtocartbutton col-lg-2">
            <form method="post" action="/addtocart" entype="multipart/form-data">
                <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e($data->proid); ?>" name="productid"/>
                    <input type="hidden" value="<?php echo e(Auth::user()->id); ?>" name="userid"/>

                    <input type="submit" value="Add to Cart" class="btn btn-info btn-lg">
            </form>
            </div>
        </div>
    </div>
</div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>



    
    
    


    
    
    

    
    

<?php echo $__env->make('include/user', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>