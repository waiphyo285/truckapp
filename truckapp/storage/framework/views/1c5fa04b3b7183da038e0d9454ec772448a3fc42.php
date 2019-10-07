<?php $__env->startSection('extend'); ?>

	<?php if(session('change')): ?>

		<p class="alert alert-info" style="margin-top:10px;"><?php echo e(session('change')); ?></p>

	<?php elseif(session('delete')): ?>

		<p class="alert alert-danger" style="margin-top:10px;"><?php echo e(session('delete')); ?></p>

	<?php elseif(session('unchange')): ?>

		<p class="alert alert-warning" style="margin-top:10px;"><?php echo e(session('unchange')); ?></p>	

	<?php else: ?>

	<section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<h4 class='col-lg-10 col-lg-offset-1 text-center'>All Partners Information</h4>

	</section>

	<?php endif; ?>

<section class="info-truck well col-lg-12 col-md-12 col-sm-12 col-xs-12">

  <div class='col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12  col-xs-12'> 

	<div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 

		<table class="table"> 
			 	<thead> 
			 		<tr>
			 		    <th>Partner Name</th> 
			 	        <th></th> 
			 	        <th></th>
			 	        <th></th>
			 	    </tr>
			    </thead>

			    

			 	 <tbody> 

			 	 	<?php $__currentLoopData = $trucks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

			 	 	<tr>
			 	 	     <td><i class="fa fa-user text-info hidden-xs hidden-sm " aria-hidden="true"></i>&nbsp;<?php echo e($t->pname); ?></td>
			 	 	     <td>
			 	 	        <a href="<?php echo e(url('/detail/'.$t->id)); ?>" class="btn btn-info col-sm-6 pull-right">
			 	 	      		<i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i>
			 	 	      	</a>
			 	 	     </td> 
			 	 	     <td>
			 	 	      	<a href="<?php echo e(url('/edit/'.$t->id)); ?>" class="btn btn-warning col-sm-6 pull-right">
			 	 	      	 	<i class="fa fa-edit" aria-hidden="true"></i>
			 	 	      	</a>
			 	 	     </td> 
			 	 	     <td>
			 	 	     	<a href="<?php echo e(url('/delete/'.$t->id)); ?>" class="btn btn-danger col-sm-6 pull-right">
			 	 	     		<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
							</a>
						</td>
			 	 	</tr>

			 	 	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			 	 	
			 	</tbody>

			 	

	    </table>

	</div>	

  </div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>