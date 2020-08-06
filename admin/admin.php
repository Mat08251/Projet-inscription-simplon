<?php
include('../traitement/connectbdd.php');
session_start();
$pseudo = $_SESSION['pseudo'];
$statut = $_SESSION['statut'];
$id_admin = $_SESSION['id_admin'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie Administrateur</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
</head>
<?php 
if(isset($pseudo)){?>
<!--début bloc navbar-->
<body class="bg-light">
    
<img class="logo" src="../images/logo-simplon_23.png"><h1 class="text-center font-weight-bold font-italic text-black-50 mt-4 mb-5">Bienvenue dans votre interface Administrateur</h1>
    <center><a href="../index.php" class="lien-admin text-black-50 mb-5">Revenir à l'accueil</a></center>
    <center><a href="admin.php" class="lien-admin text-black-50 mt-5 mb-5">Accès à l'accueil admin</a></center>
    <center><a href="traitement/deco_admin.php"><button type="button" class="boutonPhase btn btn-outline">Deconnexion</button></a></center>
    <div class=" mt-2">
    <h3 class="  mt-4 "><center><?=$pseudo?></center></h3>
        
    <h3 class="titreFormaAdmin  mt-4 mb-5"><center>Liste des formations</center></h3>
<!--fin bloc navbar-->

<!--info tableau-->
    <div class="info-forma container-fluid mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th class="entete-table text-center" scope="col">Nom de la formation</th>
          <th class="entete-table text-center" scope="col">Date de début de l'inscription</th>
          <th class="entete-table text-center" scope="col">Date de fin de l'inscription</th>
          <th class="entete-table text-center" scope="col">Début de la formation</th>
          <th class="coloneImage entete-table text-center" scope="col">Image</th>
          <th class="coloneLien entete-table text-center" scope="col">Lien d'acces</th>
          <th class="coloneLien entete-table text-center" scope="col">Promo</th>
        </tr>
      </thead>
      <tbody>


        <?php
            $azerty = $bdd->prepare("SELECT * FROM formulaire");
            $azerty->execute();

            while ($donnees = $azerty->fetch())
        { ?>

        <!--Données des formations en cours-->
        <tr class="liste-formation">
            <th class="text-center" scope="row"><?=$donnees['titre']?></th>
            <td class="text-center"><?=$donnees['debut_insc']?></td>
            <td class="text-center"><?=$donnees['fin_insc']?></td>
            <td class="text-center"><?=$donnees['debut_form']?></td>
            <td><img src="../images/<?=$donnees['img']?>" class="card-img" alt="..."></td>
            <td><a href="developpeurWeb.php?id=<?=$donnees['id_formulaire']?>"><button type="button" class="btn btn-success "><span class="texteButton">Voir la formation</span></button></a></td>
            <td><a href="nouvellePromo.php?id=<?=$donnees['id_formulaire']?>"><button type="button" class="btn btn-success "><span class="texteButton">Voir la promo</span></button></a></td>
        </tr>
        <?php
}
$azerty->closecursor();
?>
      </tbody>
    </table>
  </div>

  
</body>
<?php }else{
  header('location: index.php');
}?>
</html>