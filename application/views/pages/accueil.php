<?php
    echo $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welcome
    <p>
        <a href="<?php echo site_url(""); ?>"><button>Choisir un objectif</button></a>
    </p>
    <p>
        <a href="<?php echo site_url("Accueil/ajouterArgentView"); ?>"><button>Ajouter de l'argent</button></a>
    </p>
</body>
</html>