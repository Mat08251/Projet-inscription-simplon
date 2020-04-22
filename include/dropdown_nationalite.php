<!---------------------------------------->
<!-- Liste déroulante des nationalités -->
<!--------------------------------------->
<form id="form_nationalite" name="form_nationalite" method="post" action="index.php">

  <label>Sélectionnez une nationalité :
    <select name="nationalite" id="nationalite">
        <?php 
        
            //-------------------------------
            //connexion à la base de données
            //-------------------------------
            include ('include/connect_bdd.php');
                
                //-------------------------------
                //requête sur les pays
                //-------------------------------
                
                $req = $bdd->prepare("SELECT * FROM nationalite ORDER BY nationalite");
                $req -> execute();
                         
                //----------------------------------------------
                //crééer une boucle while pour remplir la liste
                //----------------------------------------------
                while($donnees = $req->fetch()) { ?>
                
                           
        <option value="<?php echo $donnees['id_nationalite'];?>" selected><?php echo $donnees['nationalite'];?></option>
        
        <?php } ?>
    
    </select>
  </label>
  
  <button name="button" value="button" type="submit" id="button">ENVOYER</button>
  <?php 
   echo"<pre>";
   var_dump($_POST);
   echo"</pre>"; 
?> 