<?php $__env->startSection('maincontent'); ?>
    <body>

    <div class="container">

        <div class="row">
            <div class="table-responsive">
                <div class="col-sm-12 col-sm-offset-2">
                    <h3 align="center">User product Order Detail</h3><br/>

                    <table class="table table-striped table-dark table-hover">
                        <thead class="thead-dark">
                        <tr class="alert-dark" align="center">
                            <th class="col-sm-6" colspan="2"> <span >Order detail</span></th>
                            <th  class="col-sm-2">Qty </th>
                            <th class="col-sm-2">Price</th>
                            <th class="col-sm-2">Status</th>
                            <th class="col-sm-3"></th>

                        </tr>
                        </thead>

                        <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr >
                                <td align="center">
                                    <img src="<?php echo e(asset('UserProductImage')); ?>/<?php echo e($data->picture); ?>" alt="product" height="100px" width="150px"></td>
                                <td> <?php echo e($data->brand); ?> /<?php echo e($data->product_name); ?> <?php echo e($data->accessories); ?>

                                    (<?php echo e($data->color); ?>/<?php echo e($data->Size); ?>)
                                    <div class="detail">
                                        <br> <?php echo e($data->product_name); ?>

                                        <br> <?php echo e($data->accessories); ?>

                                        <br> Color: <?php echo e($data->color); ?>

                                    </div>

                                </td>
                                <td align="center"><?php echo e($data->Quantity); ?></td>
                                <td align="center">Rs <?php echo e($data->retail_price); ?></td>
                                <td align="center">
                                    <?php if($data->Delivered=='0'): ?>
                                        <div class="line-wrong">Delievered</div>
                                    <?php else: ?>
                                        <div class="line-right">Delievered</div>
                                    <?php endif; ?></td>
                                <td align="center">
                                    <form method="post" action="/deleteuserproductorder" entype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="item-price">
                                            <input type="hidden" value="<?php echo e($data->order_id); ?>" name="ordid"/>
                                            <input type="hidden" value="<?php echo e(Auth::user()->id); ?>" name="userid"/>

                                            <button type="submit" value="Delete" class="btn btn-info btn-sm"><i class="fa fa-trash-alt"></i></button>
                                        </div>
                                    </form>
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


<?php echo $__env->make('include/user', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>