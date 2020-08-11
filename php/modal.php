
<div id="connexion" class="modal">

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
            <fieldset class="section_bouton">
            <form>
                <a href="index.php"><input type = "button" value = "Retours"  onclick = "history.back()" class="retour mb-5"></a>
            </form> 
                <button name="submit" type="submit" class="soumettre">SOUMETTRE</button>
            </fieldset>
        </form>
    </div>