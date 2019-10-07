<?php $__env->startSection('extend'); ?>

 <?php if(session('newlaunch')): ?>

        <p class="alert alert-info"><?php echo e(session('newlaunch')); ?></p>

 <?php elseif(session('delpost')): ?>
          
        <p class="alert alert-danger"><?php echo e(session('delpost')); ?></p>

 <?php elseif(session('updpost')): ?>
          
        <p class="alert alert-info"><?php echo e(session('updpost')); ?></p>

 <?php else: ?>  

 <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
    <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
        <a href="<?php echo e(url('/viewhire')); ?>" class="btn btn-primary">All Posts</a>
    </div>

    <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
        <h4 class="h4">Post New Hire</h4>
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
                          <label>Job Title *</label>  
                          <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Title" pattern="[A-Za-z ]{3,30}" maxlength="30" name="title" required>   
                       </div>  
                                
                        <div class="col-sm-4">
                              <label>Position *</label>  
                              <select class="sel-tk selectpicker col-lg-12 col-md-12 col-sm-12 col-xs-12" name="position" data-live-search="true">
                                    <optgroup label="Positions"> 

	                                    <option value="Driver" selected>Driver</option>
	                                    <option value="Sparer">Sparer</option>

                                    </optgroup>
                              </select> 

                       </div>
                       <div class="col-sm-4">
                                <label>Wages *</label>
                                <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Wages (MMK)" name="wage" min="30000" max="100000" required>   
                       </div>
                        
                        
                   </div>  
    
                   <div class="row form-group col-md-10 col-md-offset-1">

	   				           <div class="col-sm-4">
                                <label>Address *</label>
                                <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Address" name="addr" maxlength="30" required>   
                       </div>
                        <div class="col-sm-4">
                                <label>Contact *</label>
                                <input type="tel" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" pattern="\d*" maxlength="11" placeholder="Phone (09-XXX-XXX-XXX)" name="contact" required>   
                       </div> 

                       <div class="col-sm-4">
                                <label>Posts *</label>
                                <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Posts" name="post" min="1" max="10" required>   
                       </div>
                       
                    </div>  
                               
                   <!-- <div class="row form-group col-lg-10 col-lf-offset-1 col-md-10 col-md-offset-1">
                            
                        <div class="col-sm-12">
                        	<input type="text" name="comments" class="comments col-md-12" pattern="[A-Za-z ]{3,50}" placeholder="Comments..." required>
                        </div>

                  	</div>-->

                   <div class="row form-group col-lg-10 col-lf-offset-1 col-md-10 col-md-offset-1">

                    <div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-1 col-xs-3">
                      
                      <label for="Male" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center"><input type="radio" class="radio col-md-12 col-lg-12 col-sm-12 col-xs-12" name="gender" value="Male" checked>Male</label>  

                    </div>

                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-3">
                      
                      <label for="Female" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center"><input type="radio" class="radio col-md-12 col-lg-12 col-sm-12 col-xs-12" name="gender" value="Female">Female</label>  

                    </div>

                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-3">
                      
                      <label for="Other" class="col-md-12 col-lg-12 col-sm-6 col-xs-6 text-center"><input type="radio" class="radio col-md-12 col-lg-12 col-sm-12 col-xs-12" name="gender" value="Other">Other</label>  

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
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>