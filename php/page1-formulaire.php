<?php session_start(); 
require('../traitement/connectbdd.php');
$id= $_SESSION['id_candidat'];
?>
<!Doctype html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Formulaire d'inscription</title>
    <meta name="description" content="Creation formulaire d'inscription à une formation" />
    <meta http-equiv="content-language" content="fr" />
    <link href="../css/style2.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include ('../includes/navbar.php'); ?>




    <div class="div_container">
        <div class="div_titre_formation">
            <h1>DEVELOPPEUR(se) WEB & WEB MOBILE</h1>
        </div>

        <div class="div_formulaire">
            <h2>FORMULAIRE D'INSCRIPTION EN LIGNE
        </div>
        <a class="information_champs_inscription"><span class="asterisque">(*)</span>Veuillez remplir tout les champs
            svp</a>

    </div>

    <div class="blocFormulaire">
        <div class="etape2">
            <h2>ETAPE 1</h2>
        </div>

        <div class="form_contact w-75 mx-auto ml-3">
            <form id="form_contact" action="../traitement/inscription_devweb.php " method="post">

                <?php 
            $req=$bdd->prepare("SELECT * FROM candidat WHERE id_candidat ='$id'");
            $req->execute();
            $donnees =$req->fetch();
            
                
            ?>
                <div class="form-group row">
                    <label for="Nom" class="col-sm-6 col-form-label">Nom<span class="asterisque">*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="entree form-control" id="nom" name="nom"
                            value="<?= isset($donnees['nom']) ? $donnees['nom'] : "" ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Prénom" class="col-sm-6 col-form-label">Prénom<span class="asterisque">*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="entree form-control" id="nom" name="prenom"
                            value="<?= isset($donnees['prenom']) ? $donnees['prenom'] : "" ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Nom" class="col-sm-6 col-form-label">Nom de Jeune Fille</label>
                    <div class="col-sm-6">
                        <input type="text" class="entree form-control" id="nom" name="nom_jeune_fille"
                            value="<?= isset($donnees['nomJeuneFille']) ? $donnees['nomJeuneFille'] : "" ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Prénom" class="col-sm-6 col-form-label">Date de Naissance<span
                            class="asterisque">*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="entree form-control" id="nom" name="date_de_naissance"
                            value="<?= isset($donnees['dateNaissance']) ? $donnees['dateNaissance'] : "" ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Nom" class="col-sm-6 col-form-label">nationalité<pan class="asterisque">*</span></label>
                    <div class="col-sm-6">
                        <select class="custom-select" name="nationalite" id="etablissement-font-2" required>
                            <option value="" disabled selected>Selectionnez Votre Nationalité</option>
                            <?php $test = $bdd->prepare("SELECT * FROM question WHERE id_question = 20");
                                        $test->execute();

                                        $json = $test->fetch();
                                        $pays = $json['cm'];
                                        $obj = json_decode($pays);
                                        foreach($obj as $key => $value){?>
                            <option value="<?= $key ?>"><?= $key ?></option>
                            <?php }
                                        ?>
                        </select></div>
                </div>
        </div>
        <div class="form-group row">
            <label for="Prénom" class="col-sm-6 col-form-label">Pays<span class="asterisque">*</span></label>
            <div class="col-sm-6">
                <select class="custom-select" name="pays" id="etablissement-font-2" required>
                    <option value="" disabled selected>Selectionnez Votre Pays</option>
                    <?php $test = $bdd->prepare("SELECT * FROM question WHERE id_question = 19");
                                        $test->execute();

                                        $json = $test->fetch();
                                        $pays = $json['cm'];
                                        $obj = json_decode($pays);
                                        foreach($obj as $key => $value){?>
                    <option value="<?= $key ?>"><?= $key ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="Nom" class="col-sm-6 col-form-label">Sexe<span class="asterisque">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="entree form-control" id="nom" name="sexe"
                    value="<?= isset($donnees['sexe']) ? $donnees['sexe'] : "" ?>"><br>
            </div>
        </div>
        <div class="form-group row">
            <label for="Prénom" class="col-sm-6 col-form-label">Rue<span class="asterisque">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="entree form-control" id="nom" name="adresse"
                    value="<?= isset($donnees['rue']) ? $donnees['rue'] : "" ?>"><br>
            </div>
        </div>
        <div class="form-group row">
            <label for="Nom" class="col-sm-6 col-form-label">Numéro de Rue<pan class="asterisque">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="entree form-control" id="nom" name="ligne2"
                    value="<?= isset($donnees['numeroRue']) ? $donnees['numeroRue'] : "" ?>"><br>
            </div>
        </div>
        <div class="form-group row">
            <label for="Prénom" class="col-sm-6 col-form-label">Complément d'adresse</span></label>
            <div class="col-sm-6">
                <input type="text" class="entree form-control" id="nom" name="ligne"
                    value="<?= isset($donnees['complementAdresse']) ? $donnees['complementAdresse'] : "" ?>"><br>
            </div>
        </div>
        <div class="form-group row">
            <label for="Nom" class="col-sm-6 col-form-label">Ville<span class="asterisque">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="entree form-control" id="nom" name="ville"
                    value="<?= isset($donnees['ville']) ? $donnees['ville'] : "" ?>"><br>
            </div>
        </div>
        <div class="form-group row">
            <label for="Prénom" class="col-sm-6 col-form-label">Code Postal<span class="asterisque">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="entree form-control" id="nom" name="code_postal"
                    value="<?= isset($donnees['codePostal']) ? $donnees['codePostal'] : "" ?>"><br>
            </div>
        </div>
        <div class="form-group row">
            <label for="Nom" class="col-sm-6 col-form-label">Téléphone Fixe</span></label>
            <div class="col-sm-6">
                <input type="text" class="entree form-control" id="nom" name="telephone"
                    value="<?= isset($donnees['telFixe']) ? $donnees['telFixe'] : "" ?>"><br>
            </div>
        </div>
        <div class="form-group row">
            <label for="Prénom" class="col-sm-6 col-form-label">Mobil<span class="asterisque">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="entree form-control" id="nom" name="mobile"
                    value="<?= isset($donnees['mobil']) ? $donnees['mobil'] : "" ?>"><br>
            </div>
        </div>
        <div class="form-group row">
            <label for="Nom" class="col-sm-6 col-form-label">Mail<span class="asterisque">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="entree form-control" id="nom" name="mail"
                    value="<?= isset($donnees['mail']) ? $donnees['mail'] : "" ?>"><br>
            </div>
        </div>
        <div class="form-group row">
            <label for="Prénom" class="col-sm-6 col-form-label">Pseudo<span class="asterisque">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="entree form-control" id="nom" name="pseudo"
                    value="<?= isset($donnees['pseudo']) ? $donnees['pseudo'] : "" ?>"><br>
            </div>
        </div>


    </div>

    <div class="bouton">
        <button type="submit" class="bouton-suivant btn-lg">Suivant</button>
    </div>
    </div>
    </form>
    </div>


    </div>









    <div class="containers">
        <ul class="progressbar ">
            <li class="active">Etape 1</li>
            <li class="">Etape 2</li>
            <li class="">Etape 3</li>
            <li>Etape 4</li>
            <li>Etape 5</li>
        </ul>
    </div>


    <?php include ('../includes/footer.php'); ?>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../js/page1-formulaire.js"></script>
</body>






</html>