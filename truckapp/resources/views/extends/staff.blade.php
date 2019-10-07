@extends('home')

@section('extend')
	@if(session('newstaff'))
		<h4 class="alert alert-success col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
  			{{session('newstaff')}}
		</h4> 
	@elseif(session('paydone'))
		<h4 class="alert alert-success col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
  			{{session('paydone')}}
		</h4> 
	@elseif(session('invdeg'))
		<h4 class="alert alert-warning col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
  			{{session('invdeg')}}
		</h4>
	@elseif(session('move'))
		<h4 class="alert alert-danger col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
  			{{session('move')}}
		</h4>
	@else
	
	<h4 class="h4 well">
		Staffs Info..
		<a href="{{url('/newstaff')}}" class="btn btn-xs btn-default pull-right">Add New Staff&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></a>
	</h4>
            			
    @endif
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
			 	 	@foreach($staff as $s)
			 	 		<tr>
			 	 			<td>
			 	 				<?php
                                	$op=explode(" ",$s->created_at);
                                	echo $op[0];
                             	?>
			 	 			</td>
			 	 			<td>{{$s->name}}</td>
			 	 			<td>{{$s->phone}}</td>
			 	 			<td>{{$s->job}}</td>
			 	 			<td>{{$s->salary}}</td>
			 	 			<td>{{$s->degree}}</td>
			 	 			<td>
			 	 				<a href="{{url('/pay/'.$s->id)}}" class="btn btn-info btn-xs" >
                              		<i class="fa fa-gift" aria-hidden="true"></i>
                              	</a>
			 	 			</td>
			 	 			<td>
			 	 				<a href="{{url('/staffedit/'.$s->id)}}" class="btn btn-warning btn-xs" ><i class="fa fa-edit" aria-hidden="true"></i></a>
			 	 			</td>
			 	 			<td>
			 	 				<a href="{{url('/staffdel/'.$s->id)}}" class="btn btn-danger btn-xs" >
                              		<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                              	</a>
			 	 			</td>
			 	 		</tr>
			 	 	@endforeach
			 	</tbody>
	    </table>
	</div>	
</section>
@endsection