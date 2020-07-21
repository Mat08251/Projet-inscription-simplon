<?php
require('connectbdd.php');

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
$tel = !empty($_POST['tel']) ? $_POST['tel'] : NULL;
$mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;
date_default_timezone_set('Europe/Paris');
$time = date("H:i:s");

$insc_user = $bdd->prepare("INSERT INTO candidat (nom, prenom, nomJeuneFille, dateNaissance, sexe, rue, numeroRue, complementAdresse, ville, codePostal, telFixe, mobile, mail, last_log) 
                            VALUES (:nom, :prenom, :nomJeuneFille, :dateNaissance, :sexe, :rue, :numeroRue, :complementAdresse, :ville, :codePostal, :telFixe, :mobile, :mail, :last_log)");

$sql->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'nomJeuneFille' => $nom_jeune_fille,
    'dateNaissance' => $date_de_naissance,
    'sexe' => $sexe,
    'rue' => $adresse,
    'numerotRue' => $ligne2,
    'complementAdresse' => $ligne,
    'ville' => $ville,
    'codePostal' => $code_postal,
    'telFixe' => $telephone,
    'mobile' => $tel,
    'mail' => $mail,
    'last_log' => $time
));
?>