<?php $__env->startSection('maincontent'); ?>
<div class="container">
    <h3 >Change Profile</h3><br/>
    <?php $__currentLoopData = $userdetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form  method="Post" action="/updateprofile" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <div class="row">
                <div class="col-lg-4">
                    <i class="fa fa-user"></i>
                    <span><label>First Name</label></span>
                    <input type="text" name="firstname" placeholder="First Name" value="<?php echo e($data->name); ?>" class="form-control" required>
                </div>

                <div class="col-lg-4">
                    <i class="fa fa-user"></i>
                    <span><label>Last Name</label></span>
                    <input type="text" name="lastname" placeholder="Last Name" value="<?php echo e($data->last_name); ?>" class="form-control" required>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-lg-4">
                    <i class="fa fa-phone"></i>
                    <span><label>Phone Number</label></span>
                    <input type="text" name="phone" placeholder="Phone number" value="<?php echo e($data->phone); ?>"class="form-control" required>
                </div>

                <div class="col-lg-4">
                    <i class="fa fa-address-book"></i>
                    <span><label>Address:</label></span>
                    <input type="text" name="address" placeholder="Address" value="<?php echo e($data->address); ?>" class="form-control" required>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-lg-4">
                    <i class="fa fa-envelope"></i>
                    <span><label>E-mail Address</label></span>
                    <input type="text" name="email" placeholder="E-mail address" value="<?php echo e($data->email); ?>" class="form-control" required>
                </div>
                <div class="col-lg-4">
                    <i class="fa fa-transgender"></i>
                    <span><label>Gender:  </label></span><br>
                    <input type="radio" name="gender" value="Male"  <?php echo e((($data->gender)=='Male')?'checked':''); ?>>Male
                    <input type="radio" name="gender" value="Female" <?php echo e((($data->gender)=='Female')?'checked':''); ?>>Female<br/>
                </div>
            </div><br>
            <div class="row">
            <div class="col-lg-4">
                <i class="fa fa-lock"></i>
                <span><label>Password:</label></span>
                <input type="password" name="password" placeholder="Password" value="<?php echo e($data->password); ?>" class="form-control" required>
            </div>
            </div>
        </div><br/>
            <br/>
            <input type="hidden" value="<?php echo e($data->id); ?>" name="userid"/>
            <div class="signupbut"><input type="submit" value="Change Profile" class="btn btn-danger"></div>

    </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('include/user', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>