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

    <img class="logo" src="../images/logo-simplon_23.png"><h1 class="text-center font-weight-bold font-italic text-black-50 mt-4 mb-5">Bienvenue dans votre interface Administrateur</br>
    Developpeur Web</h1>
        <center><a href="../index.php" class="text-black-50 mb-5">Revenir à l'accueil</a></center>
        <center><a href="admin.php" class="text-black-50 mt-5 mb-5">Accès à l'accueil admin</a></center>
        <div class=" mt-2">
    <h3 class="font-weight-light text-black-50 mt-4 mb-5"><center>Liste des apprenants</center></h3>


    <div class="info-forma container-fluid mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th class="entete-table text-center" scope="col">Nom de l'apprenant</th>
          <th class="entete-table text-center" scope="col">Etape de l'apprenant</th>
          <th class="entete-table text-center" scope="col">Avis sur l'apprenant</th>
          <th class="entete-table text-center" scope="col">Email de l'apprenant</th>
          <th class="coloneLien entete-table text-center" scope="col">Lien d'acces</th>
        </tr>
      </thead>
      <tbody>


       
        <tr class="liste-formation">
          <th class="text-center" scope="row">Developpeur web</th>
          <td class="text-center">1/1/2020</td>
          <td class="text-center"> 2/1/2020</td>
          <td class="text-center"> 2/1/2020</td>
          <td><button type="button" class="btn btn-success "><span class="texteButton">ajouter un avis</span></button></td>
        </tr>
  
      </tbody>
    </table>
  </div>
</body>
</html>