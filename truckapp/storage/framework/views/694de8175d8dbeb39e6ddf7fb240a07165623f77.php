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
<script src="<?php echo e(asset('/js/jquery-1.8.3.min.js')); ?>"></script>
<script src="<?php echo e(asset('/css/5grid/init.js?use=mobile,desktop,1000px')); ?>"></script>
<script src="<?php echo e(asset('/js/init.js')); ?>"></script>
<noscript>
<link rel="stylesheet" href="<?php echo e(asset('/css/5grid/core.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/css/5grid/core-desktop.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/css/5grid/core-1200px.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/css/5grid/core-noscript.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/css/style-desktop.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/css/font.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/fonts/awesome.css')); ?>">

</noscript>
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
<nav id="nav">
  <ul>
    <!--<li><a href="#top">Top</a></li>-->
    <li><a href="#work">Work</a></li>
    <li><a href="#portfolio">Offer</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>
<div class="wrapper wrapper-style1 wrapper-first">
  <article class="5grid-layout" id="top">
    <div class="row">
      <div class="4u"> <span class="me image image-full"><img src="images/truck.jpg" alt=""></span> </div>
      <div class="8u">
        <header>
          <h1>Hi I'm <strong>Truck Jobseekers MM</strong></h1>
        </header>
        <p>This is free site for <strong>Myanmar</strong>, can get more successful lives with your lovely &amp; join us now.</p>
        <a href="#work" class="btn btn-info btn-lg-3">Learn about what we do</a> </div>
    </div>
  </article>
</div>
<div class="wrapper wrapper-style2">
  <article id="work">
    <header>
      <h2>Now we do the following categories.</h2>
      <span>This is our own business and share us with your workablities.</span> </header>
    <div class="5grid-layout">
      <div class="row">
        <div class="4u">
          <section class="box box-style1"> <span class="image image-centered"><img src="images/truck-icon.jpg" alt=""></span>
            <h3>Trading Organization</h3>
            <p>Principally we do as commercial vehicles in Myanmar and guarentee 100% for your merchandiser.</p>
          </section>
        </div>
        <div class="4u">
          <section class="box box-style1"> <span class="image image-centered"><img src="images/many-users.png" alt=""></span>
            <h3>Our Parterships</h3>
            <p>We have many partnerships who are reliable gate heads,qulified drivers and sparers for our merchants.</p>
          </section>
        </div>
        <div class="4u">
          <section class="box box-style1"> <span class="image image-centered"><img src="images/profit.png" alt=""></span>
            <h3>Investments &amp; Profits</h3>
            <p>We are an organisation turn over strong investments and decent profits every year.</p>
          </section>
        </div>
      </div>
    </div>
    <footer>
      <p>Do you interest to join us? What's your choice?</p>
      <a href="#portfolio" class="btn btn-info btn-lg-3">See some of our offer posts</a> 
    </footer>
  </article>
</div>
<div class="wrapper wrapper-style3">
  <article id="portfolio">
    <header>
      <h2>Job opportunities make you satified.</h2>
      <span>We are undertaking if you make unexpected accident case and  relative laws.</span>
    </header>
 
      <ul class="ul-posts 12u">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <li class="li-post">
          <table class="table" width="100%">
            <tr>
              <th colspan="2" class="title"><b><?php echo e($p->title); ?></b>&nbsp;<?php echo e($p->created_at); ?></th>
            </tr>
            <tr>
              <th>Position</th><td><?php echo e($p->position); ?></td>
            </tr>
            <tr>
              <th>Wages</th><td><?php echo e($p->wage); ?></td>
            </tr>
            <tr>
              <th>Post(s)</th><td><?php echo e($p->post); ?></td>
            </tr>
            <tr>
              <th>Gender</th><td><?php echo e($p->gender); ?></td>
            </tr>
            <tr>
              <th>Contact</th><td><?php echo e($p->contact); ?></td>
            </tr>
            <tr>
              <th>Address</th><td><?php echo e($p->address); ?></td>
            </tr>
            <tr>
              <td colspan="2">
                <a href="<?php echo e(url('/formpost/'.$p->id)); ?>" class="btn btn-info col-sm-3 pull-right">Post</a>
              </td>
            </tr>
          </table>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
      </ul>
    <div class="5grid-layout">
      <div class="row">
        <div class="6u">  
          <a href="<?php echo e(url('/showless')); ?>" class="btn btn-warning  text-center col-lg-2">View Less</a>
        </div>
        <div class="6u">  
          <a href="<?php echo e(url('/showall')); ?>" class="btn btn-warning  text-center col-lg-2 pull-right">View All</a>
        </div>
      </div>
    </div>
  </article>
  <footer>
     <p>Do you want to suggest us?</p>
     <a href="#contact" class="btn btn-info btn-lg-3">Get in touch with me</a> 
  </footer>
</div>
<div class="wrapper wrapper-style4">
  <article id="contact">
    <header>
      <h2>Want to suggest us? Get in touch!</h2>
      <span>Thank for your feedbook. Nice everythings.</span> 
    </header>
    <!--<div class="5grid">
      <div class="row">
        <div class="12u">
          <form method="post">
            <div class="5grid">
              <div class="row">
                <div class="6u">
                  <input type="text" name="name" id="name" placeholder="Name" required>
                </div>
                <div class="6u">
                  <input type="text" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="row">
                <div class="12u">
                  <input type="text" name="subject" id="subject" placeholder="Subject" required>
                </div>
              </div>
              <div class="row">
                <div class="12u">
                  <textarea name="message" id="message" placeholder="Message" required></textarea>
                </div>
              </div>
              <div class="row">
                <div class="12u">
                  <input type="submit" class="btn btn-info btn-lg-3" value="Send Message">
                  <input type="reset" class="btn btn-default btn-lg-3" value="Clear Form">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>-->
      <div class="row row-special">
        <div class="12u">
          <h3>Find me on ...</h3>
          <ul class="social">
            <li class="facebook"><a href="#"></a></li>
            <li class="twitter"><a href="#"></a></li>
            <li class="instragram"><a href="#"></a></li>
            <!--<li class="dribbble"><a href="#">Dribbble</a></li>
            <li class="linkedin"><a href="#">LinkedIn</a></li>
            <li class="tumblr"><a href="#">Tumblr</a></li>
            <li class="googleplus"><a href="#">Google+</a></li>-->
          </ul>
        </div>
      </div>
    <footer>
      <p id="copyright"> &copy; 2018 CUSMTLA | Designed  &amp; Developed: <a href="#">Wai Phyoe Naing</a> </p>
    </footer>
  </article>
</div>
</body>
</html>