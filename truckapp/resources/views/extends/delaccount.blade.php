@extends('apkhome')
@section('extend')
          
    <h4 class="text-center well col-lg-12 col-md-12 col-sm-12 col-xs-12">
       Account Detials For {{$t}}
      <a href="{{url('/account')}}" class="pull-left">Back</a>
    </h4>

  <section class="well info-truck col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:380px;overflow-y:scroll;">
        <div class="table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Date</th>
                      <th>Amounts</th>
                      <th>Total Amounts</th>
                      <th>Get Amounts</th>
                      <th>Total Get Amounts</th>
                    </tr>
                  </thead> 
                  <?php 
                    $all_amount=0;
                    $all_get=0;
                  ?>
                  <tbody>
                      <?php $i=1; ?>
                      @foreach($deltruck as $t)
                         <tr>
                          <td><?php echo $i++;?></td>
                          <td>
                            <?php
                                $op=explode(" ",$t->created_at);
                                echo $op[0];
                             ?>
                          </td>
                          <td>{{$t->t_amount}}</td>
                          <th>
                              <?php
                                $all_amount+=$t->t_amount;
                                echo $all_amount;
                              ?> 
                          </th>
                          <td>{{$t->g_amount}}</td> 
                          <th>
                            <?php
                              $all_get+=$t->g_amount;
                              echo $all_get;
                            ?>
                          </th>                  
                         </tr> 
                      @endforeach   
                  </tbody>
              </table> 
        </div>
  </section>
@endsection

 

