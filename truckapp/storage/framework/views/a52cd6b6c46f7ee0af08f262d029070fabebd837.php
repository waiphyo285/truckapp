<?php $__env->startSection('extend'); ?>
          
    <h4 class="text-center well col-lg-12 col-md-12 col-sm-12 col-xs-12">
      All Truck Accounts Detail
      <a href="<?php echo e(url('/achieve')); ?>" class="pull-left">Back</a>
      <a href="<?php echo e(url('/net')); ?>" class="btn btn-xs pull-right">Net Profits</a>
    </h4>

  <section class="well info-truck col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Truck No.</th>
                      
                      <th><span class="pull-right">Account Details</span></th>
                    </tr>
                  </thead> 
                  <tbody>
                      <?php $i=1; ?>
                      <?php $__currentLoopData = $trucks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                         <tr>
                          <td><?php echo $i++;?></td>
                          <td>
                              <?php echo e($t->truckno); ?>

                          </td>
                          <td>
                              <span class="pull-right">
                                  <a href="<?php echo e(url('/detailacc/'.$t->truckno)); ?>" class="btn btn-sm" >Details</a>
                              </span>
                          </td>
                         </tr> 
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>   
                  </tbody>
              </table> 
        </div>
  </section>
<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>