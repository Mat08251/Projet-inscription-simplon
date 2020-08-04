<?php 
require('../traitement/connectbdd.php');
session_start();
$id = $_SESSION['id_candidat'];  
if(isset($id)){?>
<!Doctype html>
<html lang="fr">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Formulaire d'inscription</title>
    <meta name="description" content="Creation formulaire d'inscription à une formation" />
    <meta http-equiv="content-language" content="fr" />
    <link href="../css/stylepage2.css" rel='stylesheet' type='text/css' />
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
    <!--Navbar-->
    <?php include ('../includes/navbar.php'); ?>

    
            <!--Titre du formulaire-->
            <div class="div_container">
                <div class="div_navbar"></div>
                <div class="div_titre_formation"><br>
                    <h1 class="titreDebut">DEVELOPPEUR(se) WEB & WEB MOBILE</h1>
                </div>

                <div class="div_formulaire text-center">
                    <h2>FORMULAIRE D'INSCRIPTION EN LIGNE<h2>
                </div>
                <div class="information_champs_inscription">
                    <p>Veuillez remplir tout les champs svp</p>
                </div>

                <!--Début du bloc du formulaire-->
                <div class="blocFormulaire">
                    <div class="etape2">
                        <h2>ETAPE 2</h2>
                    </div>

                <div class="form_contact">
                    <form id="form_contact" method="post" action="../traitement/insert_page2.php">
                <?php 
                $req=$bdd->prepare("SELECT * FROM question WHERE etape = 1 ORDER BY position ");
                $req->execute();

                while ($donnees = $req->fetch())
                      { 
                          $id_question = $donnees['id_question'];
                          $type = $donnees['type'];?>
                
                <div class="cadre1 w-75 mx-auto mb-5">
                    <h2><?= $donnees['question'] ?></h2><br>
                    <hr>
                    <?php
                    $message = $bdd->prepare("SELECT message FROM reponses_candidats WHERE id_candidat = '$id' AND id_question = '$id_question'");
                            $message->execute();

                            $msg = $message->fetch();
                            if($type == 2){?>
                    <textarea id="info1" name="reponse[<?=$id_question?>]" rows=6 placeholder="Votre réponse" required index=4><?php if(isset($msg['message'])){echo $msg['message'];}else{}?></textarea>
                            <?php }elseif($type == 1){?>
                                <input style="border-color:red;" type="text" class="entree form-control" id="info1" name="reponse[<?=$id_question?>]" value="<?php if(isset($msg['message'])){echo $msg['message'];}else{}?>"><br>
                            <?php }elseif($type == 3){?>
                                <select class="custom-select" name="etablissement" id="etablissement-font-2" required>
                                <option value="" disabled selected>Veuillez choisir un Pays</option>
                                <option value="pays">France</option>
                                <option value="pays">Luxembourg</option>
                                <option value="pays">Belgique</option>
                                <option value="pays">Angleterre</option>
                              </select>
                            <?php } ?>
                </div>
                      <?php }
                      $req->closeCursor(); 
                      $message->closeCursor();?>

                </div> 
            
                <!--Bouton d'envoie formulaire--> 
                <div class="bouton">
                    <a href="../php/page1-formulaire.php" class="bouton-precedent align-items-center"><button type="button"
                            class="btn  btn-lg pt-1"><span class="texte-bouton text-center">Précédent</span></button></a>
          
                    <button type="submit"
                            class="bouton-suivant btn-lg">Suivant</button>
                </div>
            </div>
        </form>
    </div>
    <!--Fin du bloc du formulaire-->
    
    <!--Progressbar bas de page-->  
    <div class="barreDeProgression">
        <ul class="progressbar">
            <li class="active">Etape 1</li>
            <li class="active">Etape 2</li>
            <li class="">Etape 3</li>
            <li>Etape 4</li>
            <li>Etape 5</li>
        </ul>
    </div>

    <!--Footer--> 
    <?php include ('../includes/footer.php'); ?>
    
    <!--Javascript-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../js/page2-formulaire.js"></script>
</body>

</html>
                            <?php }else{header('location: ../index.php');}