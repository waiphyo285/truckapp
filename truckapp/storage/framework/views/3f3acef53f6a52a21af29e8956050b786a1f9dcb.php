<?php $__env->startSection('extend'); ?>

 <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <?php if(session('actedit')): ?>

        <p class="alert alert-warning"><?php echo e(session('actedit')); ?></p>

      <?php endif; ?>
    
    <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
      <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
        <a href="<?php echo e(url('/partnership')); ?>" class="btn btn-default">Back</a>
      </div>

      <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
        <h4 class="h4">Edit Partnership Info</h4>
      </div>

  </div>
    <br><br><br><br>
    <form method="post" role="form">
      <?php echo e(csrf_field()); ?>

       <div  class="col-md-12">  
                  <div class="row form-group col-md-10 col-md-offset-1"> 
                                    
                      <div class="col-sm-4">  
                                <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Name (U Mg Mg)" name="pname" pattern="[A-Za-z ]{3,20}" value="<?php echo e($partnerid->pname); ?>" required>   
                       </div>  
                                
                        <div class="col-sm-4">
                                
                              <select class="sel-tk selectpicker col-lg-12 col-md-12 col-sm-12 col-xs-12" name="truckno" data-live-search="true">
                                    <optgroup label="Truck Reg.">  

                                     <?php 

                                      $truckshow='';

                                      foreach ($trucks as $t)
                                       {
                                        # code...
                                        if($t->id == $partnerid->truckno)
                                        {
                                          $truckshow=$t->truckno;
                                        }
                                      }

                                     ?>

                                     <?php if($truckshow == ''){

                                        ?>

                                          <option value="">None</option>

                                        <?php

                                     }

                                        else

                                        {

                                     ?>
                                          <option value="">None</option>
                                          <option value="<?php echo $partnerid->truckno; ?>" selected>

                                              <?php echo $truckshow; ?>
                                             
                                          </option>

                                     <?php

                                        } //else

                                      foreach ($trucks as $t)
                                       {
                                        # code...
                                        if($t->id != $partnerid->truckno)
                                        {
                                      ?>
                                          <option value="<?php echo e($t->id); ?>"><?php echo e($t->truckno); ?></option>
                                    <?php 
                                        }
                                      
                                       }

                                     ?>

                                    </optgroup>
                              </select> 

                       </div>
                       <div class="col-sm-4">
                                <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Age (Y)" name="age" min="16" max="60" value="<?php echo e($partnerid->age); ?>">   
                       </div>
                        
                        
                   </div>  
    
                   <div class="row form-group col-md-10 col-md-offset-1">


                       <div class="col-sm-4">
                                <input type="tel" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" pattern="\d*" placeholder="Phone (09-XXX-XXX-XXX)" maxlength="11" name="contact" value="<?php echo e($partnerid->contact); ?>" required>   
                       </div>   
    
                       <div class="col-sm-4">
                                
                                <select class="sel-lc selectpicker col-lg-12 col-md-12 col-sm-12 col-xs-12" name="licence" data-live-search="true">
                                    <optgroup label="Licence Type">  

                                        <?php if($partnerid->licence == 'Licence A'): ?>

                                        <option value="<?php echo e($partnerid->licence); ?>" selected>
                                             <?php echo e($partnerid->licence); ?>

                                        </option>
                                        <option value="Driving Licence B">Driving Licence B</option>
                                        

                                        <?php elseif($partnerid->licence == 'Licence B'): ?>

                                        <option value="<?php echo e($partnerid->licence); ?>" selected>
                                             <?php echo e($partnerid->licence); ?>

                                        </option>
                                        <option value="Driving Licence A">Driving Licence A</option>
                                        <option value="Sparer Licence">Sparer Licence</option>

                                        <?php elseif($partnerid->licence == 'Sparer Licence'): ?>

                                        <option value="<?php echo e($partnerid->licence); ?>" selected>
                                             <?php echo e($partnerid->licence); ?>

                                        </option>
                                        <option value="Driving Licence A">Driving Licence A</option>
                                        <option value="Driving Licence B">Driving Licence B</option>

                                        <?php else: ?>

                                        <option value="" selected>None</option>
                                        <option value="Driving Licence A">Driving Licence A</option>
                                        <option value="Driving Licence B">Driving Licence B</option>
                                        <option value="Sparer Licence">Sparer Licence</option>

                                        <?php endif; ?>

                                    </optgroup>
                              </select> 

                       </div> 

                       <div class="col-sm-4">
                                <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Experience (Y)" name="exp" min="0" max="44" value="<?php echo e($partnerid->experience); ?>">   
                       </div>
                       
                        
                    </div>  
                               
                    <div class="row form-group col-lg-10 col-lf-offset-1 col-md-10 col-md-offset-1">
                            
                       
                       <div class="col-sm-4">
                                <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Address" name="paddr" value="<?php echo e($partnerid->paddr); ?>" required>   
                       </div>

                       <div class="col-sm-4">
                                
                                <select class="sel-lc selectpicker col-lg-12 col-md-12 col-sm-12 col-xs-12" name="person" data-live-search="true">
                                    <optgroup label="Personalise">  

                                        <?php if($partnerid->personalise == 'Gate Header'): ?>

                                        <option value="<?php echo e($partnerid->personalise); ?>" selected>
                                             <?php echo e($partnerid->personalise); ?>

                                        </option>
                                        <option value="Driver">Driver</option>
                                        <option value="Sparer">Sparer</option>
                                        

                                        <?php elseif($partnerid->personalise == 'Driver'): ?>

                                        <option value="<?php echo e($partnerid->personalise); ?>" selected>
                                             <?php echo e($partnerid->personalise); ?>

                                        </option>
                                        <option value="Gate Header">Gate Header</option>
                                        <option value="Sparer">Sparer</option>

                                        <?php elseif($partnerid->personalise == 'Sparer'): ?>

                                        <option value="<?php echo e($partnerid->personalise); ?>" selected>
                                             <?php echo e($partnerid->personalise); ?>

                                        </option>
                                        <option value="Gate Header">Gate Header</option>
                                        <option value="Driver">Driver</option>

                                        <?php endif; ?>

                                    </optgroup>
                              </select> 

                       </div> 

                       <!--<div class="col-sm-4">
                                
                                <select class="sel-lc selectpicker col-lg-12 col-md-12 col-sm-12 col-xs-12" name="present" data-live-search="true">
                                    <optgroup label="Present Check">  

                                        <?php if($partnerid->present == 1): ?>

                                        <option value="<?php echo e($partnerid->present); ?>" selected>
                                             Yes
                                        </option>
                                        <option value="0">No</option>
                                        
                                        

                                        <?php elseif($partnerid->present == 0): ?>

                                        <option value="<?php echo e($partnerid->present); ?>" selected>
                                             No
                                        </option>
                                        <option value="1">Yes</option>
                                        <?php endif; ?>

                                    </optgroup>
                              </select> 

                       </div> -->
                  
                   </div>

                   <div class="row form-group col-lg-10 col-lf-offset-1 col-md-10 col-md-offset-1">
                        
                        <div class="col-md-4 col-md-offset-4">
        
                            <input type="submit" value="Edit Old Partner" class="btn col-md-12 btn-primary col-md-12 col-lg-12 col-sm-12 col-xs-12">

                        </div>

                   </div>          
                        
            </div>

    </form>
      

</section>

<section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <h4 class='col-lg-12'>
              
              
              <small>Note. Only name,contact and address for Gate Head. At least age 20 and experience 4 for Driver. At least age 16 for Sparer. Edit Correctly!</small>


            </h4>

</section>


<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('apkhome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>