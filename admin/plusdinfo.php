<?php 
require('../traitement/connectbdd.php');
$id_candidat=$_GET['id_candidat'];
$id=$_GET['id'];?>
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
    <?php include ('../includes/navbar.php'); ?>

    <div class="form_contact">
        <form id="form_contact" method="post" action="../traitement/insert_page2.php">

            <div class="div_container">
                <?php 
                $req=$bdd->prepare("SELECT * FROM question WHERE id_formulaire = '$id' ORDER BY position ");
                $req->execute();

                while ($donnees = $req->fetch())
                      { 
                          $id_question = $donnees['id_question'];?>
                
                <div class="cadre1 w-75 mx-auto mb-5">
                    <h2><?= $donnees['question'] ?></h2><br>
                    <hr>
                    <?php
                    $message = $bdd->prepare("SELECT message FROM reponses_candidats WHERE id_candidat = '$id_candidat' AND id_question = '$id_question'");
                            $message->execute();

                            $msg = $message->fetch();
                       ?>
                    <textarea id="info1" name="reponse[<?=$id_question?>]" rows=6 placeholder="pas de reponse" required index=4><?php if(isset($msg['message'])){echo $msg['message'];}else{}?></textarea>
                    <?php  ?>
                </div>
                      <?php }
                      $req->closeCursor(); 
                      $message->closeCursor();?>
</body>

</html>