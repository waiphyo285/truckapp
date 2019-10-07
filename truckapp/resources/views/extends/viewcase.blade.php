@extends('home')
@section('extend')
     
  <h4 class=" well text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <a href="{{url('/location')}}" class="pull-left">Back</a>
      Truck Cases Detail
  </h4>       
  <section class="well info-truck col-lg-12 col-md-12 col-sm-12 col-xs-12" >
        <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Date</th>
                      <th>Truck No.</th>
                      <th>Case Type</th>
                    </tr>
                  </thead> 
                  <tbody>
                      <?php $i=1;?>
                      @foreach($cases as $c)
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td>
                          <?php
                              $op=explode(" ",$c->created_at);
                              echo $op[0];
                            ?>
                        </td>
                        <td>{{$c->truckno}}</td>
                        <td>{{$c->event}}</td>
                      </tr> 
                      @endforeach
                  </tbody>
              </table> 
        </div>
  </section>
@endsection

 

