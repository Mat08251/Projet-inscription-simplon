<?php require('../traitement/connectbdd.php');
session_start();
$id = $_SESSION['id_candidat'];  ?>
<!Doctype html>
<html lang="fr">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Formulaire d'inscription</title>
    <meta name="description" content="Creation formulaire d'inscription à une formation" />
    <meta http-equiv="content-language" content="fr" />
    <META HTTP-EQUIV="Refresh" CONTENT="18;URL=../index.php">
    <link href="../css/style-fin-inscription.css" rel='stylesheet' type='text/css' />
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

            <div class="div_container pb-4">
                <div class="div_titre_formation pb-1"><br>
                    <h1>DEVELOPPEUR(se) WEB & WEB MOBILE</h1>
                </div>

                <div class="div_formulaire">
                    <h2>VALIDATION DE VOTRE INSCRIPTION EN LIGNE<h2>
                </div>
                <?php
                $nom_user = $bdd->prepare("SELECT * FROM candidat WHERE id_candidat = '$id'");
                $nom_user->execute();

                $nom = $nom_user->fetch();
                ?>
                <div class="cadre1">
                    <h2>Merci Monsieur</h2><h1><?=$nom['nom']?>, <?=$nom['prenom']?></h1>
                    <h3> Nous vous confirmons la validation de votre inscription
                        à la formation “ Développeur - se Web & web mobile ”.<br>
                    </h3>

                    <h3>
                        Nous allons étudier votre candidature et vous recontacterons dans les plus brefs délais.
                        Vous pouvez en attendant continuer à vous entrainer sur les diffrentes plateformes
                        utilisées précédemment ou/et d’autres de votre choix
                    </h3>

                    <h3>
                        Un mail de confirmation vient de vous être envoyé.
                        Si vous avez des questions, n’hesitez pas à nous contacter.
                    </h3>

                    <h3>
                        Toute l’équipe de Simplon Charleville
                        vous remercie et vous souhaite une agréable journée.
                    </h3>

                    <h2 class="message_fin">Vous allez être redirigé automatiquement vers notre site </h2>
                    <p> (si rien ne se produit, veuillez cliquer sur le lien de redirection)</p>
                    <a href="../index.php"><button type="button" class="btn bouton-renvois  btn-lg text-center"><span  class="lien-redirection text-center">cliquer ici</span></button></a>
                </div>
            </div>

     <div class="containers">
        <ul class="progressbar ">
            <li class="active">Etape 1</li>
            <li class="active">Etape 2</li>
            <li class="active">Etape 3</li>
            <li class="active">Etape 4</li>
            <li class="active">Etape 5</li>
        </ul>
    </div>

<div class="pied-de-page">
    <?php include ('../includes/footer.php'); ?>
</div>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="../js/fin-inscription.js"></script>
</body>

</html>