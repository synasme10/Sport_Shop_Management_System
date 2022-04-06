<?php $__env->startSection('maincontent'); ?>
    <div class="container">
        <div class="col-sm-12 col-sm-offset-2">
        <h3 align="center">My profile</h3><br/>
            <?php $__currentLoopData = $userdetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="inline"></div>
                <div class="gender-photo col-lg-4">
                    <?php if($data->gender=='Male'): ?>

                        <img src="<?php echo e(asset('image')); ?>/male.jpg" alt="userimage" height="300px" width="250px">

                    <?php else: ?>

                        <img src="<?php echo e(asset('image')); ?>/female.jpg" alt="userimage" height="300px" width="250px">

                    <?php endif; ?>
                </div>
            <div class="table-hori col-lg-8">
            <table class="table table-striped table-dark table-hover ">
                <tr >
                    <td class="col-lg-6">First Name</td>
                    <td><?php echo e($data->name); ?></td>
                </tr>

                    <tr>
                        <td>Last Name</td>
                        <td><?php echo e($data->last_name); ?></td>
                    </tr>
                <tr>
                    <td>Phone number</td>
                    <td><?php echo e($data->phone); ?></td>
                </tr>
                    <tr>
                        <td>Address</td>
                        <td><?php echo e($data->address); ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo e($data->email); ?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><?php echo e($data->gender); ?></td>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>

                <a href="/changeprofile/<?php echo e(Auth::user()->id); ?>" class="btn btn-primary" >Change Profile</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('include/user', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>