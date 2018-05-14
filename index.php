<!--Afficher le header de la page-->
<?php 
require_once("header.php"); 
require_once('includes/db.php'); ?>

<h2>Connexion à mon super site :</h2>

    <form action="login.php" method="POST">
        <div>
            <label for="email">Votre identifiant</label>
            <input type="email" name="email" id="email" required />
        </div>

        <div>
            <label for="motdepasse">Votre mot de passe</label>
            <input type="password" name="motdepasse" id="motdepasse" required />
        </div>

        <div>
            <button type="submit" name="connection">Connectez-vous !</button>
        </div>
    </form>

<?php
/*Afficher le footer de la page*/ 
require_once("footer.php"); ?>