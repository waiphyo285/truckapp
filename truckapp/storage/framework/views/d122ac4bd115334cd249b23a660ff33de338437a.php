<?php $__env->startSection('content'); ?>

    <!--<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>-->
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a href="<?php echo e(asset('/home')); ?>"><img src="images/truck-icon.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="images/truck-icon.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="<?php echo e(asset('/home')); ?>"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="<?php echo e(asset('/launch')); ?>"><i class="fa fa fa-pencil-square-o" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Launch Info</span></a></li>
                        <li><a href="<?php echo e(asset('/ownership')); ?>"><i class="fa fa-truck" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Ownerships</span></a></li>
                        <li><a href="<?php echo e(asset('/partnership')); ?>"><i class="fa fa-users" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Partnerships</span></a></li>
                        <li><a href="<?php echo e(asset('/profit')); ?>"><i class="fa fa-gift" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profits</span></a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search" id="search">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <!--<li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/user.png" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>JS Krishna</span>
                                                    <p class="text-muted small">
                                                        me@jskrishna.com
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="#" class="view btn-sm active">View Profile</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>-->
                                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">

                    <?php if(session('success')): ?>


                         <p class="alert alert-info text-center" style="margin-top:10px;"><?php echo e(session('success')); ?></p>


                    <?php endif; ?>
                    
                    <?php echo $__env->yieldContent('extend'); ?>

                </div>
            </div>
        </div>
        
    </div>
    <footer class="container-fluid text-center bg-lightgray">

        <div class="copyrights" style="margin-top:10px;">
            <p>UCSMTLA © 2016, All Rights Reserved,
                <span>Developed By: W.P.Nai</span>
            </p>
           <!-- <p><a href="https://www.linkedin.com/in/michael-clark-webdeveloper" target="_blank">Linkedin <i class="fa fa-linkedin-square" aria-hidden="true"></i> </a></p> -->
        </div>
    </footer>


    <!-- Modal -->
    <form method="post">

        <?php echo e(csrf_field()); ?>

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
                                <input type="text" class="" placeholder="Brand Name" name="brand" required>   
                            </div>  
                                
                           <div class="col-sm-4">
                                <input type="text" class="" placeholder="Reg No." name="regno" required>   
                            </div>  
    
                            <div class="col-sm-4">
                                <input type="text" class="" placeholder="Truck Model" name="model" required>   
                            </div>  
                        
                        </div>  
    
                        <div class="row form-group col-md-10 col-md-offset-1">
                            
                            <div class="col-sm-3">
                                <select class="selectpicker" name="fuel" data-live-search="true" required>
                                    <optgroup label="Fuel">  

                                        <option value="gasolene" selected>Gasolene</option>
                                        <option value="diesel">Diesel</option>

                                    </optgroup>
                                </select>   
                            </div>  
                                
                           <div class="col-sm-3">   
                                <input type="color" class="color" placeholder="Color" name=" color" value="#0000ff" required>   
                            </div>  
    
                            <div class="col-sm-3">
                                <input type="text" class="" placeholder="Wheels" name="wheels" required>   
                            </div>  
    
                            <div class="col-sm-3">
                                <input type="text" class="" placeholder="Country" name="country" required>   
                            </div>  
                        
                        </div>  
                               
                        <div class="row form-group col-md-10 col-md-offset-1">
                            
                            <div class="col-sm-4">
                                <input type="text" class="" placeholder="Engine No." name="engineno" required>   
                            </div>  
                                
                           <div class="col-sm-4">   
                                <input type="date" class="" placeholder="Date Recieved" name="date" required>   
                            </div>  
                            <div class="col-sm-4">   
                                <input type="text" class="" placeholder="Cost Investment" name="cost" required>   
                            </div> 
                        </div> 
                                    
                        <!--<label for="owner" class="col-md-4 text-center"><input  type="radio" class="radio col-md-4" name="work-check"    value="owner">Owner</label>    
                                
                        <lab    el for="driver" class="col-md-4 text-center"><inpu  t     type    ="radio" class="radio col-md-4" name="work-check"   valu  e="driver">Driver</label> 
    
                        <label for="merchant" class="col-md-4 text-center"><input   type="radio" class="radio col-md-4" name="work-check"     value="merchant">Merchant</label>       
                        --> 
                                 
                    </div>  

                    <div class="modal-footer">
                        <div class="row form-group col-md-10 col-md-offset-1">
            
                            <div class="col-md-4 col-md-offset-1">
        
                                <input type="submit" value="Add Data" class="btn   btn-primary">

                            </div>

                            <div class="col-md-4 col-md-offset-1">
            
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                            </div>

                        </div>

                         

                    </div>  

                    <p class="text-center">Fill correctly!</p>

                </div>  
    
            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>