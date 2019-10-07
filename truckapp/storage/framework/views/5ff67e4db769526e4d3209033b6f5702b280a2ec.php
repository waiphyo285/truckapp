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
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">X</button>
                    <h4 class="modal-title">Registration Form</h4>
                </div>
                <div class="modal-body">
                    
                    
                    <input type="text" class="form-control" placeholder="User Name" name="name" required><br>
                       
                    <input type="email" class="form-control" placeholder="Email" name="email" required><br>

                    <input type="passsword" class="form-control" placeholder="Passsword" name="passsword" required><br>

                    <input type="passsword" class="form-control" placeholder="Comfirm Passsword" name="passsword" required><br>
                     
                    <label for="owner" class="col-md-4 text-center"><input type="radio" class="radio col-md-4" name="work-check" value="owner">Owner</label>
                        
                    <label for="driver" class="col-md-4 text-center"><input type="radio" class="radio col-md-4" name="work-check" value="driver">Driver</label>

                    <label for="merchant" class="col-md-4 text-center"><input type="radio" class="radio col-md-4" name="work-check" value="merchant">Merchant</label>   
                    
                        
                </div>
                <br><br>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>