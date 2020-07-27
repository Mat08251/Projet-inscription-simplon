<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plus d'infos</title>
</head>
<body>
    <?php

    $affiche=$bdd->prepare('SELECT * FROM candidat');
    $affiche->execute();

    $data=$affiche->fetch();

    ?>

    <h1><?= $data['nom'];?></h1>
</body>
</html>