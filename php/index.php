<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
    <title>page d'accueil</title>
</head>
<body>
    <?php include ('../includes/navbar.php'); ?>
    

    <div class="card">
            <img src="../images/image1.jpg" alt="image-accueil">
        <div class="card-img-overlay">
            <h5 class="card-title text-white">BIENVENUE</h5>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="texte col-md-12 text-center">
                <p class="texte1">Vous vous appretez à candidater à une de nos formations Simplon Charleville - labillisée Grande Ecole du Numerique - <br>
                   qui se déroulera à Charleville.<br>
                Cette Formation sera gratuite pour les apprenant.e.s séléctionée grâce à un financement de la Region Grand-Est.</p>
            </div>
        </div>
        <div class="row">
            <div class="texte col-md-12 text-center">
                <p class="texte2"><span class="mot-couleur">Obligatoire</span> : Demandeur.se.s d'emploi inscrit à PÔLE EMPLOI<br>
                   Savoir jouer au ping pong pour les devs web.</p>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12 text-center">
            <p class="titre-formation">FORMATIONS</p>
        </div>
    </div>

    <!--card des formations-->
    <div class="card mb-3" style="max-width: 1040px;">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
    </div>

    <?php include ('../includes/footer.php'); ?>
</body>
</html>