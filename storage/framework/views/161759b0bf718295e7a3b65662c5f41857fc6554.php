<?php $__env->startSection('maincontent'); ?>
    <div class="container">
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                <li class="nav-item">
                    <?php if(Route::has('register')): ?>
                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                    <?php endif; ?>
                </li>
            <?php endif; ?>
        </ul>
        <div class="page-header">
            <h2><b>Welcome to Sport Warehouse</b></h2>
        </div><br>

        <div class="col-md-12"><span class="col-sm-2"></span>
            <i class="fa fa-angle-double-right "></i>
            <span class="warehouse-help">Start by clicking
            "<a class="nav-item" href="/addnewproduct" style="color:aqua;"> Add new product</a>"
        and  submit your product detail.
        </span><br>
            <span class="col-sm-2"></span>
            <i class="fa fa-angle-double-right "></i>
            <span class="warehouse-help">
            Once you add your product your product will be approved within 2 days
        </span><br>
            <span class="col-sm-2"></span>
            <i class="fa fa-angle-double-right "></i>
            <span class="warehouse-help">
            When your product reach us and they're stocked in our Store, You'll see them in product detail.
        </span><br>
            <span class="col-sm-2"></span>
            <i class="fa fa-angle-double-right "></i>
            <span class="warehouse-help">
           You can find it in our Store.
        </span><br>


        </div><br>
        <span class="col-sm-2"></span><a href="/addnewproduct" class="btn btn-danger" >Add new product</a>
    </div>
    <div class="card-body">
        <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('include/user', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>