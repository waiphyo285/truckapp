@extends('home')
@section('extend')
  @if(session('samedate'))
  <h4 class="text-center alert alert-warning col-lg-12 col-md-12 col-sm-12 col-xs-12">
      {{session('samedate')}}
  </h4> 
  @elseif(session('addevent'))
  <h4 class="text-center alert alert-warning col-lg-12 col-md-12 col-sm-12 col-xs-12">
      {{session('addevent')}}
  </h4>
  @elseif(session('cancel'))
  <h4 class="text-center alert alert-danger col-lg-12 col-md-12 col-sm-12 col-xs-12">
      {{session('cancel')}}
  </h4>
  @elseif(session('success'))
  <h4 class="text-center alert alert-success col-lg-12 col-md-12 col-sm-12 col-xs-12">
      {{session('success')}}
  </h4> 
  @else       
    <h4 class=" well col-lg-12 col-md-12 col-sm-12 col-xs-12">
      Current Truck Location
      <a href="{{url('/finish')}}" class="btn btn-xs btn-default pull-right">   
        Achievement
      </a>
      <a href="{{url('/viewcase/')}}" class="btn btn-xs btn-default pull-right"> Cases On Road</a> 
      <!--<a href="{{url('/yourloc')}}" class="btn btn-xs pull-right">Your Location</a> -->
  </h4> 
  @endif       
  <section class="well info-truck col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table">
                  <thead>
                    <tr>
                      <th>Truck No.</th>
                      <th>Starting Date</th>
                      <th>Estimate Date</th> 
                      <th>Current Location</th>
                      <th>Any Case For Transport</th>
                    </tr>
                  </thead> 
                  <tbody>
                      @foreach($trucks as $t)
                         <tr>
                          <td>
                              {{$t->truckno}}
                          </td>
                          <td>
                             <?php
                                $op=explode(" ",$t->created_at);
                                echo $op[0];
                             ?>
                           </td>
                           <td>{{$t->curdate}}</td>
                           <td>{{$t->place}}</td>
                           <td>
                              <a href="{{url('/no/'.$t->curid)}}" class="btn btn-sm" >No</a>
                              <a href="{{url('/yes/'.$t->curid)}}" class="btn btn-sm">Yes</a> 
                              <a href="{{url('/cancel/'.$t->curid)}}" class="btn btn-sm" >
                                Cancel
                              </a>
                           </td>
                         </tr> 
                      @endforeach   
                  </tbody>
              </table> 
        </div>
  </section>
@endsection

 

