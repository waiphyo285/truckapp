<?php $__env->startSection('extend'); ?>
  <?php if(session('samedate')): ?>
  <h4 class="text-center alert alert-warning col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <?php echo e(session('samedate')); ?>

  </h4> 
  <?php elseif(session('addevent')): ?>
  <h4 class="text-center alert alert-warning col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <?php echo e(session('addevent')); ?>

  </h4>
  <?php elseif(session('cancel')): ?>
  <h4 class="text-center alert alert-danger col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <?php echo e(session('cancel')); ?>

  </h4>
  <?php elseif(session('success')): ?>
  <h4 class="text-center alert alert-success col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <?php echo e(session('success')); ?>

  </h4> 
  <?php else: ?>       
    <h4 class=" well col-lg-12 col-md-12 col-sm-12 col-xs-12">
      Current Truck Location
      <a href="<?php echo e(url('/finish')); ?>" class="btn btn-xs btn-default pull-right">   
        Achievement
      </a>
      <a href="<?php echo e(url('/viewcase/')); ?>" class="btn btn-xs btn-default pull-right"> Cases On Road</a> 
      <!--<a href="<?php echo e(url('/yourloc')); ?>" class="btn btn-xs pull-right">Your Location</a> -->
  </h4> 
  <?php endif; ?>       
  <section class="well info-truck col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table">
                  <thead>
                    <tr>
                      <th>Truck No.</th>
                      <th>Starting Date</th>
                      <th>Estimate Date</th> 
                      <th>Current Location</th>
                      <th>Any Case For Transport</th>
                    </tr>
                  </thead> 
                  <tbody>
                      <?php $__currentLoopData = $trucks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                         <tr>
                          <td>
                              <?php echo e($t->truckno); ?>

                          </td>
                          <td>
                             <?php
                                $op=explode(" ",$t->created_at);
                                echo $op[0];
                             ?>
                           </td>
                           <td><?php echo e($t->curdate); ?></td>
                           <td><?php echo e($t->place); ?></td>
                           <td>
                              <a href="<?php echo e(url('/no/'.$t->curid)); ?>" class="btn btn-sm" >No</a>
                              <a href="<?php echo e(url('/yes/'.$t->curid)); ?>" class="btn btn-sm">Yes</a> 
                              <a href="<?php echo e(url('/cancel/'.$t->curid)); ?>" class="btn btn-sm" >
                                Cancel
                              </a>
                           </td>
                         </tr> 
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>   
                  </tbody>
              </table> 
        </div>
  </section>
<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>