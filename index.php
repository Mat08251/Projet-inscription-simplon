<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
    <script src="parallax/parallax.min.js"></script>
    <title>page d'accueil</title>
</head>
<body>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand" href="index.php"><img class="logo" src="images/logo-simplon_23.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                <li class="nav-item1">
                    <a class="nav-link mr-sm-2" href="../index.php"><span class="icon"><i class="fas fa-home"></i></span>ACCUEIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-sm-2" href="#"><span class="icon"><i class="fas fa-user"></i></span>SE CONNECTER</a>
                </li>
                </ul>
            </div>
        </nav>
    </header>
    

    <div class="accueil">
            <img class="image" src="../images/team-work-business-startup 1.png" alt="image-accueil">
            <h5 class="titre-accueil card-title col-xm-6">BIENVENUE</h5>
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
    <div class="formation card " >
        <div class="row no-gutters">
            <div class="image-card col-md-4">
            <img src="images/codage.jpg" class="card-img" alt="...">
            </div>
            <div class="cadre col-md-8">
                <div class="card-body">
                    <div class="gauche text-center">
                    <h5 class="titre-card card-title">DEVELOPPEUR WEB</h5>
                    <p class="card-text">Début d'inscription : 1/1/2020<br>
                                        Fin d'inscription : 2/1/2020</p>
                    <p class="card-text">Début de la formation : 5/1/2020</p>
                    <p class="card-text">Durée de la formation : 6mois</p>
                    <button type="button" class="btn  btn-lg" style="background-color: #F01616">En savoir plus >></button>
                    </div>                    
                </div>
                <div class="card-body">
                    <div class="droite text-center">
                    <p class="card-text">La création d’un compte est obligatoire pour<br>
                                         pretendre a l’inscription de la formation </p>
                    <a href="php/condition-gene.php"><button type="button" class="btn  btn-lg" style="background-color: #F01616">INSCRIPTION >></button></a>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <div class="parallax" data-parallax="scroll" data-z-index="" data-image-src="images/team-work-business-startup 1.png"></div>


    <!--card des formations-->
    <div class="formation card  justify-center" >
        <div class="row no-gutters">
            <div class="image-card col-md-4">
            <img src="images/codage.jpg" class="card-img" alt="...">
            </div>
            <div class="cadre col-md-8">
                <div class="card-body">
                    <div class="gauche text-center">
                    <h5 class="titre-card card-title">DEVELOPPEUR WEB</h5>
                    <p class="card-text">Début d'inscription : 1/1/2020<br>
                                        Fin d'inscription : 2/1/2020</p>
                    <p class="card-text">Début de la formation : 5/1/2020</p>
                    <p class="card-text">Durée de la formation : 6mois</p>
                    <button type="button" class="btn  btn-lg" style="background-color: #F01616">En savoir plus >></button>
                    </div>                    
                </div>
                <div class="card-body">
                    <div class="droite text-center">
                    <p class="card-text">La création d’un compte est obligatoire pour<br>
                                         pretendre a l’inscription de la formation </p>
                    <button type="button" class="btn  btn-lg" style="background-color: #F01616">INSCRIPTION >></button>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <div class="parallax" data-parallax="scroll" data-z-index="2" data-image-src="images/team-work-business-startup 1.png"></div>

    <!--card des formations-->
    <div class="formation card  justify-center" >
        <div class="row no-gutters">
            <div class="image-card col-md-4">
            <img src="images/codage.jpg" class="card-img" alt="...">
            </div>
            <div class="cadre col-md-8">
                <div class="card-body">
                    <div class="gauche text-center">
                    <h5 class="titre-card card-title">DEVELOPPEUR WEB</h5>
                    <p class="card-text">Début d'inscription : 1/1/2020<br>
                                        Fin d'inscription : 2/1/2020</p>
                    <p class="card-text">Début de la formation : 5/1/2020</p>
                    <p class="card-text">Durée de la formation : 6mois</p>
                    <button type="button" class="btn  btn-lg" style="background-color: #F01616">En savoir plus >></button>
                    </div>                    
                </div>
                <div class="card-body">
                    <div class="droite text-center">
                    <p class="card-text">La création d’un compte est obligatoire pour<br>
                                         pretendre a l’inscription de la formation </p>
                    <button type="button" class="btn  btn-lg" style="background-color: #F01616">INSCRIPTION >></button>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/footer.php'); ?>
</body>
</html>