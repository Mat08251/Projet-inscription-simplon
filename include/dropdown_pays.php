<!------------------------------------->
<!-- Liste déroulante des pays -->
<!------------------------------------->
<form id="form_pays" name="form_pays" method="post" action="index.php">

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
                
                $req = $bdd->prepare("SELECT * FROM pays ORDER BY pays");
                $req -> execute();
                         
                //----------------------------------------------
                //crééer une boucle while pour remplir la liste
                //----------------------------------------------
                while($donnees = $req->fetch()) { ?>
                
                           
        <option value="<?php echo $donnees['id_pays'];?>"><?php echo $donnees['pays'];?></option>
        
        <?php } ?>
    
    </select>
  </label>
  
  <button name="button" value="button" type="submit" id="button">ENVOYER</button>
  <?php 
   
?> 