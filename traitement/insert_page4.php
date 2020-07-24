<?php
require('connectbdd.php');
session_start();
$id = $_SESSION['id_candidat']; 

$reponse9 = !empty($_POST['reponse9']) ? $_POST['reponse9'] : NULL;
$reponse10 = !empty($_POST['reponse10']) ? $_POST['reponse10'] : NULL;
$reponse11 = !empty($_POST['reponse11']) ? $_POST['reponse11'] : NULL;
$reponse12 = !empty($_POST['reponse12']) ? $_POST['reponse12'] : NULL;
$reponse13 = !empty($_POST['reponse']) ? $_POST['reponse'] : NULL;
$reponse = serialize($reponse13);

var_dump($reponse);

$rep1 = $bdd->prepare("SELECT * FROM reponses_candidats WHERE id_candidat = '$id' AND id_question = 9");
$rep1->execute();

$count = $rep1->rowCount();

if($count == 0){
    $reponse_page1 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
    VALUES (:id_candidat, :id_question, :message)");

    $reponse_page1->execute(array(
    'id_candidat' => $id,
    'id_question' => 9,
    'message' => $reponse9
    ));
    $rep1->closeCursor();
    $reponse_page1->closeCursor();
}else{
    $reponse_page1 = $bdd->prepare("UPDATE reponses_candidats SET message = :message WHERE id_candidat = '$id' AND id_question = 9");

    $reponse_page1->execute(array(
        'message' => $reponse9
    ));
$reponse_page1->closeCursor();
}

$rep2 = $bdd->prepare("SELECT * FROM reponses_candidats WHERE id_candidat = '$id' AND id_question = 10");
$rep2->execute();

$count = $rep2->rowCount();

if($count == 0){
    $reponse_page2 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
    VALUES (:id_candidat, :id_question, :message)");

    $reponse_page1->execute(array(
    'id_candidat' => $id,
    'id_question' => 10,
    'message' => $reponse10
    ));
    $rep2->closeCursor();
    $reponse_page2->closeCursor();
}else{
    $reponse_page2 = $bdd->prepare("UPDATE reponses_candidats SET message = :message WHERE id_candidat = '$id' AND id_question = 10");

    $reponse_page2->execute(array(
        'message' => $reponse10
    ));
$reponse_page1->closeCursor();
}

$rep3 = $bdd->prepare("SELECT * FROM reponses_candidats WHERE id_candidat = '$id' AND id_question = 11");
$rep3->execute();

$count = $rep3->rowCount();

if($count == 0){
    $reponse_page3 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
    VALUES (:id_candidat, :id_question, :message)");

    $reponse_page1->execute(array(
    'id_candidat' => $id,
    'id_question' => 11,
    'message' => $reponse11
    ));
    $rep3->closeCursor();
    $reponse_page3->closeCursor();
}else{
    $reponse_page3 = $bdd->prepare("UPDATE reponses_candidats SET message = :message WHERE id_candidat = '$id' AND id_question = 11");

    $reponse_page3->execute(array(
        'message' => $reponse11
    ));
$reponse_page1->closeCursor();
}

$rep4 = $bdd->prepare("SELECT * FROM reponses_candidats WHERE id_candidat = '$id' AND id_question = 12");
$rep4->execute();

$count = $rep4->rowCount();

if($count == 0){
    $reponse_page4 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
    VALUES (:id_candidat, :id_question, :message)");

    $reponse_page4->execute(array(
    'id_candidat' => $id,
    'id_question' => 12,
    'message' => $reponse12
    ));
    $rep4->closeCursor();
    $reponse_page4->closeCursor();
}else{
    $reponse_page4 = $bdd->prepare("UPDATE reponses_candidats SET message = :message WHERE id_candidat = '$id' AND id_question = 12");

    $reponse_page4->execute(array(
        'message' => $reponse12
    ));
$reponse_page4->closeCursor();
}


$rep4 = $bdd->prepare("SELECT * FROM reponses_candidats WHERE id_candidat = '$id' AND id_question = 13");
$rep4->execute();

$count = $rep4->rowCount();

if($count == 0){
    $reponse_page4 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
    VALUES (:id_candidat, :id_question, :message)");

    $reponse_page4->execute(array(
    'id_candidat' => $id,
    'id_question' => 13,
    'message' => $reponse
    ));
    $rep4->closeCursor();
    $reponse_page4->closeCursor();
}else{
    $reponse_page4 = $bdd->prepare("UPDATE reponses_candidats SET message = :message WHERE id_candidat = '$id' AND id_question = 13");

    $reponse_page4->execute(array(
        'message' => $reponse
    ));
$reponse_page4->closeCursor();
}
header('location: ../php/fin-inscription.php');

?>