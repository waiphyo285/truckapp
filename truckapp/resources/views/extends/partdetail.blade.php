@extends('apkhome')

@section('extend')
        
  <h4 class="text-center well col-lg-12 col-md-12 col-sm-12 col-xs-12">
        Parnter Info Details
        <a href="{{url('/partnership')}}" class="pull-left">Back</a>
  </h4>
  <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table"> 
                  <tbody> 
                      <tr>
                          <th>Partner Name</th> 
                          <td>{{$truck->pname}}</td> 
                      </tr>
                      <tr>  
                          <th>Address</th>
                          <td>{{$truck->address}}</td> 
                      </tr>
                      <tr>  
                          <th>Contact</th>
                          <td>{{$truck->contact}}</td> 
                      </tr>
                      <tr>  
                          <th>Reg No.</th>
                          <td>{{$truck->truckno}}</td> 
                          <th>Register At</th>
                          <td>{{$truck->created_at}}</td> 
                      </tr>
                      <tr>
                          <th>Wheels</th> 
                          <td>{{$truck->wheels}} </td> 
                          <th>Color</th>
                          <td>
                            <div style="height:20px;width:30px;background:{{$truck->color}};"></div>
                          </td> 
                      </tr>
                      <tr> 
                          <th>Present</th> 
                          @if($truck->present == 1)
                            <td>Yes</td>
                          @else
                            <td>No</td> 
                          @endif
                          <th>Current Place</th>
                          <td>
                            {{$truck->place}}
                          </td> 
                      </tr>
                  </tbody>
              </table> 
        </div>
</section>

@endsection

 

