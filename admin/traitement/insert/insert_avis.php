<?php 
include('../../../traitement/connectbdd.php');
$id_form=$_GET['id_form'];
$id_candidat=$_GET['id_candidat'];
session_start();
$pseudo = $_SESSION['pseudo'];
$statut = $_SESSION['statut'];
$id_admin = $_SESSION['id_admin'];

$note = !empty($_POST['note']) ? $_POST['note'] : NULL;
$avis = !empty($_POST['avis']) ? $_POST['avis'] : NULL;

$notes=$bdd->prepare("INSERT INTO avis_admin(avis, note, id_admin, id_candidat, id_formulaire)
                    VALUE(:avis, :note, :id_admin, :id_candidat, :id_formulaire)");
$notes->execute(array(
    'avis' => $avis,
    'note' => $note,
    'id_admin' => $id_admin,
    'id_candidat' => $id_candidat,
    'id_formulaire' => $id_form
));

header("location: ../../developpeurWebphase2.php?id=$id_form");