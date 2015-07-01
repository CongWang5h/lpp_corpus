<?php $this->titre = "Description"; ?>

<?php include 'Vue/_Commun/barreNavigation.php'; ?>

<h2 class="text-center"><?= $this->nettoyer($fic['titre']) ?></h2>
<h3>Description</h3>
<p><?= $this->nettoyer($fic['description']) ?></p>
<h3>Localisation</h3>
<p><?= $this->nettoyer($fic['localisation']) ?></p>
<h3>Extrait</h3>
<?php
	function endsWith($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
}
?>
<?php if(endsWith($this->nettoyer($fic['fic_ext']),".wav")): ?>
	<audio controls>
  		<source src="Fichier/Extraits/<?= $this->nettoyer($fic['fic_ext']) ?>">
	</audio>
<?php elseif(endsWith($this->nettoyer($fic['fic_ext']),".mp4")): ?>
	<video width="640" height="480" controls>
  		<source src="Fichier/Extraits/<?= $this->nettoyer($fic['fic_ext']) ?>">
	</video>
<?php endif?>