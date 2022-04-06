<?php $__env->startSection('maincontent'); ?>
<body>

<div class="container">

     <div class="row">
        <div class="table-responsive">
         <div class="col-md-12 col-sm-offset-2">
    <h3 align="center">Product table</h3><br/>
        <table class="table table-striped table-dark  table-hover ">
                <thead class="thead-dark">
                    <tr class="alert-dark" align="center">
                        <th>ID</th>
                        <th>Item </th>
                        <th >Price</th>
                        <th>Color</th>
                        <th>Sports</th>
                        <th>Brands</th>
                        <th>Accessories</th>
                        <th>Supplier</th>
                        <th>Photo</th>
                        <th colspan="2">Action</th>

                    </tr>
                </thead>

<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr align="center">
                    <td><?php echo e($data->proid); ?></td>
                    <td><?php echo e($data->item_name); ?></td>
                    <td><?php echo e($data->item_price); ?></td>
                    <td><?php echo e($data->color); ?></td>
                    <td><?php echo e($data->sport); ?></td>
                    <td><?php echo e($data->brand); ?></td>
                    <td><?php echo e($data->accessories); ?></td>
                    <td><?php echo e($data->supplier); ?></td>
                    <td><img src="<?php echo e(asset('Sport_Gallery')); ?>/<?php echo e($data->picture); ?>" alt="product" height="100px" width="150px"></td>
                    <td align="center"><span class="action"><a href="/selectid/<?php echo e($data->proid); ?>">
                                <i class="fa fa-edit"></i></a></span></td>
                    <td><span class="action"><a  href="/deleteproduct/<?php echo e($data->proid); ?>" >
                                <i class="fa fa-trash-alt"></i></a></span></td>
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