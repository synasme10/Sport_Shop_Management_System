<?php $__env->startSection('navbar'); ?>


        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>User Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/viewproductdetail">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Store</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/orderdetail/<?php echo e(Auth::user()->id); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Order Details</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"  aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>User Product</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="/userproductview">User product store</a>
                    <a class="dropdown-item" href="/userproductorderdetail/<?php echo e(Auth::user()->id); ?>">Product Order detail</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"  aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>WareHouse</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="/addnewproduct">Add new product</a>
                    <a class="dropdown-item" href="/productstatus/<?php echo e(Auth::user()->id); ?>">Product status</a>
                </div><br>
            </li>

         <button type="button" class="btn btn-info" >Discount 10%</button><br>
            <div class="social-small">
            <a href="#" class="social-icon"><img src="<?php echo e(asset('social_media/facebook.png')); ?>" alt="First slide" width="40px" height="40px"></a>
            <a href="#" class="social-icon"><img src="<?php echo e(asset('social_media/instagram.png')); ?>" alt="First slide" width="40px" height="40px"></a>
            <a href="#" class="social-icon"><img src="<?php echo e(asset('social_media/twitter.png')); ?>" alt="First slide" width="40px" height="40px"></a>
            <a href="#" class="social-icon"><img src="<?php echo e(asset('social_media/youtube.png')); ?>" alt="First slide" width="40px" height="40px"></a>
            </div>
        </ul>

    <?php echo $__env->yieldContent('sidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('login'); ?>
    <!-- Navbar Search -->
    <!-- Navbar Search -->
    <form  role="search" method="post" action="/searchproduct" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <?php echo csrf_field(); ?>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search ..." id="search" name="search">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <div id="searchlist"></div>
        </div>
    </form>
        <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <li class="nav-item ">
                <a class="nav-link" href="/wishlist/<?php echo e(Auth::user()->id); ?>">
                    <i class="fa fa-heart"></i>
                    <span>Wish list</span>
                </a>
            </li>
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                    <span> <?php echo e(Auth::user()->name); ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="/myprofile/<?php echo e(Auth::user()->id); ?>">My Profile</a>
                    <a class="dropdown-item" href="/changeprofile/<?php echo e(Auth::user()->id); ?>">Change Profile</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('tablescript'); ?>
    <script type="text/javascript">
    $(document).ready(function(){
    $(#search).keyup(function(){                        //key upmethod
        var query=$(this).val();                           //this will get the serach item name under val()
        if(query !='')
        {
            var _token=$('input[name="_token"]').val();
            $.ajax({
                    url:"<?php echo e(route('autocomplete.fetch')); ?>",
                    method:"POST",
                    data:{query:query,_token:_token},
                    success:function(data)
                    {
                         $('#searchlist').fadeIn();
                         $('#searchlist').html(data);
                    }
                })
        }

        });
    });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('include.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>