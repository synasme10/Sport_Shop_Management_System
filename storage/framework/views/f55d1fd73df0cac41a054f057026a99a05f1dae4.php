<?php $__env->startSection('maincontent'); ?>
    <body>

    <div class="container">

        <div class="row">
            <div class="table-responsive">
                <div class="col-sm-12 col-sm-offset-2">
                    <a href="/adminuserproductverify" class="btn btn-danger btn-sm" >Refresh</a><h3 align="center">User Product Verfication</h3><br/>

                    <table class="table table-striped table-dark table-hover">
                        <thead class="thead-dark">
                        <tr class="alert-dark" align="center">
                            <th class="col-sm-2" > <span >Product</span></th>
                            <th class="col-sm-2" > <span >Product detail</span></th>
                            <th  class="col-sm-1">Qty </th>
                            <th class="col-sm-2">Approved</th>
                            <th class="col-sm-2">Recieved</th>
                            <th class="col-sm-2">Stocked</th>
                            <th class="col-sm-2">Action</th>
                        </tr>
                        </thead>

                        <?php $__currentLoopData = $userproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td align="center">
                                    <img src="<?php echo e(asset('UserProductImage')); ?>/<?php echo e($data->picture); ?>" alt="product" height="100px" width="150px">
                                </td>
                                <td>
                                    <?php echo e($data->product_name); ?>

                                    <br>Rs <?php echo e($data->retail_price); ?>

                                    <br><?php echo e($data->color); ?>

                                    <br><?php echo e($data->brand); ?>

                                    <br><?php echo e($data->Store_name); ?>


                                </td>
                                <td align="center"><?php echo e($data->quantity); ?></td>
                                <form  method="Post" action="/edituserproduct"  enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                <td align="center">
                                    <div class="form-group">
                                        <input type="checkbox" name="approve" value="1" <?php echo e((($data->approved)=='1')?'checked':''); ?>/>
                                        <label class="checkbox-text">Approved</label>
                                    </div>
                                </td>

                                  <td  align="center">
                                      <div class="form-group">
                                         <input type="checkbox" name="recieve" value="1" <?php echo e((($data->recieved)=='1')?'checked':''); ?>/>
                                         <label class="checkbox-text">Recieved</label>
                                      </div>
                                  </td>

                                <td  align="center">
                                    <div class="form-group">
                                         <input type="checkbox" name="stock" value="1"  <?php echo e((($data->stocked)=='1')?'checked':''); ?>/>
                                        <label class="checkbox-text">Stocked</label>
                                    </div>
                                </td>

                                <td>
                                    <input type="hidden" value="<?php echo e($data->productid); ?>" name="productid"/>
                                       <input type="submit" value="Change" class="btn btn-danger btn-sm">
                                </td>
                                </form>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </table>


                    <a href="/adminuserproductverify" class="btn btn-danger" >Refresh</a>
                </div>
            </div>
        </div>
    </div>
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



<?php echo $__env->make('include/admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>