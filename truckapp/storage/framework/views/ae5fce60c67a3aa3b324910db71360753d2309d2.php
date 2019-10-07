<?php $__env->startSection('extend'); ?>
        
  <h4 class="text-center well col-lg-12 col-md-12 col-sm-12 col-xs-12">
        Parnter Info Details
        <a href="<?php echo e(url('/partnership')); ?>" class="pull-left">Back</a>
  </h4>
  <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table"> 
                  <tbody> 
                      <tr>
                          <th>Partner Name</th> 
                          <td><?php echo e($truck->pname); ?></td> 
                      </tr>
                      <tr>  
                          <th>Address</th>
                          <td><?php echo e($truck->address); ?></td> 
                      </tr>
                      <tr>  
                          <th>Contact</th>
                          <td><?php echo e($truck->contact); ?></td> 
                      </tr>
                      <tr>  
                          <th>Reg No.</th>
                          <td><?php echo e($truck->truckno); ?></td> 
                          <th>Register At</th>
                          <td><?php echo e($truck->created_at); ?></td> 
                      </tr>
                      <tr>
                          <th>Wheels</th> 
                          <td><?php echo e($truck->wheels); ?> </td> 
                          <th>Color</th>
                          <td>
                            <div style="height:20px;width:30px;background:<?php echo e($truck->color); ?>;"></div>
                          </td> 
                      </tr>
                      <tr> 
                          <th>Present</th> 
                          <?php if($truck->present == 1): ?>
                            <td>Yes</td>
                          <?php else: ?>
                            <td>No</td> 
                          <?php endif; ?>
                          <th>Current Place</th>
                          <td>
                            <?php echo e($truck->place); ?>

                          </td> 
                      </tr>
                  </tbody>
              </table> 
        </div>
</section>

<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('apkhome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>