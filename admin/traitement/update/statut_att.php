<?php 

include('../../../traitement/connectbdd.php');
$id=$_GET['id_candidat'];
$id_form=$_GET['id'];

$test=$bdd->prepare("SELECT statut FROM candidat");
$test->execute();
$count = $test->rowCount();

if($count == 0){
    $statut1 = $bdd->prepare("INSERT INTO  candidat (statut) 
             VALUES (:statut) WHERE id_candidat = '$id'");
        
             $statut1->execute(array(
             'statut' => 3
             ));
}else{
$statut = $bdd->prepare("UPDATE candidat SET statut = :statut WHERE id_candidat = '$id'");
        
             $statut->execute(array(
                 'statut' => 3
             ));
}
header("location: ../../developpeurWeb.php?id=$id_form");
?>