<?php $__env->startSection('extend'); ?>

  <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
      <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
        <a href="<?php echo e(url('/ownership')); ?>" class="btn btn-default">Back</a>
      </div>

      <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
        <h4 class="h4">Truck Info Details</h4>
      </div>

    </div>

 </section>

 <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table"> 
                  <thead> 
                      <tr>
                          <th>Main Titles.</th> 
                          <th>Value. </th> 
                          <th>Main Titles.</th>
                          <th>Value.</th>
                       </tr>
                  </thead>
                  <tbody> 
                      <tr>
      
                          <th>Brand Name</th> 
                          <td><?php echo e($truck->brandname); ?></td> 
                          <th>Reg No.</th>
                          <td><?php echo e($truck->truckno); ?></td> 
              
                      </tr>

                      <tr>
      
                          <th>Model</th> 
                          <td><?php echo e($truck->truckmodel); ?></td> 
                          <th>Fuel</th>
                          <td><?php echo e($truck->fuel); ?></td> 
              
                      </tr>

                      <tr>
      
                          <th>Wheels</th> 
                          <td><?php echo e($truck->wheels); ?> </td> 
                          <th>Made Country</th>
                          <td><?php echo e($truck->country); ?></td> 
              
                      </tr>

                      <tr>
      
                          <th>Engine No.</th> 
                          <td><?php echo e($truck->engineno); ?></td> 
                          <th>Recieved Date</th>
                          <td><?php echo e($truck->date); ?></td> 
              
                      </tr>

                      <tr>
      
                          <th>Costs (MMK)</th> 
                          <td><?php echo e($truck->cost); ?></td> 
                          <th>Color</th>
                          <td><div style="height:20px;width:30px;background:<?php echo e($truck->color); ?>;"></div></td> 
              
                      </tr>
                  </tbody>
              </table> 
          </div>

</section>

<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('apkhome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>