

<?php $__env->startSection('contenu'); ?>

<?php $post = DB::table('posts')->find($_GET["post_id"]); ?>

<h1>Modification de la publication "<?php echo e($post->posttitle); ?>"</h1><br>

<form action="/modpost" method="post" enctype="multipart/form-data" style="margin-left:10px;">
    <?php echo e(csrf_field()); ?>


    <div class="row">
        <label class="col-1">Titre :</label>
        <input type="string" name="posttitle" value="<?php echo e($post->posttitle); ?>">
    </div><br>

    <div class="row">
        <label class="col-1">Contenu :</label>
        <textarea cols="100" rows="5" name="postcontent"><?php echo e($post->postcontent); ?></textarea>
    </div><br>

    <div class="row">
        <div class="col">
            <img src="<?php echo e($post->postpic); ?>" alt="Photo de la publication" style="max-width:200px; max-height:200px;">
        </div>
        <div class="col">
            <label>Photo :</label>
            <input type="file" name="postpic" class="form-control-file">
        </div>
    </div><br><br>



    <div>
        <input type="hidden" name="mod_id" value="<?php echo e($post->id); ?>">
        <input type="submit" value="Modifier" class="btn btn-info">
    </div>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Clawc\Documents\B2-informatique\FrameworkPHP\ExamenFrameworkPHP_GonzalezMarie_B2A\resources\views/Posts/modpost.blade.php ENDPATH**/ ?>