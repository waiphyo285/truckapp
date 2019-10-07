<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="../css/app.css" >
    <link rel="stylesheet" href=" ../css/bootstrap.min.css" />
    <link rel="stylesheet" href=" ../css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href=" ../css/main.css"/>
    <link rel="stylesheet" href=" ../fonts/awesome.css" />
    
    <script type="text/javascript" src="../js/main.js"> </script>
    <script type="text/javascript" src=" ../js/jquery.js"> </script>
    <script type="text/javascript" src=" ../js/bootstrap.min.js"> </script>

    <link rel="stylesheet" type="text/css" href=" ../css/admin.side.css">
    <script type="text/javascript" src=" ../js/admin.side.js"></script>

    <!-- Scripts -->
    
</head>
<body>
    <div id="app" style="background:#f0f0f0;">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href=    "<?php echo e(url('/home')); ?>">
                         <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                        
                
       
                <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <legend>Edit Truck Info</legend>

        <form method="post" role="form">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                
                <p>Enter Student Name</p> 
                <input type="text" name="name" class="form-control" value="<?php echo e($truck->brandname); ?>" required>

            </div>

            <div class="form-group">
                
                <p>Enter Student Email</p> 
                <input type="email" name="email" class="form-control" value="<?php echo e($truck->truckno); ?>">

            </div>

            <div class="form-group">
                
                <p>Enter Student Adress</p> 
                <input type="text" name="addr" class="form-control" value="<?php echo e($truck->truckmodel); ?>">

            </div>

            <div class="form-group">
                
                <p>Enter Student Name</p> 
                <input type="text" name="name" class="form-control" value="<?php echo e($truck->fuel); ?>" required>

            </div>

            <div class="form-group">
                
                <p>Enter Student Email</p> 
                <input type="email" name="email" class="form-control" value="<?php echo e($truck->color); ?>">

            </div>

            <div class="form-group">
                
                <p>Enter Student Adress</p> 
                <input type="text" name="addr" class="form-control" value="<?php echo e($truck->wheels); ?>">

            </div>

            <div class="form-group">
                
                <p>Enter Student Name</p> 
                <input type="text" name="name" class="form-control" value="<?php echo e($truck->country); ?>" required>

            </div>

            <div class="form-group">
                
                <p>Enter Student Email</p> 
                <input type="email" name="email" class="form-control" value="<?php echo e($truck->engineno); ?>">

            </div>

            <div class="form-group">
                
                <p>Enter Student Adress</p> 
                <input type="text" name="addr" class="form-control" value="<?php echo e($truck->date); ?>">

            </div>

            <div class="form-group">
                
                <p>Enter Student Adress</p> 
                <input type="text" name="addr" class="form-control" value="<?php echo e($truck->cost); ?>">

            </div>


            <div class="form-group">
                
                <input type="submit" value="Edit" class="form-control">

            </div>

        </form>
            </div>
        </div>
    </div>
</div>
       
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
