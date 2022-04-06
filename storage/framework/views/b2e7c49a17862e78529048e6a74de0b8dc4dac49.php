<?php $__env->startSection('maincontent'); ?>

    <?php $__currentLoopData = $userproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="image-pad">
            <img class="card-img-top " src="<?php echo e(asset('UserproductImage')); ?>/<?php echo e($data->picture); ?>" alt="product" height="410px" ></div></div>

    <div class="col-lg-5">
        <div class="pro-detail">
        <div class="page-header">
            <div class="product-title"><?php echo e($data->brand); ?> <?php echo e($data->brand); ?>/<?php echo e($data->color); ?>/<?php echo e($data->product_name); ?> <?php echo e($data->accessories); ?>


            </div>
            <div class="brand"> <h5>Owned by <?php echo e($data ->Store_name); ?></h5></div>
        </div>
            <a href="/rate" type="button" class="btn btn -info">Rate</a>
            <div class="row">
                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5"/><label for="star5" title="Excellent">5 Stars</label>
                    <input type="radio" id="star4" name="rating" value="5"/>
                    <input type="radio" id="star3" name="rating" value="5"/>
                    <input type="radio" id="star2" name="rating" value="5"/>
                    <input type="radio" id="star1" name="rating" value="5"/>
                </div>
            </div>


            <form method="post" action="/userproductorder" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <input type="hidden" value="<?php echo e($data->productid); ?>" name="productid"/>
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
                    <span><b> <div class="price">Rs <?php echo e($data->retail_price+0.10*$data->retail_price); ?></div></b></span><br/>

                </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Delivery Address</span>
                        <input type="text" name="address" placeholder="Address" class="form-control" required>
                    </div>

                </div><br/><br/>
                <div class="fas fa-fw fa-stars" data-rating="4"></div>
                <div class="row">
                  <div class="col-sm-1"></div>  <input type="submit" value="Order" class="btn btn-warning btn-lg"><br/></div>
            </form>
        </div>
    </div>
</div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>



    
    
    


    
    
    

    
    

<?php echo $__env->make('include/user', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>