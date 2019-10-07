<?php $__env->startSection('extend'); ?>
      
  <h4 class="text-center well col-lg-12 col-md-12 col-sm-12 col-xs-12">
      Transport Achivement 
      <a href="<?php echo e(url('/location')); ?>" class=" pull-left">Back</a>
  </h4> 
     
  <section class="well info-truck col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table">
                  <thead>
                    <tr>
                      <th>Truck No.</th>
                      <th>Estimate Date</th>
                      <th>Start Place</th>
                      <th>Destination Place</th>
                      <th>Total Amount</th>
                      <th>Get Amount</th>
                    </tr>
                  </thead> 
                  <tbody>
                      <?php $__currentLoopData = $finish; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                         <tr>
                          <td> <?php echo e($f->truckno); ?></td>
                          <td> <?php echo e($f->estimate_date); ?></td>
                          <td> <?php echo e($f->start_place); ?></td>
                          <td> <?php echo e($f->destinate_place); ?></td>
                          <td> <?php echo e($f->t_amount); ?></td>
                          <td> <?php echo e($f->g_amount); ?></td>
                         </tr> 
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>   
                  </tbody>
              </table> 
        </div>
  </section>
<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>