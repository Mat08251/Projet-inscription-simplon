<?php 
include('../../../traitement/connectbdd.php');

$statut=$bdd->prepare("UPDATE formulaire SET statut = 1 WHERE id_formulaire = 5");
$statut->execute();

header('location: ../../developpeurWeb.php?id=5');
?>