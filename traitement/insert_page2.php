<?php
require('connectbdd.php');
session_start();
$id = $_SESSION['id_candidat']; 

$reponse1 = !empty($_POST['reponse1']) ? $_POST['reponse1'] : NULL;
$reponse2 = !empty($_POST['reponse2']) ? $_POST['reponse2'] : NULL;
$reponse3 = !empty($_POST['reponse3']) ? $_POST['reponse3'] : NULL;
$reponse4 = !empty($_POST['reponse4']) ? $_POST['reponse4'] : NULL;


$reponse_page2 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
                                VALUES (:id_candidat, :id_question, :message)");

    $reponse_page2->execute(array(
        'id_candidat' => $id,
        'id_question' => 1,
        'message' => $reponse1
    ));
$reponse_page2->closeCursor();

$reponse_page2 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
                                VALUES (:id_candidat, :id_question, :message)");

    $reponse_page2->execute(array(
        'id_candidat' => $id,
        'id_question' => 2,
        'message' => $reponse2
    ));
$reponse_page2->closeCursor();

$reponse_page2 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
                                VALUES (:id_candidat, :id_question, :message)");

    $reponse_page2->execute(array(
        'id_candidat' => $id,
        'id_question' => 3,
        'message' => $reponse3
    ));
$reponse_page2->closeCursor();

$reponse_page2 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
                                VALUES (:id_candidat, :id_question, :message)");

    $reponse_page2->execute(array(
        'id_candidat' => $id,
        'id_question' => 4,
        'message' => $reponse4
    ));
$reponse_page2->closeCursor();

header('location: ../php/page3-formulaire.php');

?>