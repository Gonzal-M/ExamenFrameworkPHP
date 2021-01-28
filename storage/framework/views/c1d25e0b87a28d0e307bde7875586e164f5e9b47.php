

<?php $__env->startSection('contenu'); ?>

<<<<<<< HEAD
<h1>boop</h1>
=======
<h1>Vos publications</h1><br>

<a href="/newpost" class="btn btn-info">Nouvelle publication</a>

<ul><br>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="row">

    <div class="col">
        <img src="<?php echo e($post->postpic); ?>" alt="Photo de la publication n°<?php echo e($post->id); ?>" style="max-width:200px; max-height:200px;">
    </div>
    <div class="col">
        <h3><?php echo e($post->posttitle); ?></h3>
        <p><?php echo e($post->postcontent); ?></p><br>
        <p style="color:grey;">Publié le <?php echo e($post->created_at); ?></p>
        <a href="/modpost?post_id=<?php echo e($post->id); ?>" class="btn btn-info">Modifier</a>
        <form action="/posts" method="post">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="del_id" value="<?php echo e($post->id); ?>">
            <input type="submit" value="Supprimer" class="btn btn-danger">
        </form>
    </div>

</li><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
>>>>>>> 4576ad6cae8c8646824d680c92866dd04803090b

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Clawc\Documents\B2-informatique\FrameworkPHP\ExamenFrameworkPHP_GonzalezMarie_B2A\resources\views/Posts/posts.blade.php ENDPATH**/ ?>