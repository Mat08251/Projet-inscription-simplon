<!-------------------------------------->
<!-- Formulaire d'inscription Simplon -->
<!-------------------------------------->
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire d'inscription Simplon</title>
    </head>

<body id="body">
    

<?php

//-------------------------------
//connexion à la base de données
//-------------------------------
include ('include/connect_bdd.php');

$req = $bdd->prepare("SELECT * FROM pays");
$req -> execute();
while($donnees = $req->fetch()){
//Afficher le résultat de la requête 
echo"<br>";  
print_r($donnees['pays']);
echo"</br>"; 
?>
<?php   }   ?> 

</html>