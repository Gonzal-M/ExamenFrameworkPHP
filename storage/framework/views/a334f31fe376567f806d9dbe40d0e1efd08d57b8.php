<header class="page-header">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <h1><a href="/" class="no-link-style">Examen PHP</a></h1>
            </div>
        </div>
        <form class="form-inline">
            <?php if(!auth()->check()): ?>
            <ul>
                <a href="<?php echo e(url('/inscription')); ?>" class="btn btn-info">Inscription</a>

                <a href="<?php echo e(url('/connexion')); ?>" class="btn btn-info">Connexion</a>

                <a href="<?php echo e(url('/users')); ?>" class="btn btn-info">Utilisateurs</a>

            </ul>

            <?php else: ?>

            <ul>
                <a href="" class="btn btn-info">Profil</a>

                <a href="<?php echo e(url('/password_modification')); ?>" class="btn btn-info">Modification Mot de Passe</a>

                <a href="<?php echo e(url('/signout')); ?>" class="btn btn-info">Déconnexion</a>

            </ul>
            <?php endif; ?>
        </form>
    </nav>

</header><?php /**PATH D:\Ynov\B2\PHP\ExamenFrameworkPHP\resources\views/header.blade.php ENDPATH**/ ?>