<?php $__env->startSection('extend'); ?>
          
    <h4 class="text-center well col-lg-12 col-md-12 col-sm-12 col-xs-12">
       Account Detials For <?php echo e($t); ?>

      <a href="<?php echo e(url('/account')); ?>" class="pull-left">Back</a>
    </h4>

  <section class="well info-truck col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:380px;overflow-y:scroll;">
        <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Date</th>
                      <th>Amounts</th>
                      <th>Total Amounts</th>
                      <th>Get Amounts</th>
                      <th>Total Get Amounts</th>
                    </tr>
                  </thead> 
                  <?php 
                    $all_amount=0;
                    $all_get=0;
                  ?>
                  <tbody>
                      <?php $i=1; ?>
                      <?php $__currentLoopData = $deltruck; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                         <tr>
                          <td><?php echo $i++;?></td>
                          <td>
                            <?php
                                $op=explode(" ",$t->created_at);
                                echo $op[0];
                             ?>
                          </td>
                          <td><?php echo e($t->t_amount); ?></td>
                          <th>
                              <?php
                                $all_amount+=$t->t_amount;
                                echo $all_amount;
                              ?> 
                          </th>
                          <td><?php echo e($t->g_amount); ?></td> 
                          <th>
                            <?php
                              $all_get+=$t->g_amount;
                              echo $all_get;
                            ?>
                          </th>                  
                         </tr> 
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>   
                  </tbody>
              </table> 
        </div>
  </section>
<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('apkhome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>