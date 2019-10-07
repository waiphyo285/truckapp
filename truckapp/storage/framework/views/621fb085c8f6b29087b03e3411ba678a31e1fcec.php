<?php $__env->startSection('extend'); ?>

 
      <?php if(session('action')): ?>

        <p class="alert alert-warning"><?php echo e(session('action')); ?></p>

      <?php else: ?>  

        <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
                <a href="<?php echo e(url('/partnership')); ?>" class="btn btn-default">Back</a>
            </div>

            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
              <h4 class="h4">Add New Partner (Manualfill)</h4>
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
                            <label>Partner Name *</label>
                            <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Name (U Mg Mg)" pattern="[A-Za-z ]{3,20}" maxlength="20" name="pname" required>   
                       </div>  
                      
                       <div class="col-sm-4">
                            <label>Age *</label>
                            <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Age (Y)" name="age" min="16" max="60" >   
                       </div>
                            
                       <div class="col-sm-4">
                            <label>Experience *</label>
                            <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Experience (Y)" name="exp" min="0" max="44" >   
                       </div>       
                        
                   </div>            
                    <div class="row form-group col-lg-10 col-lf-offset-1 col-md-10 col-md-offset-1">
                       
                      <div class="col-sm-4">
                          <label>Truck No. *</label>     
                          <select class="sel-tk selectpicker col-lg-12 col-md-12 col-sm-12 col-xs-12" name="truckno" data-live-search="true">
                              <optgroup label="Truck Reg."> 
                                  <?php $__currentLoopData = $trucks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                                     <option value="<?php echo e($t->id); ?>">
                                          <?php echo e($t->truckno); ?>

                                      </option>

                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                      <option value="" selected>None</option> 

                              </optgroup>
                          </select> 
                      </div>     
                      <div class="col-sm-4">
                          <label>Licence Type *</label>     
                          <select class="sel-lc selectpicker col-lg-12 col-md-12 col-sm-12 col-xs-12" name="licence" data-live-search="true">
                              <optgroup label="Licence Type">  

                                  <option value="Driving Licence A" >Driving Licence A</option>
                                  <option value="Driving Licence B">Driving Licence B</option>
                                  <option value="Sparer Licence">Sparer Licence</option>

                                  <option value="" selected>None</option>

                              </optgroup>
                          </select> 
                      </div>
                      <div class="col-sm-4">
                          <label>Person Type *</label>     
                          <select class="sel-lc selectpicker col-lg-12 col-md-12 col-sm-12 col-xs-12" name="person" data-live-search="true">
                              <optgroup label="Person Type">  

                                  <option value="Gate Header" selected>Gate Header</option>
                                  <option value="Driver">Driver</option>
                                  <option value="Sparer">Sparer</option>

                              </optgroup>
                          </select> 
                      </div>
                   </div>
                   <div class="row form-group col-md-10 col-md-offset-1">
                        <div class="col-sm-4">
                            <label>Address *</label>
                            <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="Enter Address" name="paddr"  maxlength="30" required>   
                       </div>
                       <div class="col-sm-4">
                            <label>Contact *</label>
                            <input type="tel" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" pattern="\d*" maxlength="11" placeholder="Phone (09-XXX-XXX-XXX)" name="contact" required>   
                       </div> 
                    </div>  

                   <div class="row form-group col-lg-10 col-lf-offset-1 col-md-10 col-md-offset-1">
                        
                        <div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-1 col-xs-3">
                      
                          <label for="present" class="checkpresent col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center"><input type="checkbox" class="checkbox col-md-12 col-lg-12 col-sm-12 col-xs-12" name="present" value="1" checked>Present</label>  

                        </div>
                        <div class="col-md-4 col-md-offset-2">
        
                            <input type="submit" value="Add New Partner" class="btn col-md-12 btn-primary col-md-12 col-lg-12 col-sm-12 col-xs-12">

                        </div>

                   </div>          
                        
            </div>

    </form>
      

</section>

<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>