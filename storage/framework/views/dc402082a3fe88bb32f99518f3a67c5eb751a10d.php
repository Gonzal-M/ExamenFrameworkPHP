

<?php $__env->startSection('contenu'); ?>

<p>Nombre de membres</p>

<p>Nombre de ventes</p>
<p>Nombre de nouvelles ventes sur les 7 derniers jours</p>

<p>Les revenus du site totaux</p>
<p>Les revenus du site sur les 7 derniers jours</p>

<p>Achat de jeux récents</p>
<p>Factures</p>

<form method="POST" action="" enctype='multipart/form-data'>

    <div class="form-group">
        <label for="nom">Nom jeu</label>
        <input type="texte" class="form-control" id="nom" name="nom">
    </div>

    <div class="resume-item d-flex flex-column  ">
        <label for="date_sortie">Date de sortie</label>
        <textarea type="date" rows="1" class="form-control" id="date_sortie" name="date_sortie"></textarea>
    </div>

    <div class="resume-item d-flex flex-column  ">
        <label for="description">Description</label>
        <textarea rows="2" class="form-control" id="description" name="description"></textarea>
    </div>

    <div class="form-group">
        <label for="quantité">Quantité</label>
        <textarea rows="1" class="form-control" id="quantité" name="quantité"></textarea>
    </div>

    <div class="form-group">
        <label for="catégorie">Catégorie</label>
        <textarea rows="1" class="form-control" id="catégorie" name="catégorie"></textarea>
    </div>

    <div class="form-group">
        <label for="prix">Prix</label>
        <textarea rows="1" class="form-control" id="prix" name="prix"></textarea>
    </div>

    <div class="form-group">
        <label for="plateformes">Plateformes</label>
        <textarea rows="1" class="form-control" id="plateformes" name="plateformes"></textarea>
    </div>

    <div class="form-group">
        <label for="note">Notes</label>
        <textarea rows="1" class="form-control" id="note" name="note"></textarea>
    </div>

    <div class="ml-2 col-sm-6">
        <div id="msg"></div>
        <form method="post" id="image-form">
            <input type="file" name="img[]" class="file" accept="image/*">
        </form>
    </div>
    <br>

    <button type="submit" class="btn btn-primary">Enregistrer</button>

</form>

<script>
    $(document).ready(function() {
        $('input[type="file"]').on("change", function() {
            let filenames = [];
            let files = document.getElementById("customFile").files;
            if (files.length > 1) {
                filenames.push("Total Files (" + files.length + ")");
            } else {
                for (let i in files) {
                    if (files.hasOwnProperty(i)) {
                        filenames.push(files[i].name);
                    }
                }
            }
            $(this)
                .next(".custom-file-label")
                .html(filenames.join(","));
        });
    });
</script>

<br><br>
<p>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
<br>

<form method="POST" action="" enctype='multipart/form-data'>

    <div class="form-group">
        <label for="prenom">Prenom</label>
        <input type="texte" class="form-control" id="prenom" name="prenom">
    </div>

    <div class="resume-item d-flex flex-column  ">
        <label for="nom">Nom</label>
        <textarea rows="1" class="form-control" id="nom" name="nom"></textarea>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="texte" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
        <label for="dtn">Date de naissance</label>
        <textarea rows="1" class="form-control" id="dtn" name="dtn"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Ynov\B2\PHP\ExamenFrameworkPHP\resources\views/dashboard.blade.php ENDPATH**/ ?>