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
             

<form id="form1" name="form1" method="" action="">

  <label>Sélectionnez un pays :
    <select name="pays" id="pays">
        <?php 
            //-------------------------------
            //connexion à la base de données
            //-------------------------------
            include ('include/connect_bdd.php');
                //-------------------------------
                //requête sur les pays
                //-------------------------------
                $req = $bdd->prepare("SELECT * FROM pays");
                $req -> execute();
                    //----------------------------------------------
                    //crééer une boucle while pour remplir la liste
                    //----------------------------------------------
                    
                    while($donnees = $req->fetch()) { ?>

        <option value="pays" selected><?php echo $donnees['pays'];?></option>
        <?php } ?>
    </select>
  </label>


</form>
</html>