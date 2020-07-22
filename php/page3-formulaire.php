<?php session_start(); ?>
<!Doctype html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Formulaire d'inscription</title>
    <meta name="description" content="Creation formulaire d'inscription à une formation" />
    <meta http-equiv="content-language" content="fr" />
    <link href="../css/stylepage3.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include ('../includes/navbar.php'); ?>

    <div class="form_contact">
        <form id="form_contact" method="post" action="traitement/insert_contact.php">

            <div class="div_container">
                <div class="div_navbar"></div>
                <div class="div_titre_formation"><br>
                    <h1>DEVELOPPEUR(se) WEB & WEB MOBILE</h1>
                </div>

                <div class="div_formulaire">
                    <h2>FORMULAIRE D'INSCRIPTION EN LIGNE<h2>
                </div>
                <a class="information_champs_inscription">Veuillez remplir tout les champs svp</a>

                <div class="blocFormulaire"></div>
                <div class="etape2"><h2>ETAPE 3</h2></div>
                


                <div class="cadre1"><h2>Si vous étiez un super-héros
                    super-héroine, qui seriez vous et pourquoi?</h2><br><hr>

                    <textarea id = "info1" rows = 6 name = "info1"  placeholder = "Votre réponse" required index = 4  ></textarea>
                </div>

                <div class="cadre2"><h2>Dites nous pourquoi vous voulez intégrer la formation. Racontez-nous votre parcours
                                    et détaillez-nous votre motivation en vous exprimant avec votre style à vous, 
                                    mais ne vous limitez pas à un texte tapé à la va-vite. Aussi, n'hésitez pas à faire une vidéo, 
                                    un site ou toute autre chose qui démontrera votre envie, votre motivation et 
                                    vos compétences ! *</h2><br><hr>

                                    <textarea id = "info2" rows = 11  name = "info2"  placeholder = "Votre réponse" required index = 4  ></textarea> 
                </div>

                <div class="cadre3"><h2>Dites nous pourquoi vous voulez intégrer la formation. Racontez-nous votre parcours
                                    et détaillez-nous votre motivation en vous exprimant avec votre style à vous, 
                                    mais ne vous limitez pas à un texte tapé à la va-vite. Aussi, n'hésitez pas à faire une vidéo, 
                                    un site ou toute autre chose qui démontrera votre envie, votre motivation et 
                                    vos compétences ! *</h2><br><hr>

                         <textarea id = "info3" rows = 11 name = "info3"  placeholder = "Votre réponse" required  index = 4  ></textarea> 
                               
                </div>

                <div class="cadre4"><h2>Dites nous pourquoi vous voulez intégrer la formation. Racontez-nous votre parcours
                                    et détaillez-nous votre motivation en vous exprimant avec votre style à vous, 
                                    mais ne vous limitez pas à un texte tapé à la va-vite. Aussi, n'hésitez pas à faire une vidéo,
                                    un site ou toute autre chose qui démontrera votre envie, votre motivation et vos compétences ! *</h2><br><hr>
                
                    
                                    <div class="content-cadre4" >
                                        <textarea id = "info4"  rows = 11 cols = 50 name = "info4"  placeholder = "Votre réponse" required  index = 4  ></textarea> 
                                     </div>
                </div>


               
            
            </div>
            <div class="bouton">
                <a href="../php/page2-formulaire.php" class="bouton-suivant align-items-center"><button type="button" class="btn  btn-lg">Précédent</button></a>
                

                    
                <a href="../php/page4-formulaire.php" class="bouton-suivant align-items-center"><button type="submit" class="btn  btn-lg">Suivant</button></a>
            </div>
        </form>
    </div>

    <div class="containers">
        <ul class="progressbar ">
            <li class="active">Etape 1</li>
            <li class="active">Etape 2</li>
            <li class="active">Etape 3</li>
            <li>Etape 4</li>
            <li>Etape 5</li>
        </ul>
    </div>

    <?php include ('../includes/footer.php'); ?>
</body>

</html>