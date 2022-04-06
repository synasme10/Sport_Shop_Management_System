<?php $__env->startSection('maincontent'); ?>
    <body>

    <div class="container">

        <div class="row">
            <div class="table-responsive">
                <div class="col-sm-12 col-sm-offset-2">
                    <h3 align="center">Product Status</h3><br/>

                    <table class="table table-striped table-dark table-hover">
                        <thead class="thead-dark">
                        <tr class="alert-dark" align="center">
                            <th class="col-sm-4" colspan="2"> <span >Product</span></th>
                            <th  class="col-sm-3">Status </th>
                            <th class="col-sm-2">Quantity</th>
                            <th class="col-sm-4" colspan="2">Status</th>
                            <th class="col-sm-3"></th>

                        </tr>
                        </thead>

                        <?php $__currentLoopData = $userproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr align="center">
                                <td align="center">
                                    <img src="<?php echo e(asset('UserProductImage')); ?>/<?php echo e($data->picture); ?>" alt="product" height="100px" width="150px">
                                </td>
                                <td> <?php echo e($data->product_name); ?></td>
                                <td align="center"><?php if($data->approved=='0'): ?>
                                                    <div class="wrong">Not Approved</div>
                                                    <?php else: ?>
                                                      <div class="right">Approved</div>
                                                    <?php endif; ?>
                                </td>
                                <td ><?php echo e($data->quantity); ?></td>
                                  <td>  <?php if($data->recieved=='0'): ?>
                                       <div class="line-wrong">In transit</div>
                                    <?php else: ?>
                                          <div class="line-right">In transit </div>
                                    <?php endif; ?></td>
                                <td>
                                    <?php if($data->stocked=='0'): ?>
                                        <div class="line-wrong">Stocked</div>
                                    <?php else: ?>
                                        <div class="line-right">Stocked</div>
                                    <?php endif; ?></td>
                                <td align="center">
                                    <?php if($data->recieved=='0'): ?>
                                        <form method="post" action="/deleteuserproduct" entype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="item-price">
                                                <input type="hidden" value="<?php echo e($data->productid); ?>" name="productid"/>
                                                <input type="hidden" value="<?php echo e(Auth::user()->id); ?>" name="userid"/>

                                                <button type="submit" value="Delete" class="btn btn-info btn-sm"><i class="fa fa-trash-alt"></i></button>
                                            </div>
                                        </form>
                                <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </table>
                    <a href="/addnewproduct" class="btn btn-danger" >Add new product</a>

                </div></div></div></div>
    <?php $__env->stopSection(); ?>

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