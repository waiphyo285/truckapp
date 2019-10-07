<?php $__env->startSection('extend'); ?>

 <h3>Hello Launch !</h3>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>