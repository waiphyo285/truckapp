@extends('home')

@section('extend')
 
 <div class="row"> 
    @if(session('notruck'))
      <h4 class="well text-warning col-lg-8 col-md-8 col-sm-8 col-xs-8">{{session('notruck')}}</h4>
    @elseif(session('indate'))
      <h4 class="well text-warning col-lg-8 col-md-8 col-sm-8 col-xs-8">{{session('indate')}}</h4>
    @elseif(session('inplace'))
      <h4 class="well text-warning col-lg-8 col-md-8 col-sm-8 col-xs-8">{{session('inplace')}}</h4>
    @elseif(session('okay'))
      <h4 class="well text-success col-lg-8 col-md-8 col-sm-8 col-xs-8">{{session('okay')}}</h4>
    @elseif(session('booking'))
      <h4 class="well text-success col-lg-8 col-md-8 col-sm-8 col-xs-8">  {{session('booking')}}
      </h4>
    @else
    <h4 class='well col-lg-8 col-md-8 col-sm-8 col-xs-8 text-center'>
      Achievement
    </h4>
    @endif
    <h4 class='well col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center'>
      Booking Trucks
    </h4>
 </div>
    
<div class="row">
  <section class="well col-lg-8 col-md-8 col-sm-8 col-xs-8">

    <form method="post" role="form">
      {{csrf_field()}}
       <div  class="col-md-12"> 
                  <div class="row form-group col-md-10 col-md-offset-1">
                        <div class="col-sm-4">
                         <br> 
                          <label>Estimated Date</label>       
                       </div>
                        <div class="col-sm-8">
                           <input type="date" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" placeholder="" name="date" required>       
                       </div> 
                  </div> 
                  <div class="row form-group col-md-10 col-md-offset-1"> 
                       <div class="col-sm-4">  
                          <select class="sel-tk selectpicker col-lg-12 col-md-12 col-sm-12 col-xs-12" name="truckno" data-live-search="true">
                              <optgroup label="Truck Reg.">
                                  @foreach($trucks as $t)
                                      <option value="{{$t->truckno}}">
                                          {{$t->truckno}}
                                      </option>
                                  @endforeach 
                              </optgroup>
                          </select>   
                       </div>  
                       <div class="col-sm-4">
                                <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="start" value="{{$place}}" readonly>
                       </div> 
                       <div class="col-sm-4">
                               <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="destination" placeholder="Destination Place"
                               value="" maxlength="30" required>
                        </div>               
                    </div>  
    
                   <div class="row form-group col-md-10 col-md-offset-1">
                       <div class="col-sm-6">   
                          <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12"  min="100000" max="1000000" placeholder="Transport Amount" name="amount" required>       
                       </div>     
                       <div class="col-sm-6">
                            <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12"  min="1" max="100" placeholder="Get Amount (%)" name="percent" required>      
                       </div>    
                    </div>  
                    <div class="row form-group col-md-10 col-md-offset-1">
                        <div class="col-md-4 col-md-offset-4">
                          <input type="submit" value="Add To Transport" class="btn col-md-12 btn-primary col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        </div>
                  </div>          
            </div>
      </form>
      <div class="row  col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div>
        <hr>
            <a href="{{url('/booking')}}" class="btn pull-right">Add Booking</a>
            <a href="{{url('/account')}}" class="btn pull-right ">Accounting</a>
        </div>
      </div>
</section>
<section class="info-truck well col-lg-4 col-md-4 col-sm-4 col-xs-4">
<div class='col-lg-12 col-md-12 col-sm-12  col-xs-12'> 
  <div class="table-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
      <table class="table"> 
        <thead> 
          <tr>
              <th>Truck No.</th> 
              <th>Place</th> 
          </tr>
        </thead>
        <tbody>
        @foreach($trucks as $t)
           <tr>
              <td><a href="{{url('/detail/'.$t->id)}}">{{$t->truckno}}</a></td>
              <td>{{$t->place}}</td>
            </tr>
        @endforeach
        </tbody>
      </table>
  </div>  
</div>
</section>
</div>

@endsection

 

