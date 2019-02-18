<!doctype html>
<head>
    <meta charset="UTF-8" />
    <html lang="fr">

        <?php 
    // Ajout des scripts externes  ?>
        <script type="text/javascript" src="../RESSOURCES/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="../RESSOURCES/jquery-ui-1.11.2.custom/jquery-ui.js"></script>
        <link rel="stylesheet" style="text/css" href="../RESSOURCES/jquery-ui-1.11.2.custom/jquery-ui.min.css" />
</head>

<body>
    <?php
    // Inclusion des fonctions
    include('./php/fonctions/function_lireRep.php');

    // Appel des fonctions
    function_lireRep('./', '.phpe');
    ?>
</body>
</html>