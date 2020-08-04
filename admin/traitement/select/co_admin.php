<?php 
require('../../../traitement/connectbdd.php');
session_start();

$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];

$connexion = $bdd->prepare("SELECT pseudo, mdp, statut, id_admin FROM administrateurs WHERE pseudo = :pseudo AND mdp = :mdp");
$connexion->execute(array(
    'pseudo' => $pseudo,
    'mdp' => $mdp
));

$resultat = $connexion->fetch();
$nbresultats = $connexion->rowCount();

if ($nbresultats == 1) {

    $_SESSION['pseudo'] = $resultat['pseudo'];
    $_SESSION['statut'] = $resultat['statut'];
    $_SESSION['id_admin'] = $resultat['id_admin'];

    header('location: ../../admin.php');
} else {
    header('location: ../../index.php?alert=1');
}

?>