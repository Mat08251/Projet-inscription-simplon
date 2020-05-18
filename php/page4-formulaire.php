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

                <div class="div_formulaire">
                    <h2>FORMULAIRE D'INSCRIPTION EN LIGNE</h2>
                </div>
                <a class="information_champs_inscription">Veuillez remplir tous les champs s'il vous plaît</a>

                <div class="blocFormulaire"></div>
                <div class="etape2">
                    <h2>ETAPE 4</h2>
                </div>



                <div class="cadre1">
                    <p class="question">Quel est votre niveau d'anglais ?</p><br>

                    <hr>
                    <div>
                        <input type="checkbox" id="tb" name="tb" value="tb">
                        <label for="tb">Tres bien</label>
                    </div>
                    <div>
                        <input type="checkbox" id="b" name="b" value="b">
                        <label for="b">Bien</label>
                    </div>
                    <div>
                        <input type="checkbox" id="i" name="i" value="i">
                        <label for="i">Intermédiare</label>
                    </div>
                    <div>
                        <input type="checkbox" id="d" name="d" value="d">
                        <label for="d">Débutant</label>
                    </div>
                </div>

                <div class="cadre2">
                    <p class="question">Quel est le dernier diplome que vous ayez obtenu ?</p><br>
                    <hr>

                    <select>
                        <option>Sans diplôme</option>
                        <option>Brevet des collèges</option>
                        <option>CAP / BEP</option>
                        <option>BAC</option>
                    </select>
                </div>

                <div class="cadre3">
                    <p class="question">Etes vous disponible a temps plein des la pré-rentrée ?</p><br>

                    <hr>

                    <div>
                        <input type="checkbox" id="o" name="o" value="o">
                        <label for="o">Oui</label>
                    </div>
                    <div>
                        <input type="checkbox" id="n" name="n" value="n">
                        <label for="n">Non</label>
                    </div>


                </div>

                <div class="cadre4">
                    <p class="question">Sinon, quelles sont vos contraintes ?</p><br>
                    <hr>


                    <div class="content-cadre4">
                        <textarea id="info4" rows=11 cols=50 name="info4" placeholder="Votre réponse" required
                            index=4></textarea>
                    </div>
                </div>
                <div class="cadre5">
                    <p class="question">Statut (plusieurs réponses possibles)</p><br>
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
                    <div class="validation_inscription">Cliquez sur le lien ci-dessous pour finaliser votre inscription.
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
</body>

</html>