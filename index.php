<?php 
require('traitement/connectbdd.php');
session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="css/inscription.css">
    <link rel="stylesheet" href="css/modal.css">
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
                    <a class="nav-link mr-sm-2" href="index.php"><span class="icon"><i class="fas fa-home"></i></span>ACCUEIL</a>
                </li>
                <?php if(isset($_SESSION['mail'])){ ?>
                    <li class="nav-item">
                        <span class="icon"><i class="fas fa-user"></i></span><?= $_SESSION['pseudo']; ?>
                    </li>
                    <li class="nav-item">
                        <a href="traitement/deconnexion_session.php">Deconnexion</a>
                    </li>
                <?php }else{ ?>
                    <li class="nav-item">
                        <a class="nav-link mr-sm-2" href="#connexion" rel="modal:open"><span class="icon"><i class="fas fa-user"></i></span>SE CONNECTER</a>
                    </li>
                <?php } ?>
                </ul>
            </div>
        </nav>
    </header>

    <?php
       include('php/modal.php');
    ?>
    

    <div class="accueil">
    <!-- alert -->
        <center>
            <?php if(isset($_GET['alert'])) {
                    if($_GET['alert'] == 1) {?>
                        <div class="alert alert-danger" role="alert">
                        Les identifiants ne sont pas bon.
                        </div>
            <?php }} ?>

            <!-- success -->
            <?php if(isset($_GET['success'])) {
                if($_GET['success'] == 1) {?>
                    <div class="alert alert-success" role="alert">
                    Vous etes bien inscrit.
                    </div>
            <?php }}
            ?>
            </center>
            <img class="image" src="images/simplon.jpg" alt="image-accueil">
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


    <div class="accueil-formation">
        <div class="col-md text-center">
            <p class="titre-formation">FORMATIONS</p>
        </div>
    </div>

<?php 
  $formulaire=$bdd->prepare("SELECT * FROM formulaire WHERE statut = 0");
  $formulaire->execute();

  while ($donnees = $formulaire->fetch())
        { ?>
    <!--card des formations-->
    <div class="formation card " >
        <div class="row no-gutters">
            <div class="image-card col-md-4">
            <img src="images/<?=$donnees['img']?>" class="card-img" alt="...">
            </div>
            <div class="cadre col-md-8">
                <div class="card-body">
                    <div class="gauche text-center">
                        <h5 class="titre-card card-title"><?=$donnees['titre']?></h5>
                        <p class="card-text">Début d'inscription : <?=$donnees['debut_insc']?><br>
                                            Fin d'inscription : <?=$donnees['fin_insc']?></p>
                        <p class="card-text">Début de la formation : <?=$donnees['debut_form']?></p>
                        <p class="card-text">Durée de la formation : <?=$donnees['dure']?></p>
                        <button type="button" class="btn  btn-lg" style="background-color: #F01616">En savoir plus >></button>
                    </div>                    
                </div>
                <div class="card-body">
                    <div class="droite text-center">
                        <p class="card-text">La création d’un compte est obligatoire pour<br>
                                            pretendre a l’inscription de la formation </p>
                        <?php if(isset($_SESSION['mail'])){ ?>
                        <a href="php/page1-formulaire.php"><button type="button" class="btn  btn-lg" style="background-color: #F01616">DEBUT DU QUIZZ >></button></a>
                        <?php }else{?>
                        <a href="php/inscription.php"><button type="button" class="btn  btn-lg" style="background-color: #F01616">INSCRIPTION >></button></a>
                        <a href="#connexion" rel="modal:open"><button type="button" class="btn  btn-lg pt-2" style="background-color: #F01616">CONNEXION >></button></a>
                    
                        <?php } ?>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <div class="parallax" data-parallax="scroll" data-z-index="" data-image-src="images/simplon-accueil.jpg"></div>
    

        <?php } ?>
    <!--footer-->
    <div class="footer container-fluid text-center">
       <div class="row ml-2">
           <div class="liens col-md-12 text-center mb-2 ">
               <a href="#">Accueil</a><span class="barre">|</span>
               <a href="#">Contact</a><span class="barre">|</span>
               <a href="#">Connexion</a>
           </div>
       </div>
       <div class="row">
           <div class="col-md text-center">
              <img class="logo-footer" src="images/logo-simplon_23.png" alt="">
           </div>
       </div>
       <div class="row">
           <div class="col-md text-center">
               <p class="texte-reseaux">Nous suivre</p>
               <div class="réseaux">
                    <a class="lien-fac" href="https://www.facebook.com/ecoledescodeurs/?__tn__=%2Cd%2CP-R&eid=ARAPoN_TVFBHtZhFNWEaQFlfCz8ydHbiKzKc1ZxQEsYOFi_DQ1O8dU49tfB0iI1Gdiko41TJk4vz6YD2"><i class="fab facebook fa-facebook-square"></a></i>
                    <a  href="https://twitter.com/simplonco"><i class="fab twitter fa-twitter-square"></i></a>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="copyright col-md text-center">
              <i class="far fa-copyright"></i><span class="copy"><span class="lettre">S</span>implon-Charleville.fr2020</span>
           </div>
       </div>
   </div>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/index.js"></script>
</body>
</html>