<?php $__env->startSection('maincontent'); ?>
<div class="container">
    <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="contact-message">
<div class="text">
    <div class="text-small">By <?php echo e($data->name); ?></div>
    <div class="text-extrasmall">
        <i class="fas fa-user-circle fa-fw"></i><?php echo e($data->email); ?>

    </div>
    <p class="subject" align="center">Subject: <u><?php echo e($data->subject); ?></u></p>

    <p class="message"><?php echo e($data->message); ?></p>
    <div class="date text-right">
        Date: <?php echo e($data->created_at); ?>

    </div>
</div>
    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('include/admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>