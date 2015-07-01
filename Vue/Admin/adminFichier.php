<div class="tab-pane fade" id="Fichier">
    <h2 class="text-center">Uploader un fichier</h2>
    <form class="form-signin form-horizontal" role="form" action="connexion/connecter" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-sm-4 col-md-4 control-label">Titre:</label>
            <div class="col-sm-6 col-md-4">
                <input name="titre" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-4 control-label">Chercheur:</label>
            <div class="col-sm-6 col-md-4">
                <?php include 'Vue/_Commun/selectChercheurs.php'; ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-4 control-label">Langue:</label>
            <div class="col-sm-6 col-md-4">
                <?php require 'Vue/_Commun/selectLangues.php'; ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-4 control-label">Format:</label>
            <div class="col-sm-6 col-md-4">
                <?php require 'Vue/_Commun/selectTDFs.php'; ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-4 control-label">Fichier:</label>
            <div class="col-sm-6 col-md-4">
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-default btn-primary"> Uploader</button>
            </div>
        </div>
    </form>
</div>
