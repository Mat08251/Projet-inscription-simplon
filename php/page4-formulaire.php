<?php 
require('../traitement/connectbdd.php');
session_start();
$id = $_SESSION['id_candidat'];  ?>
<!Doctype html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Formulaire d'inscription</title>
    <meta name="description" content="Creation formulaire d'inscription à une formation" />
    <meta http-equiv="content-language" content="fr" />
    <link href="../css/stylepage4.css" rel="stylesheet" type="text/css" />
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

    <div class="form_contact">
        <form id="form_contact" method="post" action="traitement/insert_contact.php">

            <div class="div_container">
                <div class="div_navbar"></div>
                <div class="div_titre_formation"><br>
                    <h1>DEVELOPPEUR(se) WEB & WEB MOBILE</h1>
                </div>

                <div class="div_formulaire pt-1">
                    <h2>FORMULAIRE D'INSCRIPTION EN LIGNE</h2>
                </div>
                <a class="information_champs_inscription">Veuillez remplir tous les champs s'il vous plaît</a>

                <div class="blocFormulaire"></div>
                <div class="etape2">
                    <h2>ETAPE 4</h2>
                </div>

                <?php
                            $req = $bdd->prepare("SELECT * FROM question WHERE id_question = 9");
                            $req->execute();

                            $donnees = $req->fetch();
                       ?>

                <div class="cadre1">
                    <p class="question"><?= $donnees['question'] ?></p><br>

                    <hr>
                    <select class="nationalite" name="nationalite" id="nationalite" required>
                     <option value="" disabled selected>Sélectionnez votre niveau</option>
                        <option name="langue1" value="Tres bien">Tres bien</option>
                        <option name="langue2" value="Bien">Bien</option>
                        <option name="langue3" value="Intermédiare">Intermédiare</option>
                        <option name="langue4" value="Débutant">Débutant</option>
                     </select>
                </div>


                <?php
                            $req = $bdd->prepare("SELECT * FROM question WHERE id_question = 10");
                            $req->execute();

                            $donnees = $req->fetch();
                       ?>

                <div class="cadre2">
                    <p class="question"><?= $donnees['question'] ?></p><br>
                    <hr>

                    <select>
                    <option value="" disabled selected>Sélectionnez votre diplôme</option>
                        <option name="diplome1" value="Sans diplôme">Sans diplôme</option>
                        <option name="diplome2" value="Brevet des collèges">Brevet des collèges</option>
                        <option name="diplome3" value="CAP / BEP">CAP / BEP</option>
                        <option name="diplome4" value="BAC">BAC</option>
                    </select>
                </div>


                <?php
                            $req = $bdd->prepare("SELECT * FROM question WHERE id_question = 11");
                            $req->execute();

                            $donnees = $req->fetch();
                       ?>

                <div class="cadre3">
                    <p class="question"><?= $donnees['question'] ?></p><br>

                    <hr>
                    
                    <div>
                        <input type="radio" id="o" name="disponibilite" value="oui">
                        <label for="o">Oui</label>
                    </div>
                    <div>
                        <input type="radio" id="n" name="disponibilite" value="non">
                        <label for="n">Non</label>
                    </div>


                </div>


                <?php
                            $req = $bdd->prepare("SELECT * FROM question WHERE id_question = 12");
                            $req->execute();

                            $donnees = $req->fetch();
                       ?>

                <div class="cadre4">
                    <p class="question"><?= $donnees['question'] ?></p><br>
                    <hr>


                    <div class="content-cadre4">
                        <textarea id="info4" rows=11 cols=50 name="info4" placeholder="Votre réponse" required
                            index=4></textarea>
                    </div>
                </div>


                <?php
                            $req = $bdd->prepare("SELECT * FROM question WHERE id_question = 13");
                            $req->execute();

                            $donnees = $req->fetch();
                       ?>

                <div class="cadre5">
                    <p class="question"><?= $donnees['question'] ?></p><br>
                    <hr>


                    <div>
                        <input type="checkbox" id="eleve_etudiant" name="eleve_etudiant" value="eleve_etudiant">
                        <label for="eleve_etudiant">Eleve ou étudiant</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Salarie" name="Salarie" value="Salarie">
                        <label for="Salarie">Salarié</label>
                    </div>
                    <div>
                        <input type="checkbox" id="i_pole_emploi" name="i_pole_emploi" value="i_pole_emploi">
                        <label for="i_pole_emploi">Demandeur d'emploi indemnisé par Pole emploi</label>
                    </div>
                    <div>
                        <input type="checkbox" id="ni_pole_emploi" name="ni_pole_emploi" value="ni_pole_emploi">
                        <label for="ni_pole_emploi">Demandeur d'emploi non indemnisé par Pole emploi</label>
                    </div>
                    <div>
                        <input type="checkbox" id="RSA" name="RSA" value="RSA">
                        <label for="RSA">Allocataire RSA</label>
                    </div>
                    <div>
                        <input type="checkbox" id="ASS" name="ASS" value="ASS">
                        <label for="ASS">Allocataire ASS</label>
                    </div>
                    <div>
                        <input type="checkbox" id="ASH" name="ASH" value="ASH">
                        <label for="ASH">Allocataire ASH</label>
                    </div>
                    <div>
                        <input type="checkbox" id="other" name="other" value="other">
                        <label for="other">Autre</label>
                    </div>
                </div>


                <div class="cadre_inscription_pied_page">
                    <div class="validation_inscription pt-2">Cliquez sur le lien ci-dessous pour finaliser votre inscription.
                    </div>
                </div>



                <div class="button fbtn"></div>
                <button name="precedent_submit" type="submit" id="precedent_submit" data submit="...Sending">Je
                    m'inscrit à cette formation</button>

            </div>

    </div>
    </form>
    </div>

    <div class="containers">
        <ul class="progressbar ">
            <li class="active">Etape 1</li>
            <li class="active">Etape 2</li>
            <li class="active">Etape 3</li>
            <li class="active">Etape 4</li>
            <li>Etape 5</li>
        </ul>
    </div>

    <?php include ('../includes/footer.php'); ?>

    <script src="https://unpkg.com/scrollreveal"></script>
</body>

</html>