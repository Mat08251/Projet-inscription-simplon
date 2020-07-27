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
       
    <h3 class="font-weight-light text-black-50 mt-4 mb-5"><center>Témoignages</center></h3>

    <center><a href="" class="text-black-50">Ajouter un témoignage <i class="fas fa-plus-circle mb-4"></i></a></center>

    <div class="container mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nom, Prénom</th>
          <th scope="col">Email</th>
          <th scope="col">Avis sur l'apprenant</th>
        </tr>
      </thead>
      <tbody>


        <?php
            $readtestimonials = $bdd->prepare("SELECT * FROM ");
            $readtestimonials->execute();

            while ($donnees = $readtestimonials->fetch())
        { ?>
        <tr>
          <th scope="row"><?= $donnees['first_name']; ?></th>
          <td><?= substr($donnees['text'], 0, 60); ?>...</td>

          <!-- <td><a href="admincrud/update/testimonials.php?id= $donnees['id_testimonial'];" class="text-muted"><i
                class="fas fa-user-edit"></i></a></td> -->
          <td><button type="button" class="btn btn-danger">Danger</button></td>
        </tr>
        <?php
}
$readtestimonials->closecursor();
?>
      </tbody>
    </table>
  </div>

  
</body>
</html>