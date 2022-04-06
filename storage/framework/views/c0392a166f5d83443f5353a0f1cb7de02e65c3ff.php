<?php $__env->startSection('navbar'); ?>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/admindashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"  aria-expanded="false">
                    <i class="fa fa-folder"></i>
                    <span>Product</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="/product">Add product</a>
                    <a class="dropdown-item" href="/viewproduct">View Product</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"  aria-expanded="false">
                    <i class="fa fa-folder"></i>
                    <span>Verification</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">

                    <a class="dropdown-item" href="/adminuserproductverify">User Product</a>
                    <a class="dropdown-item" href="/orderverify">Order Verify</a>
                    <a class="dropdown-item" href="/userproductorderverify">User Product Order</a>

                </div>
            </li>
            
            
            
            
            

        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('login'); ?>

    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link" href="/contactdetail">
                <i class="fas fa-envelope fa-fw"></i>
            </a>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
                <span>   <?php echo e(Auth::user()->name); ?> </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>
            </div>
        </li>
    </ul>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('maincontent'); ?>
    <div class="wrapper">
    <div class="page-header">
        <h2><b>Admin Help</b></h2>
    </div><br>

    <div class="col-md-12"><span class="col-sm-2"></span>
        <i class="fa fa-angle-double-right "></i>
        <span class="warehouse-help">Start by clicking
            "<a class="nav-item" href="/product" style="color:aqua;"> Add your product</a>"
        and  submit your product detail.
        </span><br>
        <span class="col-sm-2"></span>
        <i class="fa fa-angle-double-right "></i>
        <span class="warehouse-help">
            Once you add your product your product can be view by clicking
              "<a class="nav-item" href="/viewproduct" style="color:aqua;"> View product</a>"
        </span><br>
        <span class="col-sm-2"></span>
        <i class="fa fa-angle-double-right "></i>
        <span class="warehouse-help">
           You can edit and delete the your product.
        </span><br>
        <span class="col-sm-2"></span>
        <i class="fa fa-angle-double-right "></i>
        <span class="warehouse-help">
           The product is stocked in store.
        </span><br>
        <i class="fa fa-angle-double-right "></i>
        <span class="warehouse-help">
           You can verify product that are added by user so that the added product can be approved and keep them in stock by clicking
            "<a class="nav-item" href="/adminuserproductverify" style="color:aqua;"> User product</a>"
        </span><br>
        <i class="fa fa-angle-double-right "></i>
        <span class="warehouse-help">
           You can verify order when they are delivered by checking the delivery box in "<a class="nav-item" href="/adminuserproductverify" style="color:aqua;">Order verify</a>"
        </span><br>

        <i class="fa fa-angle-double-right "></i>
        <span class="warehouse-help">
           You can verify user product order when they are delivered by checking the delivery box in "<a class="nav-item" href="/userproductorderverify" style="color:aqua;"> View product Order</a>"
        </span><br>
    </div>

    </div><br>

    <span class="col-sm-2"></span><a href="/product" class="btn btn-danger" >Add new product</a>
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
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('include/index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>