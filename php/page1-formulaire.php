<!Doctype html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Formulaire d'inscription</title>
    <meta name="description" content="Creation formulaire d'inscription à une formation" />
    <meta http-equiv="content-language" content="fr" />
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="form_contact">
        <form id="form_contact" method="post" action="mailto:schcrumble@yahoo.fr";
            target="mailto schcrumble@yahoo.fr">

            <div class="div_container">
                <div class="div_navbar"></div>
                <div class="div_titre_formation">
                    <h1>DEVELOPPEUR(se) WEB & WEB MOBILE</h1>
                </div>
            
                    <div class="div_formulaire">
                        <h2>FORMULAIRE D'INSCRIPTION EN LIGNE
                    </div>
                    <a class="information_champs_inscription">Veuillez remplir tout les champs svp</a>

                    <div class="background_image"></div>


                    <label for="champ_nom" class="champ_nom">Nom</label>
                    <input placeholder="Nom" type="text" id="nom" required autofocus tabindex="1">

                    <label for="champ_prenom" class="champ_prenom">Prénom</label>
                    <input placeholder="Prenom" type="text" id="prenom" tabindex="2" required autofocus>

                    <label for="champ_nom_jeune_fille" class="champ_nom_jeune_fille">Nom de Jeune fille</label>
                    <input placeholder="Nom de Jeune Fille" id="nom_jeune_fille" tabindex="3">

                    <label for="champ_date_de_naissance" class="champ_date_de_naissance">Date de Naissance</label>
                    <input placeholder="Date de Naisance" id="date_de_naissance" type="date" tabindex="4" required
                        autofocus>

                    <label for="champ_nationalite" class="champ_nationalite">Nationalité</label>
                    <input placeholder="Nationalité" id="nationalite" type="text" tabindex="5" required autofocus>

                    <label for="sexe" class="champ_sexe">Sexe</label>
                    <input placeholder="Sexe" id="sexe" type="text" tabindex="6" required autofocus>

                    <label for="champ_adresse" class="champ_adresse">Rue, Avenue,...</label>
                    <input placeholder="Adresse" id="adresse" type="text" tabindex="8" required autofocus>

                    <label for="champ_ligne2" class="champ_ligne2">Numéro</label>
                    <input placeholder="N°, bis,.." id="ligne2" type="text" tabindex="9" required autofocus>

                    <label for="champ_ligne" class="champ_ligne">Complément d'adresse</label>
                    <input placeholder="Bat, étage, autres" id="ligne" type="text" tabindex="10" required autofocus>

                    <label for="champ_pays" class="champ_pays">Pays</label>
                    <input placeholder="Pays" id="pays" type="text" tabindex="11" required autofocus>

                    <label for="champ_code_postal" class="champ_code_postal">Code Postal</label>
                    <input placeholder="Code Postal" id="code_postal" type="number" tabindex="12" required autofocus>

                    <label for="champ_ville" class="champ_ville">Ville</label>
                    <input placeholder="ville" id="ville" type="text" tabindex="13" required autofocus>

                    <label for="champ_telephone" class="champ_telephone">Téléphone</label>
                    <input placeholder="Téléphone fixe" id="telephone" type="tel" tabindex="14">

                    <label for="champ_mobile" class="champ_mobile">Mobile</label>
                    <input placeholder="Tél Mobil" id="mobile" type="tel" tabindex="15" required autofocus>

                    <label for="champ_mail" class="champ_mail">Mail</label>
                    <input placeholder="Email" id="mail" type="email" tabindex="16" required autofocus>

                

                <button name="submit" type="submit" id="contact_submit" data submit="...Sending">
                    <h3>Envoi</h3>
                </button>
            </div>
        </form>
    </div>


    
    <?php include ('../includes/footer.php'); ?>
</body>






</html>