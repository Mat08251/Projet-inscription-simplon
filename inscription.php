<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="inscription.css">
    <link rel="stylesheet" href="modal.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <p><a href="#connexion" rel="modal:open">test modal</a></p>

    <div id="inscription">
        <form id="form_inscription" action="#" method="post">
            <h3 class="titre_form">S'INSCRIRE</h3>
            <fieldset>
                <input placeholder="Nom.." name="snom" id="snom" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Email.." name="semail" id="semail" type="email" tabindex="3" required>
            </fieldset>
            <fieldset>
                <input placeholder="Adresse.." name="sadresse" id="sadresse" type="text" tabindex="4" required>
            </fieldset>
            <fieldset>
                <input placeholder="Ville.." name="sville" id="sville" type="text" tabindex="4" required>
            </fieldset>
            <fieldset>
                <input placeholder="Pays.." name="spays" id="spays" type="text" tabindex="5" required>
            </fieldset>
            <fieldset>
                <input class="space" placeholder="Mot de passe.." name="smdp" id="smdp" type="password" tabindex="6"
                    required>
            </fieldset>
            <fieldset>
                <input placeholder="Confirmer le mot de passe.." name="cmdp" id="cmdp" type="password" tabindex="7" required>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit">RETOUR</button>
                <button name="submit" type="submit">SOUMETTRE</button>
            </fieldset>
        </form>
    </div>

   <?php 
   include('modal.php');
   ?>
</body>

</html>