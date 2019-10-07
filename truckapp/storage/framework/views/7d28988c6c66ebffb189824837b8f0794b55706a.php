<?php $__env->startSection('extend'); ?>
     
  <h4 class=" well text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <a href="<?php echo e(url('/location')); ?>" class="pull-left">Back</a>
      Truck Cases Detail
  </h4>       
  <section class="well info-truck col-lg-12 col-md-12 col-sm-12 col-xs-12" >
        <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Date</th>
                      <th>Truck No.</th>
                      <th>Case Type</th>
                    </tr>
                  </thead> 
                  <tbody>
                      <?php $i=1;?>
                      <?php $__currentLoopData = $cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td>
                          <?php
                              $op=explode(" ",$c->created_at);
                              echo $op[0];
                            ?>
                        </td>
                        <td><?php echo e($c->truckno); ?></td>
                        <td><?php echo e($c->event); ?></td>
                      </tr> 
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                  </tbody>
              </table> 
        </div>
  </section>
<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>