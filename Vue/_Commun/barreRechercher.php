<div id="barreRechercher"class="row">
	<form class="form-group" action="rechercher/" method="post">
		<div class="col-md-2">
			<p>Mots clés</p>
			<input name="motCle" type="text" class="form-control">
		</div>
		<div class="col-md-3">
			<p>Chercheur</p>
			<?php require 'Vue/_Commun/selectChercheurs.php'; ?>
		</div>
		<div class="col-md-3">
			<p>Langue</p>
			<?php require 'Vue/_Commun/selectLangues.php'; ?>
		</div>
		<div class="col-md-3">
			<p>Type d'enregistrement</p>
			<?php require 'Vue/_Commun/selectTDFs.php'; ?>
		</div>
		<div class="col-md-1">
			<br/>
			<button type="submit" class="btn btn-info">
      			<span class="glyphicon glyphicon-search"></span> Rechercher
    		</button>
		</div>
	</form>
</div>
