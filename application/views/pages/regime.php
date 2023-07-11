<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regime</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>aliment</th>
            <th>frequence par semaine</th>
            <th>duree</th>
        </tr>
        <?php foreach($regime as $row) { ?>
            <tr>
                <td><?php echo $row->nom; ?></td>
                <td><?php echo $row->frequence_semaine; ?></td>
                <td><?php echo $row->duree_semaine; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>