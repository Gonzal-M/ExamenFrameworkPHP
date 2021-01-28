

<?php $__env->startSection('contenu'); ?>
<h1>Welcome <?php echo e($user->name); ?></h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Ynov\B2\PHP\ExamenFrameworkPHP\resources\views/dashboard.blade.php ENDPATH**/ ?>