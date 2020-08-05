<?php 
include('../traitement/connectbdd.php');
$id=$_GET['id'];
session_start();
$pseudo = $_SESSION['pseudo'];
$statut = $_SESSION['statut'];
$id_admin = $_SESSION['id_admin'];?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/developpeurWeb.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
    <title>Partie Administrateur Developpeur Web</title>
</head>
<body>
  <!--début bloc navbar-->
<div class="fond">
    <img class="logo" src="../images/logo-simplon_23.png"><h1 class="text-center font-weight-bold font-italic text-black-50 mt-4 mb-5">Bienvenue dans votre interface Administrateur</br>
    Developpeur Web</h1>
        <center><a href="../index.php" class="text-black-50 mb-5">Revenir à l'accueil</a></center>
        <center><a href="admin.php" class="text-black-50 mt-5 mb-5">Accès à l'accueil admin</a></center>
        <center><a href="traitement/deco_admin.php"><button type="button" class="boutonPhase1 btn btn-outline-info">Deconnexion</button></a></center>
        
        <div class=" mt-2">
          <div class="bouton-phase">
            <h3 class=" mt-4 mb-5"><center>Liste des apprenants</center></h3>
            <a href="developpeurWeb.php?id=<?=$id?>"><button type="button" class="boutonPhase btn btn-outline-info">Phase1</button></a>
            <a href="developpeurWebPhase3.php?id=<?=$id?>"><button type="button" class="boutonPhase btn btn-outline-info">Phase3</button></a>
          </div>
          </div>
  <!--fin bloc navbar-->

  <!--info tableau-->
    <div class="info-forma container-fluid mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th class="entete-table text-center" scope="col">Nom de l'apprenant</th>
          <th class="entete-table text-center" scope="col">Prenom de l'apprenant</th>
          <th class="entete-table text-center" scope="col">Âge</th>
          <th class="entete-table text-center" scope="col">Téléphone</th>
          <th class="entete-table text-center" scope="col">Email</th>
          <th class="coloneLien entete-table text-center" scope="col">Note</th>
          <th class="coloneLien entete-table text-center" scope="col">Avis sur l'apprenant</th>
          <th class="coloneLien entete-table text-center" scope="col">Valider</th>
        </tr>
      </thead>
      <tbody>
      <?php $data=$bdd->prepare("SELECT * FROM candidat WHERE id_formulaire = '$id'");
      $data->execute();

      while($donnees = $data->fetch()) {

        $test = $donnees['id_candidat'];

        $avis=$bdd->prepare("SELECT avis FROM avis_admin WHERE id_candidat = '$test' AND id_admin = '$id_admin'");
        $avis->execute(); 
        $count = $avis->rowCount();

        if($count == 0){?><form action="traitement/insert/insert_avis.php?id_form=<?=$id?>&id_candidat=<?=$donnees['id_candidat']?>" method="post">
          <tr class="liste-formation">
            <th class="text-center" scope="row"><?=$donnees['nom']?></th>
            <td class="text-center"><?=$donnees['prenom']?></td>
            <td class="text-center"><?=$donnees['dateNaissance']?></td>
            <td class="text-center"> <?=$donnees['telFixe']?></td>
            <td class="text-center"><?=$donnees['mail']?></td>
            <td class="text-center"><input type="number" id="note" name="note" min="0" max="20"></td>
            <td><TEXTAREA class="zone-texte" name="avis" rows=4 cols=40>Valeur par défaut</TEXTAREA></td>
            <td><button type="submit" class="boutonPhase1 btn btn-outline-info">Valider</button></td>
          </tr>
          </form><?php }
        else{}} ?>
  
      </tbody>
    </table>
  </div>
</body>
</html>