

<?php $__env->startSection('contenu'); ?>

<h1>Nouvelle publication</h1><br>

<form action="/newpost" method="post" enctype="multipart/form-data" style="margin-left:10px;">
    <?php echo e(csrf_field()); ?>


    <div class="row">
        <label class="col-1">Titre :</label>
        <input type="string" name="posttitle" placeholder="Titre de votre publication...">
    </div><br>

    <div class="row">
        <label class="col-1">Contenu :</label>
        <textarea cols="100" rows="5" name="postcontent" placeholder="Contenu de votre publication..."></textarea>
    </div><br>

    <div class="row">
        <label class="col-1">Photo :</label>
        <input type="file" name="postpic" class="form-control-file col">
    </div><br><br>


    <div>
        <input type="submit" value="Publier" class="btn btn-info">
    </div>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Clawc\Documents\B2-informatique\FrameworkPHP\ExamenFrameworkPHP_GonzalezMarie_B2A\resources\views/Posts/newpost.blade.php ENDPATH**/ ?>