<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Kilo minimun</th>
            <th>Kilo max</th>
            <th>Aliment a manger</th>
            <th>Frequence par semaine</th>
            <th>Duree par semaine</th>
        </tr>
        <?php foreach($donneesPerdre as $row) { ?>
            <tr>
                <td><?php echo $row->id_regime_perdre; ?></td>
                <td><?php echo $row->kilo_perdre_min; ?></td>
                <td><?php echo $row->nom; ?></td>
                <td><?php echo $row->frequence_semaine; ?></td>
                <td><?php echo $row->duree_semaine; ?></td>
                <td><a href=""><button>supprimer</button></a></td>
                <td><a href=""><button>Modifier</button></a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>