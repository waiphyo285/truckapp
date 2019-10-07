<?php $__env->startSection('extend'); ?>

    <?php if(session('notprofit')): ?>

        <p class="alert alert-warning"><?php echo e(session('notprofit')); ?></p>

    <?php else: ?>
    

    <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

      <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
           <a href="<?php echo e(url('/profit')); ?>" class="btn btn-default">Back</a>
        </div>

        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
          <h4 class="h4">Add Truck Profits</h4>
        </div>

    </div>

   </section>

   <?php endif; ?>

   <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <form method="post" role="form">
      <?php echo e(csrf_field()); ?>

       <div  class="col-md-12">  
                  <div class="row form-group col-md-10 col-md-offset-1"> 
                                    
                       <div class="col-sm-4">
                            <label>Truck No. *</label>
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
                            <label>Icomes *</label>
                            <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Incomes(MMK)" name="income" pattern="[1-9]\d+" maxlength="9" required>   
                       </div>

                       <div class="col-sm-4">
                            <label>Total Expenses *</label>
                            <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Expenses(MMK)" name="expense" pattern="[1-9]\d+" maxlength="9" required>   
                       </div>
                        
                        
                   </div>  
    
                   <div class="row form-group col-md-10 col-md-offset-1">


                       <div class="col-sm-4">
                            <label>Date *</label>  
                            <input type="date" class="col-md-12 col-lg-12 col-sm-12 col-xs-12"  name="date" required>   
                       </div> 


                       <div class="col-sm-4">
                            <label>Start Place *</label>
                            <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" pattern="[A-Za-z ]{3,20}" placeholder="From" name="from" required>   
                       </div>   
    
                       <div class="col-sm-4">
                            <label>End Place *</label>   
                            <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" pattern="[A-Za-z ]{3,20}" placeholder="To" name="to" required>   
                       </div> 
                       
                        
                  </div>  

                  <div class="row form-group col-md-10 col-md-offset-1">

                       <div class="col-sm-4">
                            <label>Petrols Usage * </label>
                            <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Petrol Used(Gallons)" name="petrol" min="50" max="200" required>   
                       </div>

                  </div>

                   <div class="row form-group col-lg-10 col-lf-offset-1 col-md-10 col-md-offset-1">
                        
                        <div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-1 col-xs-3">
                      
                          <label for="round" class="round col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center"><input type="radio" class="checkbox col-md-12 col-lg-12 col-sm-12 col-xs-12" name="round" value="1" checked>Round</label>  

                        </div>
                        <div class="col-md-4 col-md-offset-2">
        
                            <input type="submit" value="Add Truck Profits" class="btn col-md-12 btn-primary col-md-12 col-lg-12 col-sm-12 col-xs-12">

                        </div>

                   </div>          
                        
            </div>

    </form>
      

</section>
     

<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>