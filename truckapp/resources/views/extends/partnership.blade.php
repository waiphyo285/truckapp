@extends('home')

@section('extend')

	@if(session('change'))

		<p class="alert alert-info" style="margin-top:10px;">{{session('change')}}</p>

	@elseif(session('delete'))

		<p class="alert alert-danger" style="margin-top:10px;">{{session('delete')}}</p>

	@elseif(session('unchange'))

		<p class="alert alert-warning" style="margin-top:10px;">{{session('unchange')}}</p>	

	@else

	<h4 class='well col-lg-12'>
		All Partners Information
		<a href="{{url('/present')}}" class="btn btn-xs btn-default pull-right"> Present
		</a>
		<a href="{{url('/left')}}" class="btn btn-xs btn-default pull-right">Left</a>
	</h4>

	@endif

<section class="info-truck well col-lg-12 col-md-12 col-sm-12 col-xs-12">

  <div class='col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12  col-xs-12'> 

	<div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 

		<table class="table"> 
			 	<thead> 
			 		<tr>
			 		    <th>
			 		    	Partner Name	
			 		    </th> 
			 	        <th></th> 
			 	        <th></th>
			 	        <th></th>
			 	    </tr>
			    </thead>
			 	 <tbody> 
			 	 	@foreach($trucks as $t)
					<tr>
			 	 		@if($t->present == 1)
			 	 	     <td><i class="fa fa-user text-success hidden-xs hidden-sm " aria-hidden="true"></i>&nbsp;{{$t->pname}}
			 	 	     </td>
			 	 	    @else
			 	 	     <td><i class="fa fa-user text-danger hidden-xs hidden-sm " aria-hidden="true"></i>&nbsp;{{$t->pname}}
			 	 	     </td>
			 	 	    @endif
			 	 	     <td>
			 	 	        <a href="{{url('/detail/'.$t->id)}}" class="btn btn-info col-sm-6 pull-right">
			 	 	      		<i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i>
			 	 	      	</a>
			 	 	     </td>
			 	 	     @if($t->present == 1)
			 	 	     <td>
			 	 	      	<a href="{{url('/edit/'.$t->id)}}" class="btn btn-warning col-sm-6 pull-right">
			 	 	      	 	<i class="fa fa-edit" aria-hidden="true"></i>
			 	 	      	</a>
			 	 	     </td> 
			 	 	     <td>
			 	 	     	<a href="{{url('/delete/'.$t->id)}}" class="btn btn-danger col-sm-6 pull-right">
			 	 	     		<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
							</a>
						</td>
						@else
						<td>
			 	 	      	<a href="{{url('/resign/'.$t->id)}}" class="btn btn-success col-sm-6 pull-right">
			 	 	      	 	<i class="fa fa-plus" aria-hidden="true"></i>
			 	 	      	</a>
			 	 	     </td>
			 	 	     <td></td>
			 	 	     @endif
			 	 	</tr>
					@endforeach
			 	</tbody>
	    </table>

	</div>	

  </div>

</section>

@endsection