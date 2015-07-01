<?php $this->titre = "Administration"; ?>

<?php require 'Vue/_Commun/barreNavigation.php'; ?>

<div class="well">
    <h2 class="text-center">Ajouter une langue</h2>
    <form class="form-signin form-horizontal" role="form" action="adminlangue/ajouter" method="post">
        <div class="form-group">
            <label class="col-sm-4 col-md-4 control-label">Langue: </label>
            <div class="col-sm-6 col-md-4">
                <input name="nom" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-default btn-primary"> Ajouter</button>
            </div>
        </div>
    </form>
    <h2 class="text-center">Supprimer une langue</h2>
    <form class="form-signin form-horizontal" role="form" action="adminlangue/supprimer" method="post">
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <?php require 'Vue/_Commun/selectLangues.php'; ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-default btn-primary"> Supprimer</button>
            </div>
        </div>
    </form>
</div>