

<?php $__env->startSection('contenu'); ?>

<style>
    .form_connexion {
        /* Uniquement centrer le formulaire sur la page */
        margin: 1em auto 2em;
        width: 400px;
        /* Encadré pour voir les limites du formulaire */
        padding: 1em;
        border: 1px solid #ccc;
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

<form class="form_connexion" action="/connexion" method="post" class="mt-3 mb-3">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
        <label for="InputEmail">Email address</label>
        <input type="email" class="form-control" id="InputEmail" name="email" value="<?php echo e(old('email')); ?>" aria-describedby="emailHelp">
        <?php if($errors->has('email')): ?>
        <small id="emailHelp" class="form-text text-muted"><?php echo e($errors->first('email')); ?></small>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="InputPassword">Password</label>
        <input type="password" class="form-control" id="InputPassword" name="password" label="password">
        <?php if($errors->has('password')): ?>
        <small id="emailHelp" class="form-text text-muted"><?php echo e($errors->first('password')); ?></small>
        <?php endif; ?>
    </div>
    <button type="submit" class="btn btn-primary">Log in</button>
</form>
<br>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Ynov\B2\PHP\ExamenFrameworkPHP\resources\views/connexion.blade.php ENDPATH**/ ?>