<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="code">Entrer un code</label>
        <input type="number" name="code">
        <input type="submit" value="Entrer">
    </form>
    <table border="1">
        <tr>
            <th>Code</th>
            <th>Tarif</th>
            <th>Utilisable</th>
        </tr>
        <?php foreach($donnees as $row) { ?>
            <tr>
                <td><?php echo $row->code; ?></td>
                <td><?php echo $row->tarif; ?></td>
                <td><?php echo $row->utilisable; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>