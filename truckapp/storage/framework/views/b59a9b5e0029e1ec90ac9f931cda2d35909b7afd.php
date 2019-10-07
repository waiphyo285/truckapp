<!DOCTYPE HTML>
<html>
<head>
<title>Truck Jobseekers MM</title>
<meta charset="utf-8">

<link rel="stylesheet" href=" <?php echo e(asset('/css/app.css')); ?>" >
<link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-theme.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('/css/main.css')); ?>"/>
<link rel="stylesheet" href="<?php echo e(asset('/fonts/awesome.css')); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/formpost.css')); ?>">

<!--[if lte IE 9]>
<link rel="stylesheet" href="css/ie9.css">
<![endif]-->
<!--[if lte IE 8]>
<link rel="stylesheet" href="css/ie8.css">
<![endif]-->
<!--[if lte IE 7]>
<link rel="stylesheet" href="css/ie7.css">
<![endif]-->
</head>
<body>
  <div class="conatiner">
    <div class="form col-lg-12">
      <div class="row">
        <div class="col-lg-3">
          
        </div>
        <div class="col-lg-6 center">
          <h3 class="h2 text-center">
            Curriculum Vitate Form
          </h3>
          <br>
          <form class="form-horizontal" method="post">
          <?php echo e(csrf_field()); ?>


            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" pattern="[A-Za-z ]{3,20}"  placeholder="Enter Jobseeker Name" required> 
              </div> 
           </div>
           <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="Enter Email"> 
              </div> 
           </div>
           <div class="form-group">
              <label for="age" class="col-sm-2 control-label">Age</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" min="16" max="45" name="age" pattern="\d*" placeholder="Enter Ages" required> 
              </div> 
           </div>

           <div class="form-group">
              <label for="exp" class="col-sm-2 control-label">Experiences</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" min="0" max="30" name="exp" pattern="\d*" placeholder="Enter Experience" required> 
              </div> 
           </div>

           <div class="form-group">
              <label for="licence" class="col-sm-2 control-label">Licence</label>
              <div class="col-sm-10">
               <select class="selectpinker form-control" name="licence">
                 <optgroup label="Licence">
                   <option value="Licence A">Licence A</option>
                   <option value="Licence B">Licence B</option>
                   <option value="Licence C">Licence C</option>
                 </optgroup>
               </select>
              </div> 
           </div>

           <div class="form-group">
              <label for="address" class="col-sm-2 control-label">Address</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="addr" pattern="[A-Za-z ]{3,50}" placeholder="Enter Address" required> 
              </div> 
           </div>

           <div class="form-group">
              <label for="contact" class="col-sm-2 control-label">Contact</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="contact" placeholder="Enter Contact Number" pattern="\d*" maxlength="11" required> 
              </div> 
           </div>
           <div class="form-group">
              
              <div class="col-sm-12">
                <input type="submit" class="btn btn-primary col-lg-2 pull-right" value="Post">  
              </div> 
           </div>
           
          </form>
        </div>
        <div class="col-lg-3">
          
        </div>
      </div>
    </div>
  </div>
</body>
</html>