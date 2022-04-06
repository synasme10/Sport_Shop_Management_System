<?php $__env->startSection('maincontent'); ?>
    <body>

    <div class="container">

        <div class="row">
            <div class="table-responsive">
                <div class="col-sm-12 col-sm-offset-2">
                    <h3 align="center">Messages</h3><br/>

                    <table class="table table-striped table-dark table-hover table-sm">
                        <thead class="thead-dark">
                        <tr class="alert-dark" align="center">
                            <th class="col-sm-2">Sender</th>
                            <th class="col-sm-2">Subject</th>
                            <th class="col-sm-3">Message</th>
                            <th class="col-sm-3">Date</th>
                            <th class="col-sm-2">View</th>
                            <th class="col-sm-1"></th>

                        </tr>
                        </thead>

                        <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr >
                                <td align="center">
                                    <?php echo e($data->name); ?>

                                </td>
                                <td><?php echo e($data->subject); ?></td>
                                <td>
                                    <span class="text-length">
                                        <?php echo e($data->message); ?>

                                  </span>
                                  </td>
                                <td align="center"><?php echo e($data->created_at); ?></td>
                                <td align="center">
                                    <a href="/viewcontactdetail/<?php echo e($data->mid); ?>" type="button" class="btn btn-primary btn-sm"><span>View</span></a>

                                </td>

                                <td align="center">
                                    <span class="action"><a href="/deletecontact/<?php echo e($data->mid); ?>" > <i class="fa fa-trash-alt"></i></a></span>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </table>


                </div></div></div></div>
    <?php $__env->stopSection(); ?>
    <script src="<?php echo e(asset('js/jquery/jquery-2.2.4.min.js')); ?>"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo e(asset('js/javascript/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dataTables.bootstrap.min.js')); ?>"></script>
    <?php $__env->startSection('tablescript'); ?>
        <script type="text/javascript">
            $(document).ready(function()
            {
                $(".table").DataTable();
            });
        </script>
    <?php $__env->stopSection(); ?>
    </body>
    </html>


<?php echo $__env->make('include/admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>