<?php session_start(); 
require('../traitement/connectbdd.php');
$id = $_SESSION['id_candidat'];
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
                <a class="information_champs_inscription">Veuillez remplir tout les champs svp</a>

            </div>

            
         <div class="form_contact w-75 mx-auto ml-3">
            <form id="form_contact"action="../traitement/inscription.php?id=<?=$id?>" method="post" >
            
            <?php 
            $req=$bdd->prepare("SELECT * FROM question_infos");
            $req->execute();
            while ($donnees =$req->fetch())
            {
                
            ?>
            <div class="form-group row">
                <label for="Nom" class="col-sm-6 col-form-label"><?=$donnees['question'];?><span class="asterisque">*</span></label>
                    <div class="col-sm-6">
                    <?php
                    $rer = $bdd->prepare("SELECT id_question_infos FROM infos_reponses");
                    $rer->execute();

                    $id_question = $rer->fetch();

                    $idquestion = $id_question['id_question_infos'];


                    $ruq = $bdd->prepare("SELECT reponse FROM infos_reponses WHERE id_candidat = '$id' AND id_question_infos = '$idquestion'");
                    $ruq->execute();

                    $reponse = $ruq->fetch();
               ?>
                    <input type="text" class="entree form-control" id="nom" placeholder="<?=$reponse['reponse'];?>">
                </div>
            </div>   
            <?php } ?>
            
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