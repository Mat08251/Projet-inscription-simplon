
<div id="connexion" class="modal">
<center>  <?php if(isset($_GET['success'])) {
                if($_GET['success'] == 1) {?>
                    <div class="alert alert-success" role="alert">
                    Vous etes bien inscrit.
                    </div>
            <?php }}
            ?>
            </center>
        <form id="form_connexion" action="traitement/connectuser.php" method="post">
            <h3 class="titre_form">IDENTIFIANTS</h3>
            <fieldset>
                <input placeholder="Email.." name="mail" id="mail" type="email" tabindex="1" required>
            </fieldset>
            <fieldset>
                <input placeholder="Mot de passe.." name="mdp" id="mdp" type="password" tabindex="2"
                    required>
            </fieldset>
            <fieldset class="space">
                <input class="checkb" name="lsouvenir" id="lsouvenir" type="checkbox" tabindex="3">
                <label for="ssouvenir">Se souvenir de moi</label>
            </fieldset>
            <fieldset>
                <a href="php/inscription.php">Crée un compte</a>
            </fieldset>
            <fieldset>
            <form>
                <a href="index.php"><input type = "button" value = "Retour"  onclick = "history.back()" class="mb-5"></a>
            </form> 
                <button name="submit" type="submit">SOUMETTRE</button>
            </fieldset>
        </form>
    </div>