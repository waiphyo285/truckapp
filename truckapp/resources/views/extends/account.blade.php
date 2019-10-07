@extends('home')
@section('extend')
          
    <h4 class="text-center well col-lg-12 col-md-12 col-sm-12 col-xs-12">
      All Truck Accounts Detail
      <a href="{{url('/achieve')}}" class="pull-left">Back</a>
      <a href="{{url('/net')}}" class="btn btn-xs pull-right">Net Profits</a>
    </h4>

  <section class="well info-truck col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Truck No.</th>
                      
                      <th><span class="pull-right">Account Details</span></th>
                    </tr>
                  </thead> 
                  <tbody>
                      <?php $i=1; ?>
                      @foreach($trucks as $t)
                         <tr>
                          <td><?php echo $i++;?></td>
                          <td>
                              {{$t->truckno}}
                          </td>
                          <td>
                              <span class="pull-right">
                                  <a href="{{url('/detailacc/'.$t->truckno)}}" class="btn btn-sm" >Details</a>
                              </span>
                          </td>
                         </tr> 
                      @endforeach   
                  </tbody>
              </table> 
        </div>
  </section>
@endsection

 

