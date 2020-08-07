<?php 
include('../../../traitement/connectbdd.php');
$id=$_GET['id'];

$statut=$bdd->prepare("UPDATE formulaire SET statut = 0 WHERE id_formulaire = '$id'");
$statut->execute();

header("location: ../../developpeurWeb.php?id=$id");
?>