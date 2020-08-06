<?php
require('connectbdd.php');
session_start();
$id = $_SESSION['id_candidat']; 
$id_form=$_GET['id_form'];

foreach($_POST['reponse'] as $key => $value) {
    $rep1 = $bdd->prepare("SELECT * FROM reponses_candidats WHERE id_candidat = '$id' AND id_question = '$key'");
    $rep1->execute();
    $count = $rep1->rowCount();

    // Si j'ai aucune ligne correspondant à cette question
    if ($count == 0) {

        $reponse_page1 = $bdd->prepare("INSERT INTO  reponses_candidats (id_candidat, id_question, message) 
             VALUES (:id_candidat, :id_question, :message)");
        
             $reponse_page1->execute(array(
             'id_candidat' => $id,
             'id_question' => $key,
             'message' => $value
             ));
             $rep1->closeCursor();
             $reponse_page1->closeCursor();
        }else{
             $reponse_page1 = $bdd->prepare("UPDATE reponses_candidats SET message = :message WHERE id_candidat = '$id' AND id_question = '$key'");
        
             $reponse_page1->execute(array(
                 'message' => $value
             ));
        $reponse_page1->closeCursor();

    }
}

header("location: ../php/page4-formulaire.php?id_form=$id_form");

?>