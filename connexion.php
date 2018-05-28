<!--Afficher le header de la page-->
<?php 
if (!isset($_SESSION['utilisateur'])) {
    $message = "Bonjour visiteur";
}
require_once("includes/header.php");
require_once("includes/post_login.php"); ?>
	<div class="container">
		<div id="texte3">
			<h1>Connexion</h1>
		</div>
		<div class="col-md-offset-5">
			<form action="#" method="POST" id="formulaire">
			    <label for="identifiant">Identifiant *</label>
			    <input type="text" id="identifiant" name="identifiant" required><br><br>
			    <label for="mot_de_passe">Mot de passe *</label>
			    <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>
			    <input type="submit" name="connection" value="Se connecter">
			</form>
		</div>
	</div>