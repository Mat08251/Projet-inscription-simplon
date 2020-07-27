<?php
require('connectbdd.php');
session_start();
$id = $_SESSION['id_candidat']; 

$reponse1 = !empty($_POST['reponse1']) ? $_POST['reponse1'] : NULL;
$reponse2 = !empty($_POST['reponse2']) ? $_POST['reponse2'] : NULL;
$reponse3 = !empty($_POST['reponse3']) ? $_POST['reponse3'] : NULL;
$reponse4 = !empty($_POST['reponse4']) ? $_POST['reponse4'] : NULL;

// SELECT dans la db WHERE id_candidat = $id AND id_question = id de ta question
// Tu fais la méthode $count = $req->rowCount(); si il y a 0 lignes : insert car ça existe pas
// Else : UPDATE

$rep1 = $bdd->prepare("SELECT * FROM reponses_candidats WHERE id_candidat = '$id' AND id_question = 1");
$rep1->execute();

$count = $rep1->rowCount();

if($count == 0){
    $reponse_page1 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
    VALUES (:id_candidat, :id_question, :message)");

    $reponse_page1->execute(array(
    'id_candidat' => $id,
    'id_question' => 1,
    'message' => $reponse1
    ));
    $rep1->closeCursor();
    $reponse_page1->closeCursor();
}else{
    $reponse_page1 = $bdd->prepare("UPDATE reponses_candidats SET message = :message WHERE id_candidat = '$id' AND id_question = 1");

    $reponse_page1->execute(array(
        'message' => $reponse1
    ));
$reponse_page1->closeCursor();
}

$rep2 = $bdd->prepare("SELECT * FROM reponses_candidats WHERE id_candidat = '$id' AND id_question = 2");
$rep2->execute();

$count = $rep2->rowCount();

if($count == 0){
    $reponse_page2 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
    VALUES (:id_candidat, :id_question, :message)");

    $reponse_page1->execute(array(
    'id_candidat' => $id,
    'id_question' => 2,
    'message' => $reponse2
    ));
    $rep2->closeCursor();
    $reponse_page2->closeCursor();
}else{
    $reponse_page2 = $bdd->prepare("UPDATE reponses_candidats SET message = :message WHERE id_candidat = '$id' AND id_question = 2");

    $reponse_page2->execute(array(
        'message' => $reponse2
    ));
$reponse_page1->closeCursor();
}

$rep3 = $bdd->prepare("SELECT * FROM reponses_candidats WHERE id_candidat = '$id' AND id_question = 3");
$rep3->execute();

$count = $rep3->rowCount();

if($count == 0){
    $reponse_page3 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
    VALUES (:id_candidat, :id_question, :message)");

    $reponse_page1->execute(array(
    'id_candidat' => $id,
    'id_question' => 3,
    'message' => $reponse3
    ));
    $rep3->closeCursor();
    $reponse_page3->closeCursor();
}else{
    $reponse_page3 = $bdd->prepare("UPDATE reponses_candidats SET message = :message WHERE id_candidat = '$id' AND id_question = 3");

    $reponse_page3->execute(array(
        'message' => $reponse3
    ));
$reponse_page1->closeCursor();
}

$rep4 = $bdd->prepare("SELECT * FROM reponses_candidats WHERE id_candidat = '$id' AND id_question = 4");
$rep4->execute();

$count = $rep4->rowCount();

if($count == 0){
    $reponse_page4 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
    VALUES (:id_candidat, :id_question, :message)");

    $reponse_page4->execute(array(
    'id_candidat' => $id,
    'id_question' => 4,
    'message' => $reponse4
    ));
    $rep4->closeCursor();
    $reponse_page4->closeCursor();
}else{
    $reponse_page4 = $bdd->prepare("UPDATE reponses_candidats SET message = :message WHERE id_candidat = '$id' AND id_question = 4");

    $reponse_page4->execute(array(
        'message' => $reponse4
    ));
$reponse_page4->closeCursor();
}
header('location: ../php/page3-formulaire.php');

?>