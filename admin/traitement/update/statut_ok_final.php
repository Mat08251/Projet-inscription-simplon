<?php 

include('../../../traitement/connectbdd.php');
$id=$_GET['id_candidat'];

$test=$bdd->prepare("SELECT statut_final FROM candidat");
$test->execute();
$count = $test->rowCount();

if($count == 0){
    $statut1 = $bdd->prepare("INSERT INTO  candidat (statut_final) 
             VALUES (:statut_final) WHERE id_candidat = '$id'");
        
             $statut1->execute(array(
             'statut_final' => 1
             ));
}else{
$statut = $bdd->prepare("UPDATE candidat SET statut_final = :statut_final WHERE id_candidat = '$id'");
        
             $statut->execute(array(
                 'statut_final' => 1
             ));
}
header('location: ../../developpeurWebPhase3.php?id=5');
?>