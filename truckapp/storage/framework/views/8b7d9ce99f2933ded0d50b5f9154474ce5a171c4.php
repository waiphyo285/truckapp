<?php $__env->startSection('extend'); ?> 

<section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

   
   <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
      <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
        <a href="<?php echo e(url('/viewhire')); ?>" class="btn btn-default">Back</a>
      </div>

      <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
        <h4 class="h4">Edit Post Session</h4>
      </div>

  </div>
        
  <br><br><br><br>        
      
  <form method="post" role="form">
      <?php echo e(csrf_field()); ?>

       <div  class="col-md-12">  
                  <div class="row form-group col-md-10 col-md-offset-1"> 
                                    
                      <div class="col-sm-4">
                                <label>Job Title *</label>  
                                <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Title" pattern="[A-Za-z ]{3,30}" maxlength="30" name="title" value="<?php echo e($post->title); ?>" required>   
                       </div>  
                                
                        <div class="col-sm-4">
                              <label>Position *</label>  
                              <select class="sel-tk selectpicker col-lg-12 col-md-12 col-sm-12 col-xs-12" name="position" data-live-search="true">
                                    <optgroup label="Positions"> 

                                      <?php if($post->position == 'Driver'): ?>
	                                       <option value="Driver" selected>Driver</option>
	                                       <option value="Sparer">Sparer</option>

                                      <?php else: ?>
                                         <option value="Driver">Driver</option>
                                         <option value="Sparer" selected>Sparer</option>
                                      <?php endif; ?>

                                    </optgroup>
                              </select> 

                       </div>
                       <div class="col-sm-4">
                                <label>Wages *</label>
                                <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Wages" name="wage" min="30000" max="100000" value="<?php echo e($post->wage); ?>" required>   
                       </div>
                        
                        
                   </div>  
    
                   <div class="row form-group col-md-10 col-md-offset-1">

	   				           <div class="col-sm-4">
                                <label>Address *</label>
                                <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Address" name="addr" maxlength="30" value="<?php echo e($post->address); ?>" required>   
                       </div>
                        <div class="col-sm-4">
                                <label>Contact *</label>
                                <input type="tel" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" pattern="\d*" maxlength="11" placeholder="Phone (09-XXX-XXX-XXX)" name="contact" value="<?php echo e($post->contact); ?>" required>   
                       </div> 

                       <div class="col-sm-4">
                                <label>Posts *</label>
                                <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Posts" name="post" min="1" max="10" value="<?php echo e($post->post); ?>" required>   
                       </div>
                       
                    </div>  
                               
                   <!-- <div class="row form-group col-lg-10 col-lf-offset-1 col-md-10 col-md-offset-1">
                            
                        <div class="col-sm-12">

                        	<input type="text" name="comments" class="comments col-md-12" placeholder="Comments..." value="<?php echo e($post->comment); ?>" pattern="[A-Za-z ]{3,50}" required>
                        		
                        	</textarea>
                        </div>

                  	</div>-->

                   <div class="row form-group col-lg-10 col-lf-offset-1 col-md-10 col-md-offset-1">

                    <div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-1 col-xs-3">
                      
                      <label for="" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center"><input type="radio" class="radio col-md-12 col-lg-12 col-sm-12 col-xs-12" name="gender" value="Male" checked>Male</label>  

                    </div>

                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-3">
                      
                      <label for="" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center"><input type="radio" class="radio col-md-12 col-lg-12 col-sm-12 col-xs-12" name="gender" value="Female">Female</label>  

                    </div>

                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-3">
                      
                      <label for="" class="col-md-12 col-lg-12 col-sm-6 col-xs-6 text-center"><input type="radio" class="radio col-md-12 col-lg-12 col-sm-12 col-xs-12" name="gender" value="Other">Other</label>  

                    </div>


                  </div>

                   <div class="row form-group col-lg-10 col-lf-offset-1 col-md-10 col-md-offset-1">
                        
                        <div class="col-md-4 col-md-offset-4">
        
                            <input type="submit" value="Post Now" class="btn col-md-12 btn-primary col-md-12 col-lg-12 col-sm-12 col-xs-12">

                        </div>

                   </div>          
                        
            </div>

    </form>
      
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('apkhome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>