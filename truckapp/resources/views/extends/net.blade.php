@extends('home')

@section('extend')
      		
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
			 	 	@foreach ($acc as $a)
			 	 		@if($a->income == 0)
			 	 		<tr>
			 	 			<td><?php echo $i++; ?></td>
			 	 			<td>
			 	 				<?php
                                	$op=explode(" ",$a->created_at);
                                	echo $op[0];
                             	?>
			 	 			</td>
			 	 			<td>{{$a->description}}</td>
			 	 			<td>{{$a->payment}}</td>
			 	 			<th>
			 	 				<?php
			 	 					$payment+=$a->payment;
			 	 					echo $payment;
			 	 				?>
			 	 			</th>
			 	 		</tr>
			 	 		@endif
			 	 	@endforeach
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
			 	 	@foreach ($acc as $a)
			 	 		@if($a->payment == 0)
			 	 		<tr>
			 	 			<td><?php echo $i++; ?></td>
			 	 			<td>
			 	 				<?php
                                	$op=explode(" ",$a->created_at);
                                	echo $op[0];
                             	?>
			 	 			</td>
			 	 			<td>{{$a->description}}</td>
			 	 			<td>{{$a->income}}</td>
			 	 			<th>
			 	 				<?php
			 	 					$income+=$a->income;
			 	 					echo $income;
			 	 				?>
			 	 			</th>
			 	 		</tr>
			 	 		@endif
			 	 	@endforeach
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
@endsection