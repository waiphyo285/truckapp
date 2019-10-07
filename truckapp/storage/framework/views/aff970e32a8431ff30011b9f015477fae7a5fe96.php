<?php $__env->startSection('extend'); ?>


 <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

   <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
      <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
        <a href="<?php echo e(url('/partnership')); ?>" class="btn btn-default">Back</a>
      </div>

      <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
        <h4 class="h4">Partner Info Details</h4>
      </div>

  </div>

 </section>


 <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table"> 
                  <thead> 
                      <tr>
                          <th>Properties.</th> 
                          <th>Value. </th> 
                          <th>Properties.</th>
                          <th>Value.</th>
                       </tr>
                  </thead>
                  <tbody> 
                      <tr>
      
                          <th>Person Name</th> 
                          <td><?php echo e($partner->pname); ?></td> 
                          <th>Address</th>
                          <td><?php echo e($partner->paddr); ?></td> 
              
                      </tr>

                      <tr>
      
                          <th>Contact</th> 
                          <td><?php echo e($partner->contact); ?></td> 
                          <th>Personalise</th>
                          <td><?php echo e($partner->personalise); ?></td> 
              
                      </tr>

                      <tr>
      
                         <?php $__currentLoopData = $trucks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                            <?php if($t->id == $partner->truckno): ?>
                              <th>Truck No.</th>
                              <td><?php echo e($t->truckno); ?></td>
                              <th>Truck Info Details</th>
                              <td><a href="<?php echo e(url('/detail/'.$t->id)); ?>">Details</a></td>
      
                            <?php endif; ?>

                          <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


                      </tr>

                      <tr>
                          <th>Present</th> 
                         
                            <?php if($partner->present == 1): ?>

                              <td>Yes</td>

                            <?php elseif($partner->present == 0): ?>

                              <td>No</td>

                            <?php endif; ?>
                          <th>Licence</th> 
                          <td><?php echo e($partner->licence); ?></td> 
                           
              
                      </tr>

                      <tr>

                          <th>Age</th>
                          <td><?php echo e($partner->age); ?></td> 
                           <th>Experience</th>
                          <td><?php echo e($partner->experience); ?></td>
          
                      </tr>
                  </tbody>
              </table> 
          </div>

</section>

<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('apkhome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>