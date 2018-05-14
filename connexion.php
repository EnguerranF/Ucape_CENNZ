<!--Afficher le header de la page-->
<?php require_once("includes/header.php"); ?>
	<div class="container">
		<div id="texte3">
			<h1>Connexion</h1>
		</div>
		<div class="col-md-offset-5">
			<form action="traitement.php" method="POST" id="formulaire">
			    <label for="identifiant">Identifiant</label>
			    <input type="text" id="Identifiant" name="Identifiant"><br><br>
			    <label for="mot_de_passe">Mot de passe</label>
			    <input type="text" id="mot_de_passe" name="mot_de_passe"><br><br>
			    <input type="submit" name="sub" value="Se connecter">
			</form>
		</div>
	</div>