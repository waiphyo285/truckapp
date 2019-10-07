<?php $__env->startSection('extend'); ?>
      		
    <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:155px;overflow-y:scroll;">
	    <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
		    <table class="table"> 
			 	<thead> 
			 		<tr>	
			 			<th>No.</th>
			 			<th>Date</th>
			 			<th>Staff Name</th>  
			 			<th>Payments</th>
			 			<th>Total Payments</th>
			 	    </tr>
			    </thead>
			 	 <tbody>
			 	 	<?php
			 	 		$i=1;
			 	 		$payment=0;
			 	 	?> 
			 	 	<?php $__currentLoopData = $acc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			 	 		<?php if($a->income == 0): ?>
			 	 		<tr>
			 	 			<td><?php echo $i++; ?></td>
			 	 			<td>
			 	 				<?php
                                	$op=explode(" ",$a->created_at);
                                	echo $op[0];
                             	?>
			 	 			</td>
			 	 			<td><?php echo e($a->description); ?></td>
			 	 			<td><?php echo e($a->payment); ?></td>
			 	 			<th>
			 	 				<?php
			 	 					$payment+=$a->payment;
			 	 					echo $payment;
			 	 				?>
			 	 			</th>
			 	 		</tr>
			 	 		<?php endif; ?>
			 	 	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			 	</tbody>
	       </table>
		</div>	
	</section>
	<section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:155px;overflow-y:scroll;">
	    <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
		    <table class="table"> 
			 	<thead> 
			 		<tr>	
			 			<th>No.</th>
			 			<th>Date</th>
			 			<th>Truck No.</th>  
			 			<th>Incomes</th>
			 			<th>Total Incomes</th>
			 	    </tr>
			    </thead>
			 	 <tbody>
			 	 	<?php
			 	 		$i=1;
			 	 		$income=0;
			 	 	?> 
			 	 	<?php $__currentLoopData = $acc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			 	 		<?php if($a->payment == 0): ?>
			 	 		<tr>
			 	 			<td><?php echo $i++; ?></td>
			 	 			<td>
			 	 				<?php
                                	$op=explode(" ",$a->created_at);
                                	echo $op[0];
                             	?>
			 	 			</td>
			 	 			<td><?php echo e($a->description); ?></td>
			 	 			<td><?php echo e($a->income); ?></td>
			 	 			<th>
			 	 				<?php
			 	 					$income+=$a->income;
			 	 					echo $income;
			 	 				?>
			 	 			</th>
			 	 		</tr>
			 	 		<?php endif; ?>
			 	 	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			 	</tbody>
	       </table>
		</div>	
	</section>
	    <div class="well table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
		    <table class="table"> 
			 	<thead> 
			 		<tr>	
			 			<th>No.</th>
			 			<th>Total Incomes</th>
			 			<th>Total Payments</th>
			 			<th>Net Profits</th>
			 	    </tr>
			    </thead>
			 	 <tbody>
			 	 	
			 	 		<tr>
			 	 			<td><?php echo $i++; ?></td>
			 	 			<td><?php echo $income; ?></td>
			 	 			<td><?php echo $payment; ?></td>
			 	 			<td><?php echo $income-$payment; ?></td>
			 	 		</tr>
			 	 		
			 	</tbody>
	       </table>
		</div>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>