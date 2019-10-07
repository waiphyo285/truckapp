<?php $__env->startSection('extend'); ?>
 
<section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class=" table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table"> 
                  <thead> 
                      <tr>

                          <th>Truck No.</th> 
                          <th>Total</th> 
                          <th>Inc.</th>
                          <th>Exp.</th>
                          <th>Pf.</th>
                          <th>Petrols</th>
                          
                       </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                        
                        <?php $tinc=0; $texp=0; $tpf=0; $tpt=0; $truckno='';

                        foreach($profits as $pf)
                        {
                          $tinc =$pf->incomes + $tinc ;
                          $texp =$pf->expenses + $texp;
                          $tpf =$pf->profits + $tpf;
                          $tpt =$pf->petrol + $tpt;
                          $truckno =$pf->truckno;

                        }

                         ?>

                          <td><?php echo $truckno; ?></td>
                          <td>Total Equavalence</td>
                          <td><?php echo $tinc; ?></td>
                          <td><?php echo $texp; ?></td>
                          <td><?php echo $tpf; ?></td>
                          <td><?php echo $tpt.' gls.'; ?></td>

                    </tr>

                </tbody>

              </table> 
          </div>

</section>
 <section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="profitdetail table-responsive col-lg-12 col-md-12 col-sm-12  col-xs-12"> 
              <table class="table"> 
                  <thead> 
                      <tr>

                          <th>No.</th> 
                          <th>
                              Date <i class="fa fa-sort  text-info" aria-hidden="true"></i> 
                          </th> 
                          <th>Inc.</th>
                          <th>Exp.</th>
                          <th>Pf.</th>
                          <th>Petrols</th>
                          <th>From</th>
                          <th>To</th>
                          <th>Lose</th>
                          
                       </tr>
                  </thead>
                  <tbody>

                        <?php $count=1; ?>

                        <?php $__currentLoopData = $profits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prof): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                        <tr>

                          <td><?php echo $count; ?></td>
                          <td><?php echo e($prof->date); ?></td>
                          <td><?php echo e($prof->incomes); ?></td>
                          <td><?php echo e($prof->expenses); ?></td>
                          <td><?php echo e($prof->profits); ?></td>
                          <td><?php echo e($prof->petrol); ?> gls.</td>
                          <td><?php echo e($prof->from); ?></td>
                          <td><?php echo e($prof->to); ?></td>
                          <td><a href="<?php echo e(url('/loseprof/'.$prof->id)); ?>" class="btn  text-danger"><i class="glyphicon glyphicon-trash"></i></a></td>
                          
                        </tr>

                        <?php $count=$count+1; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                     
                  </tbody>

                  <tfoot class="text-info">
                    
                    <tr>
                        
                        <?php $tinc=0; $texp=0; $tpf=0; $tpt=0;

                        foreach($profits as $pf)
                        {
                          $tinc =$pf->incomes + $tinc ;
                          $texp =$pf->expenses + $texp;
                          $tpf =$pf->profits + $tpf;
                          $tpt =$pf->petrol + $tpt;

                        }

                         ?>

                          <td></td>
                          <td></td>
                          <td><?php echo $tinc; ?></td>
                          <td><?php echo $texp; ?></td>
                          <td><?php echo $tpf; ?></td>
                          <td><?php echo $tpt.' gls.'; ?></td>
                          <td></td>
                          <td></td>

                    </tr>

                </tfoot>

              </table> 
          </div>

</section>

<section class="well col-lg-12 col-md-12 col-sm-12 col-xs-12">

  <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div class="row">
      
      <div class="col-md-8 col-sm-8 col-xs-8">
        
        <h4 class="h4"> Truck Profits</h4>

      </div>

      <div class="col-md-2 col-xs-2 col-sm-2">
        
        <a href="<?php echo e(url('/profit')); ?>" class="btn btn-default pull-right">Back</a>

      </div>

      <div class="col-md-2 col-xs-2 col-sm-2">
        
        <a href="<?php echo e(url('/resetprofit/'.$truckno)); ?>" class="btn btn-danger pull-right">Reset This Profits</a>

      </div>

    </div>
      
  </div>

</section>

<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('apkhome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>