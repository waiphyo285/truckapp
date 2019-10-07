<?php $__env->startSection('extend'); ?>

	<section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
      		<div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
        		<a href="<?php echo e(url('/viewhire')); ?>" class="btn btn-default">Back</a>
      		</div>

      		<div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
        		<h4 class="h4">Comments</h4>
      		</div>

  		</div>

	</section>

<section class="info-truck well col-lg-12 col-md-12 col-sm-12 col-xs-12 viewcomment">

  <div class='col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12  col-xs-12'> 

	<div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 

		<table class="table"> 
			 	<thead> 
			 		<tr>
			 		    <th>Name</th> 
			 		    <th>Email</th>
			 	        <th>Ages</th> 
			 	        <th>Experiences</th>
			 	        <th>Licence type</th>
			 	       	<th>Address</th>
			 	       	<th>Ph</th>
			 	    </tr>
			    </thead>
			    <tbody> 

			 	 	<?php $__currentLoopData = $viewpost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vp): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

			 	 	<tr>
			 	 	     <td><i class="fa fa-user text-info hidden-xs hidden-sm " aria-hidden="true"></i>&nbsp;<?php echo e($vp->name); ?></td>
			 	 	     <td><?php echo e($vp->email); ?></td>
			 	 	     <td><?php echo e($vp->age); ?> Years</td> 
			 	 	     <td><?php echo e($vp->experience); ?> Years</td> 
			 	 	     <td><?php echo e($vp->licence); ?></td>
			 	 	     <td><?php echo e($vp->address); ?></td>
			 	 	     <td><?php echo e($vp->contact); ?></td>
			 	 	</tr>

			 	 	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			 	 	
			 	</tbody>
	    </table>

	</div>	

  </div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('apkhome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>