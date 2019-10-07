<?php $__env->startSection('extend'); ?>
 
 <?php if(session('newstaff')): ?>
<h4 class="alert alert-success col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
  <?php echo e(session('newstaff')); ?>

</h4>  
<?php elseif(session('invdeg')): ?>
<h4 class="alert alert-warning col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
  <?php echo e(session('invdeg')); ?>

</h4>
<?php elseif(session('incon')): ?>
<h4 class="alert alert-warning col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
  <?php echo e(session('incon')); ?>

</h4>
<?php else: ?>
<h4 class='well col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
      Add New Staff
      <a href="<?php echo e(url('/staff')); ?>" class=" pull-left">Back</a>
</h4>
<?php endif; ?>
  <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <form method="post" role="form">
      <?php echo e(csrf_field()); ?>

       <div  class="col-md-12"> 
                  <div class="row form-group col-md-10 col-md-offset-1">
                        <div class="col-sm-4">
                         <br> 
                          <label>Staff Entry Form</label>       
                       </div>
                        <div class="col-sm-8">
                            <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="sname" value=""  pattern="[A-Za-z ]{3,30}" placeholder="Staff Name" required>   
                       </div> 
                  </div> 
                  <div class="row form-group col-md-10 col-md-offset-1"> 
                      <div class="col-sm-4">
                          <input type="tel" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" pattern="(09)[0-9]{9}" maxlength="11" placeholder="Phone" name="scontact" required> 
                      </div> 
                       <div class="col-sm-4">
                            <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="sage" value="" min="18" max="50" placeholder="Age" required>
                       </div>  
                      <div class="col-sm-4">  
                           <select class="sel-tk selectpicker col-lg-12 col-md-12 col-sm-12 col-xs-12" name="jtype" data-live-search="true">
                              <optgroup label="Job Type">
                                 <option value="Clerk">Clerk</option> 
                                 <option value="Worker">Worker</option>   
                              </optgroup>
                          </select>   
                       </div>                
                    </div>  
    
                   <div class="row form-group col-md-10 col-md-offset-1">
                       <div class="col-sm-4">
                          <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="saddr" value="" placeholder="Address" required>   
                                 
                       </div> 
                       <div class="col-sm-4">
                          <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12"  min="100000" max="500000" placeholder="Salary" name="salary" required>
                       </div> 
                       <div class="col-sm-4">    
                        <select class="sel-tk selectpicker col-lg-12 col-md-12 col-sm-12 col-xs-12" name="degree" data-live-search="true">
                              <optgroup label="Degree">
                                 <option value="Graduated">Any Degree</option> 
                                 <option value="Not Set">Not Set</option>   
                              </optgroup>
                          </select> 
                        </div>    
                    </div>  
                    <div class="row form-group col-md-10 col-md-offset-1">
                        <div class="col-md-4 col-md-offset-4">
                          <input type="submit" value="Add New Staff" class="btn col-md-12 btn-primary col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        </div>
                  </div>          
            </div>
      </form>
</section>

<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>