<?php $this->titre = "Administration"; ?>

<?php require 'Vue/_Commun/barreNavigation.php'; ?>

<div class="well">
    <h2 class="text-center">Ajouter un admin</h2>
    <form class="form-signin form-horizontal" role="form" action="adminadmin/ajouter" method="post">
        <div class="form-group">
            <label class="col-sm-4 col-md-4 control-label">Login:</label>
            <div class="col-sm-6 col-md-4">
                <input name="login" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-4 control-label">Mot de passe:</label>
            <div class="col-sm-6 col-md-4">
                <input name="mdp" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-default btn-primary"> Ajouter</button>
            </div>
        </div>
    </form>
</div>