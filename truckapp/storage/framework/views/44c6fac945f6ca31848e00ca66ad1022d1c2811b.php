<?php $__env->startSection('extend'); ?>
  
<h4 class="h4 well text-center">
  <a href="<?php echo e(url('/partnership')); ?>" class="pull-left">Back</a>
    Edit Truck Info 
</h4>
    
 <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<form method="post" role="form">
			<?php echo e(csrf_field()); ?>

			 <div  class="col-md-12">  
                  <div class="row form-group col-md-10 col-md-offset-1"> 
                                    
                      <div class="col-sm-4">  
                                <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Partner Name" name="pname" value="<?php echo e($truck->pname); ?>" pattern="[A-Za-z ]{3,20}" required>   
                       </div>  
                       <div class="col-sm-4">
                                <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="addr" placeholder="Address" maxlength="30" value="<?php echo e($truck->address); ?>" required>
                       </div> 
                       <div class="col-sm-4">
                                <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="contact" placeholder="Contact" pattern="(09)[0-9]{9}" maxlength="11" value="<?php echo e($truck->contact); ?>" required>
                       </div>              
                   </div>  
    
                   <div class="row form-group col-md-10 col-md-offset-1">
                       <div class="col-sm-4">
                                <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Reg. XC-XXXX" pattern="\d[A-Z][-]+\d{4}" maxlength="7" name="regno" value="<?php echo e($truck->truckno); ?>" required>   
                       </div>

                       <div class="col-sm-4"> 
                                <?php
                                  $op=explode(" ",$truck->created_at);
                                 ?>  
                                <input type="date" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="" name="date" value="<?php echo $op[0];?>" required>   
                       </div>     
                       <div class="col-sm-4">
                                <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12"  min="6" max="24" placeholder="Wheels" name="wheels" value="<?php echo e($truck->wheels); ?>" required>   
                       </div>    
                    </div>  
                               
                    <div class="row form-group col-lg-10 col-lf-offset-1 col-md-10 col-md-offset-1">

                   </div>

                   	<div class="row form-group col-md-10 col-md-offset-1">
                   	 	<div class="col-sm-3">
                                <input type="color" class="color col-md-4 col-lg-4 col-sm-4 col-xs-4" placeholder="" name="color" value="<?php echo e($truck->color); ?>" required> 
                                <label class="b">Truck Color</label> 
                       </div>  
                    </div>

                   <div class="row form-group col-md-10 col-md-offset-1">
            		
                        <div class="col-md-4 col-md-offset-4">
        
                                <input type="submit" value="Edit Truck Info" class="btn col-md-12 btn-primary col-md-12 col-lg-12 col-sm-12 col-xs-12">

                        </div>
                   </div>                       
            </div>
      </form>
</section>

<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('apkhome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>