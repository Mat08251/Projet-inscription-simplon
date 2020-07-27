<?php
include('../traitement/connectbdd.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie Administrateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
</head>

<body class="bg-light">
    
<h1 class="text-center font-weight-light font-italic text-black-50 mt-4 mb-5">Bienvenue dans votre interface Administrateur</h1>
    <center><a href="../index.php" class="text-black-50 mb-5">Revenir à l'accueil</a></center>
    <center><a href="inscriptions.php" class="text-black-50 mt-5 mb-5">Accès aux inscriptions</a></center>
    <div class="container mt-2">
    <h3 class="font-weight-light text-black-50 mt-4 mb-5"><center>Liste Participants</center></h3>

    <center><a href="admincrud/insert/testimonials.php" class="text-black-50">Ajouter un témoignage <i class="fas fa-plus-circle mb-4"></i></a></center>

    <div class="container mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Avis</th>
          <th scope="col">Plus D'infos</th>
        </tr>
      </thead>
      <tbody>


        <?php
            $azerty = $bdd->prepare("SELECT * FROM candidat");
            $azerty->execute();

            while ($donnees = $azerty->fetch())
        { ?>
        <tr>
          <th scope="row"><?= $donnees['nom']; ?></th>
          <td><?= $donnees['prenom']; ?></td>
          <td>azerty</td>
          <td><a href="plusdinfo.php?id=<?= $donnees['id_candidat'];?>" class="text-muted">Plus D'infos</a></td>
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