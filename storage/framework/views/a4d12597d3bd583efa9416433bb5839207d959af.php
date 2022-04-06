<?php $__env->startSection('maincontent'); ?>
    <div class="container">

        <div class="page-header">
            <h2 >User Products</h2>
        </div>

        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($data->stocked==1 and $data->recieved==1 and $data->approved==1): ?>
            <div class="product col-lg-3 col-md-6 mb-4">
                <div class="card">
                    
                    <div class="picture-padding"><a href="/userproductid/<?php echo e($data->productid); ?>"><img class="card-img-top " src="<?php echo e(asset('UserProductImage')); ?>/<?php echo e($data->picture); ?>" alt="product" height="200px" width="200px"></a></div>
                    <div class="card-body">
                       <div class="brand"> <h5 class="card-title"><?php echo e($data->sport); ?></h5></div>
                        <div class="item-padding"><p class="card-text"><b><?php echo e($data->brand); ?> <?php echo e($data->color); ?>/<?php echo e($data->product_name); ?></b></div></p>
                        <div class="item-price"><p class="card-text"><span>Rs.</span> <?php echo e($data->retail_price); ?></p></div>
                    </div>
                </div>
            </div>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('include/user', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>