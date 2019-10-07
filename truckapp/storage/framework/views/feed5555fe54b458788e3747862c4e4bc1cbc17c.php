<?php $__env->startSection('extend'); ?>

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row">

          <section class="well col-lg-6 col-md-6 col-sm-6 col-xs-6">
            
            <div class="row"> 
                
                <div class="col-md-6 col-xs-12 col-sm-12 ">
        
                   <a href="<?php echo e(url('/launch')); ?>" class="btn btn-primary">Post</a>

                </div>
                <div class="col-md-6 hidden-sm hidden-xs">

                  <h4 class="text-center">Job Offer Posts</h4>

                </div>

            </div>

          </section>

           <section class="well col-lg-6 col-md-6 col-sm-6 col-xs-6">

              <h4 class="text-center">Notifications</h4>

          </section>

      </div>
  </div>
  
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <section class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height:380px; overflow-y: scroll;">
          <?php $__currentLoopData = $launches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
          <?php echo e(csrf_field()); ?>

          <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <form method="post" role="form">
          
            <div class="table-striped col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table"> 
                  <thead> 
                      <tr class="bg-primary">
                          <th colspan="2">Job Title.</th> 
                          <td colspan="2"><?php echo e($l->title); ?></td> 
                      </tr>
                  </thead>
                  <tbody> 
                      <tr>
                          <th colspan="2">Posted at</th> 
                          <td colspan="2"><?php echo e($l->created_at); ?></td> 
                      </tr>

                      <tr>
                          <th>Position</th>
                          <td><?php echo e($l->position); ?></td> 
                          <th>Wages</th> 
                          <td><?php echo e($l->wage); ?> MMK</td> 
                      </tr>

                      <tr>
                          <th>Post(s)</th> 
                          <td><?php echo e($l->post); ?> </td> 
                          <th>Gender</th>
                          <td><?php echo e($l->gender); ?></td> 
                      </tr>
              
                      <tr>
                          <th>Contact us </th>
                          <td colspan="3"><span>Address:</span>&nbsp;<?php echo e($l->address); ?></td>
                      </tr>
                       <tr>
                          <th></th>
                          <td colspan="3"><span>Ph:</span>&nbsp;<?php echo e($l->contact); ?></td>
                      </tr>
                      <tr>
                        <td colspan="4">
                          <a href="<?php echo e(url('/viewpost/'.$l->id)); ?>" class="btn btn-default btn-sm col-sm-3">Comments</a>
                          <div class="btn-group pull-right">
                             <a href="<?php echo e(url('/editpost/'.$l->id)); ?>" class="btn btn-default btn-sm col-sm-6">Edit</a>
                             <a href="<?php echo e(url('/delpost/'.$l->id)); ?>" class="btn btn-default btn-sm col-sm-6">Break</a>  
                          </div>
                        </td>
                      </tr>
                  </tbody>
              </table> 
          </div>
        </form>
        </section><br>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </section>
        <?php if(session('ok')): ?>

            <p class="alert alert-info text-center col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
              <?php echo e(session('ok')); ?>

            </p>

        <?php elseif(session('fail')): ?>

            <p class="alert alert-warning col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center"><?php echo e(session('fail')); ?></p>

        <?php elseif(session('delpending')): ?>

            <p class="alert alert-danger col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center"><?php echo e(session('delpending')); ?></p>

        <?php else: ?>
        <section class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height:380px; overflow-y: scroll;">
            <?php $__currentLoopData = $viewpending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vp): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <?php echo e(csrf_field()); ?>

           
                <form method="post" role="form">
                  <div class="table-striped col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
                    <table class="table"> 
                      <tbody>
                        <tr> 
                          <th><p style="margin-top: 5px;"><?php echo e($vp->name); ?> posted his CV. Read now.</p></th>
                          <td colspan="" class="text-right">
                            <div class="btn-group">
                               <a href="<?php echo e(url('/checkpending/'.$vp->id)); ?>" class="btn btn-default btn-sm col-sm-4">Check</a>
                              <a href="<?php echo e(url('/signpending/'.$vp->id)); ?>" class="btn btn-default btn-sm col-sm-4">Sign</a>
                             <a href="<?php echo e(url('/delpending/'.$vp->id)); ?>" class="btn btn-default  btn-sm col-sm-4">Cancel</a>
                           </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </form>
        
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </section>
        <?php endif; ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>