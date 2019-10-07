@extends('home')
@section('extend')
      
  <h4 class="text-center well col-lg-12 col-md-12 col-sm-12 col-xs-12">
      Transport Achivement 
      <a href="{{url('/location')}}" class=" pull-left">Back</a>
  </h4> 
     
  <section class="well info-truck col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table">
                  <thead>
                    <tr>
                      <th>Truck No.</th>
                      <th>Estimate Date</th>
                      <th>Start Place</th>
                      <th>Destination Place</th>
                      <th>Total Amount</th>
                      <th>Get Amount</th>
                    </tr>
                  </thead> 
                  <tbody>
                      @foreach($finish as $f)
                         <tr>
                          <td> {{$f->truckno}}</td>
                          <td> {{$f->estimate_date}}</td>
                          <td> {{$f->start_place}}</td>
                          <td> {{$f->destinate_place}}</td>
                          <td> {{$f->t_amount}}</td>
                          <td> {{$f->g_amount}}</td>
                         </tr> 
                      @endforeach   
                  </tbody>
              </table> 
        </div>
  </section>
@endsection

 

