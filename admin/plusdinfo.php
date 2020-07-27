<?php
include('../traitement/connectbdd.php');
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plus d'infos</title>
</head>
<body>
    <?php

    $id_candidat = $_GET['id'];

    $affiche=$bdd->prepare("SELECT * FROM candidat WHERE id_candidat = '$id_candidat'");
    $affiche->execute();

    $data=$affiche->fetch();

    ?>

    <h1><?= $data['nom'];?></h1>
</body>
</html>