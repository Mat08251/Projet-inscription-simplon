<?php
require('connectbdd.php');
session_start();

$pseudo = !empty($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
$mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;
$mdp = !empty($_POST['mdp']) ? $_POST['mdp'] : NULL;
$mdp2 = !empty($_POST['mdp2']) ? $_POST['mdp2'] : NULL;
date_default_timezone_set('Europe/Paris');
$time = date("d M Y H:i:s");
$objetinscrip = utf8_decode("Confirmation d'inscription");
$messageinscrip = utf8_decode("Bonjour l'équipe $pseudo, votre inscription est bien prise en compte. A très bientôt !");

$pseudoexist = $bdd->prepare("SELECT pseudo FROM candidat WHERE pseudo = '$pseudo'");
$pseudoexist->execute();
$count = $pseudoexist->rowCount();
if($count==0) {

    $mailexist = $bdd->prepare("SELECT mail FROM candidat WHERE mail = '$mail'");
    $mailexist->execute();
    $count2 = $mailexist->rowCount();
    if($count2==0) {
    if($mdp == $mdp2){
    $insc_user = $bdd->prepare("INSERT INTO candidat (pseudo, mail, mdp, last_log) 
                                VALUES (:pseudo, :mail, :mdp, :last_log)");

    $insc_user->execute(array(
        'pseudo' => $pseudo,
        'mail' => $mail,
        'mdp' => $mdp,
        'last_log' => $time
    ));
    $thisusers = $bdd->prepare("SELECT id_candidat FROM candidat WHERE pseudo='$pseudo'");
    $thisusers->execute();
    while($data = $thisusers->fetch()) {
        $id_candidat = $data['id_candidat'];
    };
    $id_users = $bdd->prepare("INSERT INTO formulaire (id_candidat) VALUE (:id_candidat)");

    $id_users->execute(array(
        'id_candidat' => $id_candidat
    ));
    
    mail($mail, $objetinscrip, $messageinscrip);

    $_SESSION['mail'] = $mail;
    $_SESSION['pseudo'] = $pseudo;
    $_SESSION['id_candidat'] = $id_candidat;

    header('location: ../index.php?success=1');
    }else{
    header('location: ../php/inscription.php?alert=1');
    }

    }else{
        header('location: ../php/inscription.php?alert=3');
    }
}
else{
    header('location: ../php/inscription.php?alert=2');
}