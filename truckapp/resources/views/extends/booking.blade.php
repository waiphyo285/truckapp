@extends('home')

@section('extend') 
  @if(session('notruck'))
  <h4 class="alert alert-warning col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;">{{session('notruck')}}</h4>
  @elseif(session('addloc'))
  <h4 class="alert alert-success col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;">{{session('addloc')}}</h4>
  @else     
  <h4 class="text-center well col-lg-12 col-md-12 col-sm-12 col-xs-12">
        New Booking
        <a href="{{url('/achieve')}}" class="pull-left">Back</a>
  </h4>
  @endif
  <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form method="post" role="form">
      {{csrf_field()}}
       <div  class="col-md-12"> 
                  <div class="row form-group col-md-10 col-md-offset-1">
                        <div class="col-sm-4">
                         <br> 
                          <label>Available Truck</label>       
                       </div>
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
                  </div> 
                  <div class="row form-group col-md-10 col-md-offset-1">
                        <div class="col-md-4 col-md-offset-4">
                          <input type="submit" value="Add To Booking" class="btn col-md-12 btn-primary col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        </div>
                  </div>          
            </div>
      </form>
  </section>
  <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:200px;overflow-y:scroll;">
      <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table">
                  <thead>
                    <tr>
                      <th>Truck No.</th>
                      <th>Current Place</th>
                      <th>Is Back ?</th>
                    </tr>
                  </thead> 
                  <tbody>
                      @foreach($backtrucks as $bt)
                         <tr>
                          <td> {{$bt->truckno}}</td>
                          <td> {{$bt->place}}</td>
                          <td>
                            <a href="{{url('/addloc/'.$bt->id)}}" class="btn btn-default btn-sm" >Yes</a>
                          </td>
                        </tr>
                      @endforeach   
                  </tbody>
              </table> 
        </div>
  </section>
@endsection

 

