<?php $__env->startSection('extend'); ?>

 <h1>Hello World</h1>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>