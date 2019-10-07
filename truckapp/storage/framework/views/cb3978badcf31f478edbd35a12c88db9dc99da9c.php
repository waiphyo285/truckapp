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
                        <li><a href="<?php echo e(asset('/staff')); ?>"><i class="fa fa-users" aria-hidden="true">
                        </i><span class="hidden-xs hidden-sm">Staffs</span></a></li>
                        <li><a href="<?php echo e(asset('/partnership')); ?>"><i class="fa fa-truck" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Partnerships</span></a></li>
                        <li><a href="<?php echo e(asset('/achieve')); ?>"><i class="fa fa-gift" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Achievements</span></a></li>
                        <li><a href="<?php echo e(asset('/location')); ?>"><i class="fa fa-road" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Location</span></a></li>
                        
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
                                <!--<input type="text" placeholder="Search" id="search">-->
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <!--<li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                                   
                                    <li>
                                        <a href="<?php echo e(url('/viewhire')); ?>" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
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
                                    </li>
                                -->
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
            <p>

                UCSMTLA © 2018, All Rights Reserved
                
            </p>
           <!-- <p><a href="https://www.linkedin.com/in/michael-clark-webdeveloper" target="_blank">Linkedin <i class="fa fa-linkedin-square" aria-hidden="true"></i> </a></p> -->
        </div>
    </footer>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>