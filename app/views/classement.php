<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Page des classements</title>
</head>

<body>
    <h1>Page des classements</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Chiffre d'affaire</th>
            <th>Taux d'atteinte (%)</th>
            <th>Classement</th>
        </tr>
        <?php
        $clasement = 1;
        foreach ($reponseClassement as $rows) {
            ?>
            <tr>
                <td><?php echo $rows['nom'] ?></td>
                <td><?php echo $rows['ca'] ?></td>
                <td><?php echo $rows['taux_atteinte'] ?></td>
                <td><?php echo $clasement ?></td>
            </tr>

            <?php
            $clasement++;
        } ?>
    </table>
</body>

</html>