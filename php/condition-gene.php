<?php
require('../traitement/connectbdd.php');
 session_start(); 
$id_form=$_GET['id_form'];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/condition-gene.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
    <script src="../parallax/parallax.min.js"></script>
    <title>Condition-général</title>
</head>
<body>
    <!--Navbar-->
     <?php include ('../includes/navbar.php'); ?>

     <!--Titre du formulaire-->
     <div class="">
         <div class="col-md-12 text-center">
             <h1>Formation Développeur(se) Web & web mobile :<br>
                 formulaire de candidature</h1>
         </div>
     </div>

     <!--Bloc des cards des informations-->
     <div class="card w-75">
        <div class="card-body">
            <p class="card-text text-center"> FERMETURE DU FORMULAIRE LE 17 AOÛT 2020 (MINUIT) - ENTRETIENS FINAUX PREVUS A PARTIR DU 20 AOÛT 2020 </p>
            <p class="card-text text-center"> DEMARRAGE DE LA FORMATION DEBUT SEPTEMBRE 2020 AU CCI </p>
        </div>
    </div>


    <?php 
                $req=$bdd->prepare("SELECT * FROM condition_gene ");
                $req->execute();

                while ($condition = $req->fetch()) {
                    $id_condition = $condition['id_condition'];
                
                ?>
    <div class="card w-75">
        <div class="card-body">
            <p class="card-text"><?= $condition['question'] ?></p>
        </div>
                
   </div>
   <hr class="barre-deco" style="background-color: #F01616"></hr>
   <?php }
            $req->closeCursor();
        ?>
   
    

    <form class="envoyer" method="POST" action="">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="case" value="1" id="defaultCheck1" style="width: 20px; height: 20px;">
        <label class="form-check-label" for="defaultCheck1">
            Lu et Approuvé<span class="etoile">*</span>
        </label>    
    </div>
    <a href="../php/page1-formulaire.php?id_form=<?=$id_form?>" class="bouton-suivant align-items-center"><button type="button" class="btn align-items-center">Suivant >></button></a>
    <?php 
        if(isset($_POST['case'])=='1'){
   echo '';
} else {
    header('location:condition-gene.php?success=2');
} ?>
    </form>
    <!--Fin du bloc des informations-->
    
    <!--Footer-->
     <?php include ('../includes/footer.php'); ?>

     <!--Javascript-->
     <script src="https://unpkg.com/scrollreveal"></script>
     <script src="../js/condition-gene.js"></script>
</body>
</html>