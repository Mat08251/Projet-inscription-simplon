<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inscription.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

<?php include ('../includes/navbar.php'); ?>


    <div id="inscription">
        <!-- alert -->
        <center>
            <?php if(isset($_GET['alert'])) {
                    if($_GET['alert'] == 1) {?>
                        <div class="alert alert-danger" role="alert">
                        Les Mots de Passe ne sont pas identique.
                        </div>
                    <?php }if($_GET['alert'] == 2) {?>
                        <div class="alert alert-danger" role="alert">
                        Ce pseudo exist deja.
                        </div>
                        <?php }if($_GET['alert'] == 3) {?>
                        <div class="alert alert-danger" role="alert">
                        Cet e-mail est deja utilisé.
                        </div>
            <?php }} ?>
        </center>
        <form id="form_inscription" action="../traitement/first_inscription.php" method="post">
            <h3 class="titre_form">S'INSCRIRE</h3>
            <fieldset>
                <input placeholder="Pseudo.." name="pseudo" id="pseudo" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Email.." name="mail" id="mail" type="email" tabindex="3" required>
            </fieldset>
            <fieldset>
                <input class="space" placeholder="Mot de passe.." name="mdp" id="mdp" type="password" tabindex="6"
                    required>
            </fieldset>
            <fieldset>
                <input placeholder="Confirmer le mot de passe.." name="mdp2" id="mdp2" type="password" tabindex="7" required>
            </fieldset>
            <fieldset>
                <form>
                    <a href="../index.php"><button name="submit" type="button">RETOUR</button></a>
                </form>
                <button name="submit" type="submit">SOUMETTRE</button>
            </fieldset>
        </form>
    </div>

  

<?php include ('../includes/footer.php'); ?>
</body>

</html>