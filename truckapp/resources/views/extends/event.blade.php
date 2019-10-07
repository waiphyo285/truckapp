@extends('apkhome')

@section('extend')    
  <h4 class="text-center well col-lg-12 col-md-12 col-sm-12 col-xs-12">
        Add Event For Truck
        <a href="{{url('/location')}}" class="pull-left">Back</a>
  </h4>
  <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form method="post" role="form">
      {{csrf_field()}}
       <div  class="col-md-12"> 
                  <div class="form-group col-md-12">
                      <div class="col-sm-4">
                         <br> 
                          <label>Transport Id</label>       
                       </div>
                       <div class="col-sm-4">  
                          <input type="text" name="id" value="{{$carry}}" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" readonly> 
                       </div>                       
                  </div> 
                  <div class="form-group col-md-12">
                      <div class="col-sm-4">
                         <br> 
                          <label>Event</label>       
                       </div>
                       <div class="col-sm-4">  
                           <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" placeholder="Write Event..." name="event" required>
                           </textarea>
                       </div>   
                  </div>
                  <div class="form-group col-md-10 col-md-offset-1">
                        <div class="col-md-2 col-md-offset-5">
                          <input type="submit" value="Add Event" class="btn btn-primary col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        </div>
                  </div>          
            </div>
      </form>
  </section>
@endsection

 

