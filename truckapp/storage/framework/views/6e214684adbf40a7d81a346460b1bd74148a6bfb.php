<?php $__env->startSection('extend'); ?>
 
 <div class="row"> 
    <?php if(session('notruck')): ?>
      <h4 class="well text-warning col-lg-8 col-md-8 col-sm-8 col-xs-8"><?php echo e(session('notruck')); ?></h4>
    <?php elseif(session('indate')): ?>
      <h4 class="well text-warning col-lg-8 col-md-8 col-sm-8 col-xs-8"><?php echo e(session('indate')); ?></h4>
    <?php elseif(session('inplace')): ?>
      <h4 class="well text-warning col-lg-8 col-md-8 col-sm-8 col-xs-8"><?php echo e(session('inplace')); ?></h4>
    <?php elseif(session('okay')): ?>
      <h4 class="well text-success col-lg-8 col-md-8 col-sm-8 col-xs-8"><?php echo e(session('okay')); ?></h4>
    <?php elseif(session('booking')): ?>
      <h4 class="well text-success col-lg-8 col-md-8 col-sm-8 col-xs-8">  <?php echo e(session('booking')); ?>

      </h4>
    <?php else: ?>
    <h4 class='well col-lg-8 col-md-8 col-sm-8 col-xs-8 text-center'>
      Achievement
    </h4>
    <?php endif; ?>
    <h4 class='well col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center'>
      Booking Trucks
    </h4>
 </div>
    
<div class="row">
  <section class="well col-lg-8 col-md-8 col-sm-8 col-xs-8">

    <form method="post" role="form">
      <?php echo e(csrf_field()); ?>

       <div  class="col-md-12"> 
                  <div class="row form-group col-md-10 col-md-offset-1">
                        <div class="col-sm-4">
                         <br> 
                          <label>Estimated Date</label>       
                       </div>
                        <div class="col-sm-8">
                           <input type="date" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="" name="date" required>       
                       </div> 
                  </div> 
                  <div class="row form-group col-md-10 col-md-offset-1"> 
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
                       <div class="col-sm-4">
                                <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="start" value="<?php echo e($place); ?>" readonly>
                       </div> 
                       <div class="col-sm-4">
                               <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="destination" placeholder="Destination Place"
                               value="" maxlength="30" required>
                        </div>               
                    </div>  
    
                   <div class="row form-group col-md-10 col-md-offset-1">
                       <div class="col-sm-6">   
                          <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12"  min="100000" max="1000000" placeholder="Transport Amount" name="amount" required>       
                       </div>     
                       <div class="col-sm-6">
                            <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12"  min="1" max="100" placeholder="Get Amount (%)" name="percent" required>      
                       </div>    
                    </div>  
                    <div class="row form-group col-md-10 col-md-offset-1">
                        <div class="col-md-4 col-md-offset-4">
                          <input type="submit" value="Add To Transport" class="btn col-md-12 btn-primary col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        </div>
                  </div>          
            </div>
      </form>
      <div class="row  col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div>
        <hr>
            <a href="<?php echo e(url('/booking')); ?>" class="btn pull-right">Add Booking</a>
            <a href="<?php echo e(url('/account')); ?>" class="btn pull-right ">Accounting</a>
        </div>
      </div>
</section>
<section class="info-truck well col-lg-4 col-md-4 col-sm-4 col-xs-4">
<div class='col-lg-12 col-md-12 col-sm-12  col-xs-12'> 
  <div class="table-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
      <table class="table"> 
        <thead> 
          <tr>
              <th>Truck No.</th> 
              <th>Place</th> 
          </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $trucks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
           <tr>
              <td><a href="<?php echo e(url('/detail/'.$t->id)); ?>"><?php echo e($t->truckno); ?></a></td>
              <td><?php echo e($t->place); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </tbody>
      </table>
  </div>  
</div>
</section>
</div>

<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>