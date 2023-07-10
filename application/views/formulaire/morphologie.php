<?php
    echo $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter morphologie</title>
</head>
<body>
    <form action="<?php echo site_url("Form/insertMorphologie"); ?>" method="post">
        <p>
            <select name="genre" id="">
                <option value="1">male</option>
                <option value="0">femelle</option>
            </select>
        </p>
        <p>
            <label for="taille">taille : </label>
            <input type="number" name="taille" step="any" required>
        </p>
        <p>
            <label for="poids">poids : </label>
            <input type="number" name="poids" step="any" required>
        </p>
        <p>
            <input type="submit" value="Valider">
        </p>
    </form>
</body>
</html>