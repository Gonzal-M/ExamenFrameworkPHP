

<?php $__env->startSection('contenu'); ?>

<style>
    .form_password_modification {
        /* Uniquement centrer le formulaire sur la page */
        margin: 1em auto 2em;
        width: 400px;
        /* Encadré pour voir les limites du formulaire */
        padding: 1em;
        border: 1px solid #CCC;
        border-radius: 1em;
    }

    form div+div {
        margin-top: 1em;
    }

    input {
        /* Pour s'assurer que tous les champs texte ont la même police.
     Par défaut, les textarea ont une police monospace */
        font: 1em sans-serif;

        /* Pour que tous les champs texte aient la même dimension */
        width: 365px;
        box-sizing: border-box;

        /* Pour harmoniser le look & feel des bordures des champs texte */
        border: 1px solid #999;
    }

    input:focus {
        /* Pour souligner légèrement les éléments actifs */
        border-color: #000;
    }
</style>

<form class="form_password_modification" action="/password_modification" method="post">

    <?php echo e(csrf_field()); ?>


    <h3>Modification de mot de passe</h3>

    <div class="form-group">
        <label for="InputPassword">Nouveau Mot de passe</label>
        <input type="password" name="password" placeholder="Mot de passe" id="InputPassword">
        <?php if($errors->has('password')): ?>
        <small id="emailHelp" class="form-text text-muted"><?php echo e($errors->first('password')); ?></small>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="InputConfirmationPassword">Confirmation mot de passe</label>
        <input type="password" name="password_confirmation" placeholder="Confirmation mot de passe" id="InputConfirmationPassword">
        <?php if($errors->has('password_modification')): ?>
        <small id="emailHelp" class="form-text text-muted"><?php echo e($errors->first('password_modification')); ?></small>
        <?php endif; ?>
    </div>

    <div>
        <input type="submit" value="Valider">
    </div>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Ynov\B2\PHP\ExamenFrameworkPHP\resources\views/password_modification.blade.php ENDPATH**/ ?>