<?php $this->titre = "Login"; ?>

<?php include 'Vue/_Commun/barreNavigation.php'; ?>

<?php if (isset($msgErreur)) : ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Erreur !</strong> <?= $this->nettoyer($msgErreur) ?>
    </div>
<?php endif; ?>
<h2 class="text-center">Identification Admin</h2>

<div class="well">
	<form class="form-signin form-horizontal" role="form" action="connexion/connecter" method="post">
		<div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <input name="login" type="text" class="form-control" placeholder="Entrez votre login" required autofocus>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <input name="mdp" type="password" class="form-control" placeholder="Entrez votre mot de passe" required>
            </div>
        </div>
        <div class="form-group">
        	<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
        		<button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Connexion</button>
        	</div>
        </div>
	</form>
</div>