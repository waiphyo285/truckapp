@extends('home')

@section('extend')

	@if(session('success'))
    <p class="alert alert-info text-center" style="margin-top:10px;">
        {{session('success')}}
    </p>
    @elseif(session('warning'))
    <p class="alert alert-warning text-center" style="margin-top:10px;">
        {{session('warning')}}
    </p>
    @else
    
    <h4 class="h4 well">
        Home Info..
        <a href="#" class="add-project btn btn-xs btn-default pull-right" data-toggle="modal" data-target="#add_project">Add New Truck&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></a>
    </h4>
     @endif
     <br>
     <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table table-hover ">
                  <thead>
                      <tr>
                          <th colspan="4" class="text-center"><h4>Key Shortcuts For Some Contents </h4></th>     
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th>Home</th>
                          <td><a href="{{url('/home')}}" class="btn btn-default btn-xs">Visit</a></td>
                          <th>Our partnership</th>
                          <td><a href="{{url('/partnership')}}" class="btn btn-default btn-xs">Visit</a></td>
                      </tr>  
                      <tr>
                          <th>Location for trucks</th>
                          <td><a href="{{url('/location')}}" class="btn btn-default btn-xs">Visit</a></td>
                          <th>Our achievements</th>
                          <td><a href="{{url('/achieve')}}" class="btn btn-default btn-xs">Visit</a></td>
                      </tr>
                      <tr>
                          <th>All Staffs Info</th>
                          <td><a href="{{url('/staff')}}" class="btn btn-default btn-xs">Visit</a></td>
                          <th>Left partners</th>
                          <td><a href="{{url('/left')}}" class="btn btn-default btn-xs">Visit</a></td>
                      </tr>
                      <tr>
                          <th>Financial accounts</th>
                          <td><a href="{{url('/account')}}" class="btn btn-default btn-xs">Visit</a></td>
                          <th>Net profits</th>
                          <td><a href="{{url('/net')}}" class="btn btn-default btn-xs">Visit</a></td>
                      </tr>
                      <tr>
                          <th>Add new booking</th>
                          <td><a href="{{url('/booking')}}" class="btn btn-default btn-xs">Visit</a></td>
                          <th>Add new staff</th>
                          <td><a href="{{url('/newstaff')}}" class="btn btn-default btn-xs">Visit</a></td>
                      </tr>
                      <tr>
                          <th>Finish Transport</th>
                          <td><a href="{{url('/finish')}}" class="btn btn-default btn-xs">Visit</a></td>
                          <th>Sleep App</th>
                          <td><a href="{{url('/')}}" class="btn btn-default btn-xs">Sleep</a></td>
                      </tr>
                  </tbody>
              </table> 
        </div>
    </section>
  
    <!-- Modal -->
    <form method="post">

        {{csrf_field()}}
        <div id="add_project" class="modal fade" role="dialog">
            <div class="modal-dialog">
    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header login-header">
                        <button type="button" class="close" data-dismiss="modal">&times;   </button> 
                        <h4 class="modal-title">Add New Truck Info</h4>   
                    </div>   
                    <div  class="modal-body col-md-12">  
                            
                        <div class="row form-group col-md-10 col-md-offset-1"> 
                                    
                            <div class="col-sm-4">  
                                <input type="text" class="" pattern="[A-Za-z ]{3,30}" placeholder="Owner Name" name="pname" required>   
                            </div>  
                            <div class="col-sm-8">
                                <input type="tel" class="" pattern="(09)[0-9]{9}" placeholder="Phone" name="contact" maxlength="11" required>   
                            </div>  
                        </div>  
    
                        <div class="row form-group col-md-10 col-md-offset-1">
                            <div class="col-sm-12">
                                <input type="text" class="" placeholder="Enter Address" name="addr"  pattern="[A-Za-z ]{3,50}" required>   
                            </div>
                        </div>  
                               
                        <div class="row form-group col-md-10 col-md-offset-1"> 
                             <div class="col-sm-4">
                                <input type="text" class="" placeholder="Reg No." name="regno" pattern="\d[A-Z][-]+\d{4}" maxlength="7" required>   
                            </div> 
                            <div class="col-sm-6">
                                <input type="number" min="6" max="24" class="" placeholder="No Of Vehicle" name="wheels" required>   
                            </div>
                            <div class="col-sm-2">   
                                <input type="color" class="color" name=" color" value="#0000ff" required>   
                            </div>
                        </div> 
                                    
                        <!--<label for="On yours" class="col-md-6 text-center"><input  type="radio" class="radio col-md-6" name="place"  value="On your place" checked>On your place</label>    
                                
                        <label for="other" class="col-md-6 text-center"><input type="radio" class="radio col-md-6" name="place" value="Other place">Other place</label> -->
                    </div>  

                    <div class="modal-footer">
                        <div class="row form-group col-md-10 col-md-offset-1">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" value="Add New Truck Info" class="btn  btn-primary">
                            </div>

                        </div>

                    </div>  

                </div>  
    
            </div>
        </div>

    </form>

@endsection