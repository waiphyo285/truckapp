<?php $__env->startSection('extend'); ?>

    <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

      <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
          <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
              <a href="<?php echo e(url('/viewhire')); ?>" class="btn btn-default">Back</a>
          </div>

          <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
            <h4 class="h4">Chek New Partner</h4>
          </div>

      </div>

    </section>

    <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <form method="post" role="form">
       <?php echo e(csrf_field()); ?>

       <div  class="col-md-12">  
                  <div class="row form-group col-md-10 col-md-offset-1"> 
                                    
                      <div class="col-sm-4"> 
                            <label>Name *</label> 
                            <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="name" value="<?php echo e($checkpending->name); ?>" readonly>
                      </div>  
                        
                       <div class="col-sm-4">
                            <label>Position *</label>     
                            <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="position" value="<?php echo e($jobtype->position); ?>" readonly>

                       </div>          
                
                       <div class="col-sm-4">
                            <label>Age *</label> 
                            <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="age" value="<?php echo e($checkpending->age); ?>" readonly> 
                       </div>
                        
                        
                   </div>  
    
                   <div class="row form-group col-md-10 col-md-offset-1">

                       <div class="col-sm-4">
                           <label>Contact *</label> 
                           <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="contact" value="<?php echo e($checkpending->contact); ?>" readonly>     
                       </div>   
    
                       <div class="col-sm-4"> 
                           <label>Licence *</label> 
                           <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="licence" value="<?php echo e($checkpending->licence); ?>" readonly> 
                       </div> 

                       <div class="col-sm-4">
                            <label>Experience *</label> 
                            <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="exp" value="<?php echo e($checkpending->experience); ?>" readonly>     
                       </div>
                       
                    </div>  

                   <div class="row form-group col-lg-10 col-lf-offset-1 col-md-10 col-md-offset-1">
            
                        <div class="col-md-4 col-md-offset-4">
        
                            <input type="submit" value="Check New Partner" class="btn col-md-12 btn-primary col-md-12 col-lg-12 col-sm-12 col-xs-12">

                        </div>

                   </div>          
                        
            </div>

    </form>
      

</section>

<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('apkhome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>