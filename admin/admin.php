<?php
include('../traitement/connectbdd.php');
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

<body class="bg-light">
    
<img class="logo" src="../images/logo-simplon_23.png"><h1 class="text-center font-weight-bold font-italic text-black-50 mt-4 mb-5">Bienvenue dans votre interface Administrateur</h1>
    <center><a href="../index.php" class="text-black-50 mb-5">Revenir à l'accueil</a></center>
    <center><a href="inscriptions.php" class="text-black-50 mt-5 mb-5">Accès aux inscriptions</a></center>
    <div class=" mt-2">
    <h3 class="font-weight-light text-black-50 mt-4 mb-5"><center>Liste de formations</center></h3>


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
        </tr>
      </thead>
      <tbody>


        <?php
            $azerty = $bdd->prepare("SELECT * FROM candidat");
            $azerty->execute();

            while ($donnees = $azerty->fetch())
        { ?>
        <tr class="liste-formation">
          <th class="text-center" scope="row">Developpeur web</th>
          <td class="text-center">1/1/2020</td>
          <td class="text-center"> 2/1/2020</td>
          <td class="text-center"> 2/1/2020</td>
          <td><img src="../images/codage.jpg" class="card-img" alt="..."></td>
          <td><button type="button" class="btn btn-success "><span class="texteButton">Voir la formation</span></button></td>
        </tr>
        <?php
}
$azerty->closecursor();
?>
      </tbody>
    </table>
  </div>

  
</body>
</html>