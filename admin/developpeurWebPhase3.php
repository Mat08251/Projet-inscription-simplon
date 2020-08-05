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
<div class="fond">
    <img class="logo" src="../images/logo-simplon_23.png"><h1 class="text-center font-weight-bold font-italic text-black-50 mt-4 mb-5">Bienvenue dans votre interface Administrateur</br>
    Developpeur Web</h1>
        <center><a href="../index.php" class="text-black-50 mb-5">Revenir à l'accueil</a></center>
        <center><a href="admin.php" class="text-black-50 mt-5 mb-5">Accès à l'accueil admin</a></center>
        <center><a href="traitement/deco_admin.php"><button type="button" class="boutonPhase1 btn btn-outline">Deconnexion</button></a></center>
        
        <div class=" mt-2">
          <div class="bouton-phase">
            <h3 class=" mt-4 mb-5"><center>Liste des apprenants</center></h3>
            <a href="developpeurWeb.php?id=<?=$id?>"><button type="button" class="boutonPhase btn btn-outline-info">Phase1</button></a>
            <a href="developpeurWebphase2.php?id=<?=$id?>"><button type="button" class="boutonPhase btn btn-outline-info">Phase2</button></a>
          </div>
          </div>
    <div class="info-forma container-fluid mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th class="entete-table text-center" scope="col">Nom de l'apprenant</th>
          <th class="entete-table text-center" scope="col">Prenom de l'apprenant</th>
          <th class="entete-table text-center" scope="col">Âge</th>
          <th class="entete-table text-center" scope="col">Téléphone</th>
          <th class="entete-table text-center" scope="col">Email</th>
          <th class="coloneLien entete-table text-center" scope="col">Accepter l'apprenant</th>
          <th class="coloneLien entete-table text-center" scope="col">Refuser l'apprenant</th>
          <th class="coloneLien entete-table text-center" scope="col">En attente</th>
        </tr>
      </thead>
      <tbody>


      <?php $data=$bdd->prepare("SELECT * FROM candidat WHERE id_formulaire = '$id'");
      $data->execute();

      while($donnees = $data->fetch()) {?>

        <tr class="liste-formation">
          <th class="text-center" scope="row"><?=$donnees['nom']?></th>
          <td class="text-center"><?=$donnees['prenom']?></td>
          <td class="text-center"><?=$donnees['dateNaissance']?></td>
          <td class="text-center"> <?=$donnees['telFixe']?></td>
          <td class="text-center"><?=$donnees['mail']?></td>
          <?php if($donnees['statut_final'] == 1){
            echo '<td class="text-center">Accepter</td>';
            echo '<td class="text-center"></td>';
            echo '<td class="text-center"></td>';
          }elseif($donnees['statut_final'] == 2){
            echo '<td class="text-center"></td>';
            echo '<td class="text-center">Refuser</td>';
            echo '<td class="text-center"></td>';
          }elseif($donnees['statut_final'] == 3){
            echo '<td class="text-center"></td>';
            echo '<td class="text-center"></td>';
            echo '<td class="text-center">En Attente</td>';
        }else{?>
          <td><a href="traitement/update/statut_ok_final.php?id_candidat=<?=$donnees['id_candidat']?>"><button type="button" class="bouton-ajout btn btn-success "><span class="texteButton">Accepter</span></button></a></td>
          <td><a href="traitement/update/statut_no_final.php?id_candidat=<?=$donnees['id_candidat']?>"><button type="button" class="bouton-ajout btn btn-danger "><span class="texteButton">Refuser</span></button></a></td>
          <td><a href="traitement/update/statut_att_final.php?id_candidat=<?=$donnees['id_candidat']?>"><button type="button" class="bouton-ajout btn btn-warning "><span class="texteButton">En Attente</span></button></a></td>
          <?php } ?>
          </tr>
        <?php } ?>
  
      </tbody>
    </table>
  </div>
</body>
</html>