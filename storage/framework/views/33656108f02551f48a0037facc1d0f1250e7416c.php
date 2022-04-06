<?php $__env->startSection('maincontent'); ?>
    <body>

    <div class="container">

        <div class="row">
            <div class="table-responsive">
                <div class="col-sm-12 col-sm-offset-2">
                    <h3 align="center">Order Verfication</h3><br/>

                    <table class="table table-striped table-dark table-hover">
                        <thead class="thead-dark">
                        <tr class="alert-dark" align="center">
                            <th class="col-sm-4" colspan="2"> <span >Order detail</span></th>
                            <th  class="col-sm-2">Quantity </th>
                            <th class="col-sm-2">Price</th>
                            <th class="col-sm-2">Delivered</th>
                            <th class="col-sm-2">Action</th>
                        </tr>
                        </thead>

                        <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr >
                                <td align="center">
                                    <img src="<?php echo e(asset('Sport_Gallery')); ?>/<?php echo e($data->picture); ?>" alt="product" height="100px" width="150px"></td>
                                <td> <?php echo e($data->brand); ?> /<?php echo e($data->item_name); ?> <?php echo e($data->accessories); ?>

                                    For <?php echo e($data->gender); ?> (<?php echo e($data->color); ?>/<?php echo e($data->Size); ?>)
                                    <div class="detail">
                                        <br> <?php echo e($data->item_name); ?>

                                        <br> <?php echo e($data->accessories); ?> for <?php echo e($data->gender); ?>

                                        <br> Color: <?php echo e($data->color); ?>

                                    </div>



                                </td>
                                <td align="center"><?php echo e($data->Quantity); ?></td>
                                <td align="center">Rs <?php echo e($data->item_price); ?></td>
                                <form  method="Post" action="/orderverifyupdate"  enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                <td  align="center">
                                    <div class="form-group">
                                        <input type="checkbox" name="deliver" value="1"  <?php echo e((($data->Delivered)=='1')?'checked':''); ?>/>
                                        <label class="checkbox-text">Delivered</label>
                                    </div>
                                </td>
                                    <td align="center">
                                        <input type="hidden" value="<?php echo e($data->order_id); ?>" name="orderid"/>
                                        <input type="submit" value="Change" class="btn btn-danger btn-sm">
                                    </td>
                                </form>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </table>

                    <a href="/orderverify" class="btn btn-danger" >Refresh</a>
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