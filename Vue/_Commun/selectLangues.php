<!--Langues selecter-->
<div class="selectLangues">
    <select class="selectpicker" name="idLan">
    	<option value="0">TOUS</option>
        <?php foreach ($langues as $langue): ?>
            <option value="<?= $this->nettoyer($langue['id']) ?>"><?= $this->nettoyer($langue['nom']) ?></option>
        <?php endforeach; ?>
    </select>
</div>
