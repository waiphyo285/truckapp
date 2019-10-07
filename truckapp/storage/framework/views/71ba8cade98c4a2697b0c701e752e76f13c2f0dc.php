<?php $__env->startSection('extend'); ?>
	<?php if(session('newstaff')): ?>
		<h4 class="alert alert-success col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
  			<?php echo e(session('newstaff')); ?>

		</h4> 
	<?php elseif(session('paydone')): ?>
		<h4 class="alert alert-success col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
  			<?php echo e(session('paydone')); ?>

		</h4> 
	<?php elseif(session('invdeg')): ?>
		<h4 class="alert alert-warning col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
  			<?php echo e(session('invdeg')); ?>

		</h4>
	<?php elseif(session('move')): ?>
		<h4 class="alert alert-danger col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
  			<?php echo e(session('move')); ?>

		</h4>
	<?php else: ?>
	
	<h4 class="h4 well">
		Staffs Info..
		<a href="<?php echo e(url('/newstaff')); ?>" class="btn btn-xs btn-default pull-right">Add New Staff&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></a>
	</h4>
            			
    <?php endif; ?>
    <section class="info-truck well col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 

		<table class="table"> 
			 	<thead> 
			 		<tr>	
			 			<th>Reg. Date</th>
			 		    <th>Name</th> 
			 		    <th>Contact</th>
			 	        <th>Job</th> 
			 	        <th>Salary</th>
			 	        <th>Degree</th>
			 	        <th colspan="3"></th> 
			 	    </tr>
			    </thead>
			 	 <tbody> 
			 	 	<?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			 	 		<tr>
			 	 			<td>
			 	 				<?php
                                	$op=explode(" ",$s->created_at);
                                	echo $op[0];
                             	?>
			 	 			</td>
			 	 			<td><?php echo e($s->name); ?></td>
			 	 			<td><?php echo e($s->phone); ?></td>
			 	 			<td><?php echo e($s->job); ?></td>
			 	 			<td><?php echo e($s->salary); ?></td>
			 	 			<td><?php echo e($s->degree); ?></td>
			 	 			<td>
			 	 				<a href="<?php echo e(url('/pay/'.$s->id)); ?>" class="btn btn-info btn-xs" >
                              		<i class="fa fa-gift" aria-hidden="true"></i>
                              	</a>
			 	 			</td>
			 	 			<td>
			 	 				<a href="<?php echo e(url('/staffedit/'.$s->id)); ?>" class="btn btn-warning btn-xs" ><i class="fa fa-edit" aria-hidden="true"></i></a>
			 	 			</td>
			 	 			<td>
			 	 				<a href="<?php echo e(url('/staffdel/'.$s->id)); ?>" class="btn btn-danger btn-xs" >
                              		<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                              	</a>
			 	 			</td>
			 	 		</tr>
			 	 	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			 	</tbody>
	    </table>
	</div>	
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>