<!--Chercheurs selecter-->
<div class="selectChercheurs">
    <select class="selectpicker" name="idChr">
   		<option value="0">TOUS</option>
        <?php foreach ($chercheurs as $chercheur): ?>
            <option value="<?= $this->nettoyer($chercheur['id']) ?>"><?= $this->nettoyer($chercheur['prenom']) ?> <?= $this->nettoyer($chercheur['nom']) ?></option>                             
        <?php endforeach; ?>
    </select>
</div>
