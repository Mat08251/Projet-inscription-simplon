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
          <center><a href="../index.php" class="text-white-50 mb-5">Revenir à l'accueil</a></center>
          <center><a href="admin.php" class="text-white-50 mt-5 mb-5">Accès à l'accueil admin</a></center>

          <?php 
          $requete=$bdd->prepare("SELECT * FROM administrateurs WHERE id_admin = '$id_admin'");
          $requete->execute();
          $donnees=$requete->fetch();

          if($donnees['statut'] == 1){

          $req=$bdd->prepare("SELECT * FROM formulaire WHERE id_formulaire = '$id'");
          $req->execute();
          $data=$req->fetch();
          if($data['statut'] == 1){?>
            <center><a href="traitement/update/ouvrire_devweb.php?id=<?=$id?>"><button type="button" class="bouton-cloture btn btn-danger btn-lg">Ouvrire l'inscription</button></a></center>
          <?php }else{ ?>
          <center><a href="traitement/update/cloture_devweb.php?id=<?=$id?>"><button type="button" class="bouton-cloture btn btn-danger btn-lg">Cloturer l'inscription</button></a></center>
          <?php }
          
          }else{} ?>
          <center><a href="traitement/deco_admin.php"><button type="button" class="boutonPhase1 btn btn-outline">Deconnexion</button></a></center>
          <div class=" mt-2">
          <h3 class="  mt-4 "><center><?=$pseudo?></center></h3>
          
            <div class="bouton-phase">
            
              <h3 class=" mt-4 mb-5"><center>Liste des apprenants</center></h3>
              <a href="developpeurWebphase2.php?id=<?=$id?>"><button type="button" class="boutonPhase btn btn-outline-info">Phase2</button></a>
              <?php if($statut==1){?>
                <a href="developpeurWebphase3.php?id=<?=$id?>"><button type="button" class="boutonPhase btn btn-outline-info">Phase3</button></a>
              <?php }else{}?>
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
          <th class="entete-table text-center" scope="col">Date de naissance</th>
          <th class="entete-table text-center" scope="col">Téléphone</th>
          <th class="entete-table text-center" scope="col">Email</th>
          <th class="coloneLien entete-table text-center" scope="col">Accepter l'apprenant</th>
          <th class="coloneLien entete-table text-center" scope="col">Refuser l'apprenant</th>
          <th class="coloneLien entete-table text-center" scope="col">En Attente</th>
          <th class="coloneLien entete-table text-center" scope="col">Resultats Questions</th>
        </tr>
      </thead>
      <tbody>

<?php $data=$bdd->prepare("SELECT * FROM candidat WHERE id_formulaire = '$id'");
      $data->execute();

      while($donnees = $data->fetch()) {?>

       <!--bloc info apprenant-->
        <tr class="liste-formation">
          <th class="text-center" scope="row"><?=$donnees['nom']?></th>
          <td class="text-center"><?=$donnees['prenom']?></td>
          <td class="text-center"><?=$donnees['dateNaissance']?></td>
          <td class="text-center"><?=$donnees['telFixe']?></td>
          <td class="text-center"><?=$donnees['mail']?></td>
          <?php if($donnees['statut'] == 1){
            echo '<td class="text-center">Accepter</td>';
            echo '<td class="text-center"></td>';
            echo '<td class="text-center"></td>';
          }elseif($donnees['statut'] == 2){
            echo '<td class="text-center"></td>';
            echo '<td class="text-center">Refuser</td>';
            echo '<td class="text-center"></td>';
          }elseif($donnees['statut'] == 3){
            echo '<td class="text-center"></td>';
            echo '<td class="text-center"></td>';
            echo '<td class="text-center">En Attente</td>';
        }else{?>
          <td><a href="traitement/update/statut_ok.php?id_candidat=<?=$donnees['id_candidat']?>&id=<?=$id?>"><button type="button" class="bouton-ajout btn btn-success "><span class="texteButton">Accepter</span></button></a></td>
          <td><a href="traitement/update/statut_no.php?id_candidat=<?=$donnees['id_candidat']?>&id=<?=$id?>"><button type="button" class="bouton-ajout btn btn-danger "><span class="texteButton">Refuser</span></button></a></td>
          <td><a href="traitement/update/statut_att.php?id_candidat=<?=$donnees['id_candidat']?>&id=<?=$id?>"><button type="button" class="bouton-ajout btn btn-warning "><span class="texteButton">En Attente</span></button></a></td>
          <?php } ?>
          <td class='text-center'><a href="plusdinfo.php?id_candidat=<?=$donnees['id_candidat'];?>&id=<?=$id?>"><button type="button" class="btn btn-info btn-sm">Resultats Questions</button></a></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  </div>
</body>
</html>