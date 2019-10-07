<?php $__env->startSection('extend'); ?>

  <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
      <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
        <a href="<?php echo e(url('/partnership')); ?>" class="btn btn-default">Back</a>
      </div>

      <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
        <h4 class="h4">Parnter Info Details</h4>
      </div>

    </div>

 </section>

 <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table"> 
                  <tbody> 
                      <tr>
                          <th>Partner Name</th> 
                          <td><?php echo e($truck->pname); ?></td> 
                      </tr>
                      <tr>  
                          <th>Address</th>
                          <td><?php echo e($truck->address); ?></td> 
                      </tr>
                      <tr>  
                          <th>Contact</th>
                          <td><?php echo e($truck->contact); ?></td> 
                      </tr>
                      <tr>  
                          <th>Reg No.</th>
                          <td><a href="<?php echo e(url('/detail/'.$truck->id)); ?>"><?php echo e($truck->truckno); ?></a></td> 
                      </tr>
                      <tr>
                          <th>Register Date</th>
                          <td><?php echo e($truck->date); ?></td> 
                      </tr>
                      <tr>
                          <th>Wheels</th> 
                          <td><?php echo e($truck->wheels); ?> </td> 
                      </tr>
                      <tr> 
                          <th>Color</th>
                          <td>
                            <div style="height:20px;width:30px;background:<?php echo e($truck->color); ?>;"></div>
                          </td> 
                      </tr>
                  </tbody>
              </table> 
          </div>

</section>

<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('apkhome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>