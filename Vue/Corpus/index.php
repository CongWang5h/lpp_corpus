<?php $this->titre = "Corpus"; ?>

<?php include 'Vue/_Commun/barreNavigation.php'; ?>
<?php include 'Vue/_Commun/barreRechercher.php'; ?>

<table class="table table-striped">
    <thead>
      	<tr>
        	<th>Corpus</th>
        	<th>Langues</th>
        	<th>Chercheurs</th>
        	<th>Types d'enregistrement</th>
        	<th>Jouer</th>
      	</tr>
    </thead>
    <tbody>
    	<?php foreach ($fichiers as $fichier): ?>
	      	<tr>
	        	<td><?= $this->nettoyer($fichier['titre']) ?></td>
	        	<td><?= $this->nettoyer($fichier['lan']) ?></td>
	        	<td><?= $this->nettoyer($fichier['chr_prenom']) ?> <?= $this->nettoyer($fichier['chr_nom']) ?></td>
	        	<td>
					<a href="Fichier/Uploads/<?= $this->nettoyer($fichier['fichier']) ?>">
	        			<?= $this->nettoyer($fichier['tdf']) ?>
	        		</a>
	        	</td>
	        	<td>
	        		<a href="description/index/<?= $this->nettoyer($fichier['id']) ?>">
	        			<span class="glyphicon glyphicon-play"></span>
	        		</a>
	        	</td>
	      	</tr>
      	<?php endforeach; ?>
    </tbody>
</table>
