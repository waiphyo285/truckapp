@extends('apkhome')

@section('extend')
 
 @if(session('newstaff'))
<h4 class="alert alert-success col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
  {{session('newstaff')}}
</h4>  
@elseif(session('invdeg'))
<h4 class="alert alert-warning col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
  {{session('invdeg')}}
</h4>
@else
<h4 class='well col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
      Staff Edition
      <a href="{{url('/staff')}}" class=" pull-left">Back</a> 
</h4>
@endif
  <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <form method="post" role="form">
      {{csrf_field()}}
       <div  class="col-md-12"> 
                  <div class="row form-group col-md-10 col-md-offset-1">
                        <div class="col-sm-4">
                         <br> 
                          <label>Staff Edit Form</label>       
                       </div>
                        <div class="col-sm-8">
                            <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="sname" pattern="[A-Za-z ]{3,30}" placeholder="Staff Name" value="{{$editid->name}}" required>   
                       </div> 
                  </div> 
                  <div class="row form-group col-md-10 col-md-offset-1"> 
                      <div class="col-sm-4">
                          <input type="tel" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" pattern="(09)[0-9]{9}" maxlength="11" placeholder="Phone" value="{{$editid->phone}}" name="scontact" required> 
                      </div> 
                       <div class="col-sm-4">
                            <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="sage" min="18" max="50" value="{{$editid->age}}" placeholder="Age" required>
                       </div>  
                      <div class="col-sm-4">  
                           <select class="sel-tk selectpicker col-lg-12 col-md-12 col-sm-12 col-xs-12" name="jtype" data-live-search="true">
                              <optgroup label="Job Type">
                                @if($editid->job == "Clerk")
                                 <option value="Clerk" selected>Clerk</option> 
                                 <option value="Worker">Worker</option>
                                 @else
                                  <option value="Clerk">Clerk</option> 
                                  <option value="Worker"  selected>Worker</option>
                                @endif
                              </optgroup>
                          </select>   
                       </div>                
                    </div>  
    
                   <div class="row form-group col-md-10 col-md-offset-1">
                       <div class="col-sm-4">
                          <input type="text" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" name="saddr" value="{{$editid->address}}" placeholder="Address" required>   
                                 
                       </div> 
                       <div class="col-sm-4">
                          <input type="number" class="col-md-12 col-lg-12 col-sm-12 col-xs-12"  min="100000" max="500000" value="{{$editid->salary}}" placeholder="Salary" name="salary" required>
                       </div> 
                       <div class="col-sm-4">    
                        <select class="sel-tk selectpicker col-lg-12 col-md-12 col-sm-12 col-xs-12" name="degree" data-live-search="true">
                              <optgroup label="Degree">
                                @if($editid->degree == "Graduated")
                                 <option value="Graduated" selected>Any Degree</option> 
                                 <option value="Not Set">Not Set</option> 
                                @else
                                 <option value="Graduated" >Any Degree</option> 
                                 <option value="Not Set" selected>Not Set</option>
                                @endif
                              </optgroup>
                          </select> 
                        </div>    
                    </div>  
                    <div class="row form-group col-md-10 col-md-offset-1">
                        <div class="col-md-4 col-md-offset-4">
                          <input type="submit" value="Edit Staff" class="btn col-md-12 btn-primary col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        </div>
                  </div>          
            </div>
      </form>
</section>

@endsection

 

