<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url("Accueil/perdrePoids"); ?>" method="post">
        <input type="number" name="poids">
        <input type="submit" value="OK">
    </form>
</body>
</html>