<?php $__env->startSection('extend'); ?> 
  <?php if(session('notruck')): ?>
  <h4 class="alert alert-warning col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;"><?php echo e(session('notruck')); ?></h4>
  <?php elseif(session('addloc')): ?>
  <h4 class="alert alert-success col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;"><?php echo e(session('addloc')); ?></h4>
  <?php else: ?>     
  <h4 class="text-center well col-lg-12 col-md-12 col-sm-12 col-xs-12">
        New Booking
        <a href="<?php echo e(url('/achieve')); ?>" class="pull-left">Back</a>
  </h4>
  <?php endif; ?>
  <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form method="post" role="form">
      <?php echo e(csrf_field()); ?>

       <div  class="col-md-12"> 
                  <div class="row form-group col-md-10 col-md-offset-1">
                        <div class="col-sm-4">
                         <br> 
                          <label>Available Truck</label>       
                       </div>
                       <div class="col-sm-4">  
                          <select class="sel-tk selectpicker col-lg-12 col-md-12 col-sm-12 col-xs-12" name="truckno" data-live-search="true">
                              <optgroup label="Truck Reg.">
                                  <?php $__currentLoopData = $trucks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                      <option value="<?php echo e($t->truckno); ?>">
                                          <?php echo e($t->truckno); ?>

                                      </option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
                              </optgroup>
                          </select>   
                       </div> 
                  </div> 
                  <div class="row form-group col-md-10 col-md-offset-1">
                        <div class="col-md-4 col-md-offset-4">
                          <input type="submit" value="Add To Booking" class="btn col-md-12 btn-primary col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        </div>
                  </div>          
            </div>
      </form>
  </section>
  <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:200px;overflow-y:scroll;">
      <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table">
                  <thead>
                    <tr>
                      <th>Truck No.</th>
                      <th>Current Place</th>
                      <th>Is Back ?</th>
                    </tr>
                  </thead> 
                  <tbody>
                      <?php $__currentLoopData = $backtrucks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bt): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                         <tr>
                          <td> <?php echo e($bt->truckno); ?></td>
                          <td> <?php echo e($bt->place); ?></td>
                          <td>
                            <a href="<?php echo e(url('/addloc/'.$bt->id)); ?>" class="btn btn-default btn-sm" >Yes</a>
                          </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>   
                  </tbody>
              </table> 
        </div>
  </section>
<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>