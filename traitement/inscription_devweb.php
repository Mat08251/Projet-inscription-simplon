<?php
require('connectbdd.php');
session_start();
$id_form=$_GET['id_form'];

$nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : NULL;
$nom_jeune_fille = !empty($_POST['nom_jeune_fille']) ? $_POST['nom_jeune_fille'] : NULL;
$date_de_naissance = !empty($_POST['date_de_naissance']) ? $_POST['date_de_naissance'] : NULL;
$nationalite = !empty($_POST['nationalite']) ? $_POST['nationalite'] : NULL;
$sexe = !empty($_POST['sexe']) ? $_POST['sexe'] : NULL;
$adresse = !empty($_POST['adresse']) ? $_POST['adresse'] : NULL;
$ligne2 = !empty($_POST['ligne2']) ? $_POST['ligne2'] : NULL;
$ligne = !empty($_POST['ligne']) ? $_POST['ligne'] : NULL;
$pays = !empty($_POST['pays']) ? $_POST['pays'] : NULL;
$code_postal = !empty($_POST['code_postal']) ? $_POST['code_postal'] : NULL;
$ville = !empty($_POST['ville']) ? $_POST['ville'] : NULL;
$telephone = !empty($_POST['telephone']) ? $_POST['telephone'] : NULL;
$tel = !empty($_POST['mobile']) ? $_POST['mobile'] : NULL;
$mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;
date_default_timezone_set('Europe/Paris');
$time = date("d M Y H:i:s");
$id_candidat = $_SESSION['id_candidat'];


$insc_user = $bdd->prepare("UPDATE candidat SET nom = :nom, prenom = :prenom, nomJeuneFille = :nomJeuneFille, dateNaissance = :dateNaissance,
                                        sexe = :sexe, rue = :rue, numeroRue = :numeroRue, complementAdresse = :complementAdresse, ville = :ville,
                                        codePostal = :codePostal, telFixe = :telFixe, mobile = :mobile, mail = :mail, last_log = :last_log, pays = :pays, nationalite = :nationalite,
                                        id_formulaire = :id_formulaire WHERE id_candidat = $id_candidat");

$insc_user->execute(array(
    ':nom' => $nom,
    ':prenom' => $prenom,
    ':nomJeuneFille' => $nom_jeune_fille,
    ':dateNaissance' => $date_de_naissance,
    ':sexe' => $sexe,
    ':rue' => $adresse,
    ':numeroRue' => $ligne2,
    ':complementAdresse' => $ligne,
    ':ville' => $ville,
    ':codePostal' => $code_postal,
    ':telFixe' => $telephone,
    ':mobile' => $tel,
    ':mail' => $mail,
    ':pays' => $pays,
    'nationalite' => $nationalite,
    ':last_log' => $time,
    'id_formulaire' => $id_form
));

header("location: ../php/page2-formulaire.php?id_form=$id_form");
?>