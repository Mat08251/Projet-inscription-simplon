<?php 
require('connectbdd.php');
session_start();

$mail = $_POST['mail'];
$mdp = $_POST['mdp'];

$connexion = $bdd->prepare("SELECT mail, mdp, pseudo, id_candidat FROM candidat WHERE mail = :mail AND mdp = :mdp");
$connexion->execute(array(
    'mail' => $mail,
    'mdp' => $mdp
));

$resultat = $connexion->fetch();
$nbresultats = $connexion->rowCount();

if ($nbresultats == 1) {

    $_SESSION['mail'] = $resultat['mail'];
    $_SESSION['pseudo'] = $resultat['pseudo'];
    $_SESSION['id_candidat'] = $resultat['id_candidat'];

    header('location: ../index.php');
} else {
    header('location: ../index.php?success=1');
}

?>