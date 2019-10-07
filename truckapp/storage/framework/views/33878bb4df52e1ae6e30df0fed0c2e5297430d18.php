<?php $__env->startSection('extend'); ?>

 <?php if(session('nowprofit')): ?>

        <p class="alert alert-info"><?php echo e(session('nowprofit')); ?></p>

  <?php elseif(session('delprofit')): ?>

        <p class="alert alert-danger"><?php echo e(session('delprofit')); ?></p>

   <?php elseif(session('delprofits')): ?>

        <p class="alert alert-danger"><?php echo e(session('delprofits')); ?></p>

 <?php else: ?>

 <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<div class="row">
			
			<div class="col-md-10  hidden-sm hidden-xs">
				
				<h4 class="h4">All Profits Info</h4>

			</div>

			<div class="col-md-1  col-xs-12 col-sm-12">
				
				<a href="<?php echo e(url('/resetall')); ?>" class="btn btn-danger pull-right">Reset All</a>

			</div>

			<div class="col-md-1 col-xs-12 col-sm-12">
				
				<a href="<?php echo e(url('/addprofit')); ?>" class="btn btn-primary pull-right">Profits <i class="fa fa-plus">	</i></a>

			</div>

		</div>
			
			
	</div>

</section>

<?php endif; ?>

<section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<div class='col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12  col-xs-12'> 

          <div class=" table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table"> 
                  <thead> 
                      <tr>

                          <th>Truck No.</th> 
                          <th>Inc.</th>
                          <th>Exp.</th>
                          <th>Pf.</th>
                          <th>Petrols</th>
                          
                       </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                        
                        <?php $tinc=0; $texp=0; $tpf=0; $tpt=0;

                        foreach($profits as $pf)
                        {
                          $tinc =$pf->incomes + $tinc ;
                          $texp =$pf->expenses + $texp;
                          $tpf =$pf->profits + $tpf;
                          $tpt =$pf->petrol + $tpt;
                          

                        }

                         ?>

                          <td><?php echo "All Trucks"; ?></td>
                          <td><?php echo $tinc; ?></td>
                          <td><?php echo $texp; ?></td>
                          <td><?php echo $tpf; ?></td>
                          <td><?php echo $tpt.' gls.'; ?></td>

                    </tr>

                </tbody>

              </table> 

          </div>

      </div>

</section>

<section class="profitdetail well col-lg-12 col-md-12 col-sm-12 col-xs-12">

  <div class=' col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12  col-xs-12'> 

	<div class=" table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 

		<table class="table"> 
			 	<thead> 
			 		<tr>
			 		    <th>Truck No.</th> 

			 	        <th><span class="pull-right">Profits Detail View</span></th> 
			 	        
			 	    </tr>
			    </thead>

			    

			 	 <tbody>

			 	 	 
			 	 	

					<?php $__currentLoopData = $truckno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tno): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			 	 	
			 	 	
			 	 	
			 	 		<tr>
			 	 	     	<td><i class="fa fa-truck text-info hidden-xs hidden-sm " aria-hidden="true"></i>&nbsp;<?php echo e($tno->truckno); ?></td>
			 	 	     	<td>
			 	 	        	<a href="<?php echo e(url('/profdetail/'.$tno->truckno)); ?>" class="btn btn-info col-sm-3 pull-right">
			 	 	      			<i class="glyphicon glyphicon-eye-open " aria-hidden="true"></i>
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