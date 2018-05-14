<!--Afficher le header de la page-->
<?php 
require_once ('includes/session_start.php');
require_once ('includes/post_login.php');
require_once('includes/db.php');
require_once('includes/header.php'); ?>

<h2>Connexion à mon super site :</h2>

    <form action="#" method="POST">
        <div>
            <label for="login">Votre email</label>
            <input type="login" name="login" id="login" required />
        </div>

        <div>
            <label for="password">Votre mot de passe</label>
            <input type="password" name="password" id="password" required />
        </div>

        <div>
            <button type="submit" name="connection">Connectez-vous !</button>
        </div>
    </form>

<?php
/*Afficher le footer de la page*/ 
require_once("includes/footer.php"); ?>