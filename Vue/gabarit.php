<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <base href="<?= $racineWeb ?>" >

        <!-- Feuilles de style -->
        <link rel="stylesheet" href="Librairies/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="Librairies/bs-select/css/bootstrap-select.css">
        <link rel="stylesheet" href="Contenu/style.css">

        <!-- Favicon -->
        <link rel="shortcut icon" href="Contenu/Images/logoLPP.gif">

        <!-- Titre -->
        <title>LPP - <?= $titre ?></title>
    </head>
    <body>
        <div class="container">
            <?= $contenu ?>
            
            <!--
            <footer class="well well-sm">
                <p class="text-center"></p>
            </footer>
            -->
        </div>
        
        <!-- jQuery -->
        <script src="Librairies/jquery/jquery-1.10.1.min.js"></script>
        <!-- Plugin JavaScript Boostrap -->
        <script src="Librairies/bootstrap/js/bootstrap.min.js"></script>
        <script src="Librairies/bs-select/js/bootstrap-select.js"></script>
    </body>
</html>
