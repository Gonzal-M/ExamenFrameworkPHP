

<?php $__env->startSection('contenu'); ?>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h1>Bonjour <?php echo e($user->name); ?> </h1>
<p>Voici votre adresse mail de connexion : <a href="<?php echo e(route('Show.User', ['id' => $user->id])); ?>"><?php echo e($user->email); ?></a></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Ynov\B2\PHP\ExamenFrameworkPHP\resources\views/users/index.blade.php ENDPATH**/ ?>