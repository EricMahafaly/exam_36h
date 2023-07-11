<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="<?php echo site_url("Form/inscriptionController"); ?>" method="post">
        <p>
            <input type="text" name="nom" placeholder="Nom" required>
        </p>
        <p>
            <input type="text" name="prenom" placeholder="Prenom" required>
        </p>
        <p>
            <input type="email" name="email" placeholder="mel" required>
        </p>
        <p>
            <input type="password" name="pwd" placeholder="mots de passe" required>
        </p>
        <p>
            <input type="date" name="date_naissance" placeholder="Date de naissance" required>
        </p>
        <p>
            <select name="genre">
                <option value="1">Male</option>
                <option value="0">Femelle</option>
            </select>
        </p>
        <p>
            <input type="number" name="taille" step="0.01" placeholder="Taille">
        </p>
        <p>
            <input type="number" name="poids" step="0.01" placeholder="Poids">
        </p>
        <p>
            <input type="submit" value="Valider">
        </p>
    </form>
    
</body>
</html>