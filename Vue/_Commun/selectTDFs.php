<!--Types de fichier selecter-->
<div class="selectTDFs">
    <select class="selectpicker" name="idTDF">
    	<option value="0">TOUS</option>
        <?php foreach ($TDFs as $TDF): ?>
            <option value="<?= $this->nettoyer($TDF['id']) ?>"><?= $this->nettoyer($TDF['nom']) ?></option>
        <?php endforeach; ?>
    </select>
</div>
