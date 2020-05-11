<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/page5-formulaire.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php include ('../includes/navbar.php'); ?>

    <?php include ('../includes/entete-formulaire.php'); ?>

    <?php include ('../includes/sousentete.php'); ?>
    
    <div class="row">
        <div class="confirmation col-md-12 text-center">
            <!--code php à intégrer-->
            <p>Merci <span class="gras">Monsieur Dujardin</span></p>
            <hr class="barre-confirmation"/>
        </div>
    </div>

    <div class="row">
        <div class="texte-final col-md-12 text-center">
            <p>Nous vous confirmons la validation de votre inscription<br>
               à notre formation <span class="mot-cle">"Développeur - se Web & web mobile".</span></p>
        </div>
    </div>

    <div class="row">
        <div class="texte-final col-md-12 text-center">
            <p>Nous allons étudier votre candidature et vous recontacterons dans les plus brefs délais.<br>
               Vous pouvez en attendant continuer à  vous entrainer sur les différentes plateforms<br>
               utilisées précédemment ou/et d'autres de votre choix.</p>
        </div>
    </div>

    <div class="row">
        <div class="texte-final col-md-12 text-center">
            <p><span class="mot-cle">Un mail de confirmation vient de vous être envoyé.</span><br>
               Si vous avez des questions, n'hesitez pas à nous contacter.</p>
        </div>
    </div>

    <div class="row">
        <div class="texte-final col-md-12 text-center">
            <p>Toute l'équipe de Simplon Charleville<br>
               Vous remercie et vous souhaite une agréable journée</p>
        </div>
    </div>

    <?php include ('../includes/footer.php'); ?>
</body>
</html>