<?php

    // On va chercher les connections de la bdd sur connect_local.php dans le dossier include :
    //   include ('../include/connect_local.php');
        include ('../include/connect_bdd.php');

    // On vérifie que les «inputs» ne soient pas vides avant d’enregistrer dans la bdd :
        $nom_candidat = !empty($_POST['nom_candidat']) ? $_POST['nom_candidat'] : NULL;
        $prenom_candidat = !empty($_POST['prenom_candidat']) ? $_POST['prenom_candidat'] : NULL;
        $nom_jeune_fille = !empty($_POST['nom_jeune_fille']) ? $_POST['nom_jeune_fille'] : NULL;
        $date_naissance = !empty($_POST['date_naissance']) ? $_POST['date_naissance'] : NULL;
        $sexe_candidat = !empty($_POST['sexe_candidat']) ? $_POST['sexe_candidat'] : NULL;
        $adresse_candidat = !empty($_POST['adresse_candidat']) ? $_POST['adresse_candidat'] : NULL;
        $adresse1_candidat = !empty($_POST['adresse1_candidat']) ? $_POST['adresse1_candidat'] : NULL;
        $adresse2_candidat = !empty($_POST['adresse2_candidat']) ? $_POST['adresse2_candidat'] : NULL;
        $code_postal = !empty($_POST['code_postal']) ? $_POST['code_postal'] : NULL;
        $ville_candidat = !empty($_POST['ville_candidat']) ? $_POST['ville_candidat'] : NULL;
        $tel_domicile = !empty($_POST['tel_domicile']) ? $_POST['tel_domicile'] : NULL;
        $mobile = !empty($_POST['mobile']) ? $_POST['mobile'] : NULL;
        $mail_candidat = !empty($_POST['mail_candidat']) ? $_POST['mail_candidat'] : NULL;
        $mdp_candidat = !empty($_POST['mdp_candidat']) ? $_POST['mdp_candidat'] : NULL;
        $id_nationalite = !empty($_POST['id_nationalite']) ? $_POST['id_nationalite'] : NULL;
        $id_pays = !empty($_POST['id_pays']) ? $_POST['id_pays'] : NULL;

    // On prépare la requête dans une variable «$sql»: 
        $sql = $bdd->prepare ("INSERT INTO candidat (
            nom_candidat, prenom_candidat, nom_jeune_fille, date_naissance, sexe_candidat, adresse_candidat, adresse1_candidat, adresse2_candidat, code_postal, ville_candidat, tel_domicile, mobile, mail_candidat, mdp_candidat, id_nationalite, id_pays)
        VALUES ( :nom_candidat, :prenom_candidat, :nom_jeune_fille, :date_naissance, :sexe_candidat, :adresse_candidat, :adresse1_candidat, :adresse2_candidat, :code_postal, :ville_candidat, :tel_domicile, :mobile, :mail_candidat, :mdp_candidat, :id_nationalite, :id_pays)");

    // On éxecute la requête «$sql»:
        $sql->execute(array(
        'nom_candidat' => $nom_candidat,   
        'prenom_candidat' => $prenom_candidat,
        'nom_jeune_fille' => $nom_jeune_fille,
        'date_naissance' => $date_naissance,
        'sexe_candidat' => $sexe_candidat,
        'adresse_candidat' => $adresse_candidat,
        'adresse1_candidat' => $adresse1_candidat,
        'adresse2_candidat' => $adresse2_candidat,
        'code_postal' => $code_postal,
        'ville_candidat' => $ville_candidat,
        'tel_domicile' => $tel_domicile,
        'mobile' => $mobile,
        'mail_candidat' => $mail_candidat,
        'mdp_candidat' => $mdp_candidat,
        'id_nationalite' => $id_nationalite,
        'id_pays' => $id_pays));
    
    // On vide la requête «$sql» :
        $sql-> closeCursor();

    // On revient sur la page index.php :
        header('location:../index.php');
    ?>  