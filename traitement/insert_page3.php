<?php
require('connectbdd.php');
session_start();
$id = $_SESSION['id_candidat']; 

$reponse5 = !empty($_POST['reponse5']) ? $_POST['reponse5'] : NULL;
$reponse6 = !empty($_POST['reponse6']) ? $_POST['reponse6'] : NULL;
$reponse7 = !empty($_POST['reponse7']) ? $_POST['reponse7'] : NULL;
$reponse8 = !empty($_POST['reponse8']) ? $_POST['reponse8'] : NULL;

// SELECT dans la db WHERE id_candidat = $id AND id_question = id de ta question
// Tu fais la méthode $count = $req->rowCount(); si il y a 0 lignes : insert car ça existe pas
// Else : UPDATE

$rep1 = $bdd->prepare("SELECT * FROM reponses_candidats WHERE id_candidat = '$id' AND id_question = 5");
$rep1->execute();

$count = $rep1->rowCount();

if($count == 0){
    $reponse_page1 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
    VALUES (:id_candidat, :id_question, :message)");

    $reponse_page1->execute(array(
    'id_candidat' => $id,
    'id_question' => 5,
    'message' => $reponse5
    ));
    $rep1->closeCursor();
    $reponse_page1->closeCursor();
}else{
    $reponse_page1 = $bdd->prepare("UPDATE reponses_candidats SET message = :message WHERE id_candidat = '$id' AND id_question = 5");

    $reponse_page1->execute(array(
        'message' => $reponse5
    ));
$reponse_page1->closeCursor();
}

$rep2 = $bdd->prepare("SELECT * FROM reponses_candidats WHERE id_candidat = '$id' AND id_question = 6");
$rep2->execute();

$count = $rep2->rowCount();

if($count == 0){
    $reponse_page2 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
    VALUES (:id_candidat, :id_question, :message)");

    $reponse_page1->execute(array(
    'id_candidat' => $id,
    'id_question' => 6,
    'message' => $reponse6
    ));
    $rep2->closeCursor();
    $reponse_page2->closeCursor();
}else{
    $reponse_page2 = $bdd->prepare("UPDATE reponses_candidats SET message = :message WHERE id_candidat = '$id' AND id_question = 6");

    $reponse_page2->execute(array(
        'message' => $reponse6
    ));
$reponse_page1->closeCursor();
}

$rep3 = $bdd->prepare("SELECT * FROM reponses_candidats WHERE id_candidat = '$id' AND id_question = 7");
$rep3->execute();

$count = $rep3->rowCount();

if($count == 0){
    $reponse_page3 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
    VALUES (:id_candidat, :id_question, :message)");

    $reponse_page1->execute(array(
    'id_candidat' => $id,
    'id_question' => 7,
    'message' => $reponse7
    ));
    $rep3->closeCursor();
    $reponse_page3->closeCursor();
}else{
    $reponse_page3 = $bdd->prepare("UPDATE reponses_candidats SET message = :message WHERE id_candidat = '$id' AND id_question = 7");

    $reponse_page3->execute(array(
        'message' => $reponse7
    ));
$reponse_page1->closeCursor();
}

$rep4 = $bdd->prepare("SELECT * FROM reponses_candidats WHERE id_candidat = '$id' AND id_question = 8");
$rep4->execute();

$count = $rep4->rowCount();

if($count == 0){
    $reponse_page4 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
    VALUES (:id_candidat, :id_question, :message)");

    $reponse_page4->execute(array(
    'id_candidat' => $id,
    'id_question' => 8,
    'message' => $reponse8
    ));
    $rep4->closeCursor();
    $reponse_page4->closeCursor();
}else{
    $reponse_page4 = $bdd->prepare("UPDATE reponses_candidats SET message = :message WHERE id_candidat = '$id' AND id_question = 8");

    $reponse_page4->execute(array(
        'message' => $reponse8
    ));
$reponse_page4->closeCursor();
}
header('location: ../php/page4-formulaire.php');

?>