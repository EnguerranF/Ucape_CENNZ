<?php require_once ('includes/session_start.php');

if (isset($_SESSION['utilisateur'])) {
    if (isset($_SESSION['utilisateur']) and $_SESSION['utilisateur']['admin'] != 0) {
        $message = "Bonjour ".$_SESSION['utilisateur']['id_utilisateur']." (administrateur)";
    }
    else{
        $message = "Bonjour ".$_SESSION['utilisateur']['id_utilisateur']." (utilisateur)";
    }
}
require_once('includes/header.php');  ?>

<section class="container" id="accueil">
    <div class="row">
        <div class="col-md-4" id="tableau">
            <h2>Navigation</h2>
            <table>
                <tr>
                    <a><td>Eleves</td></a>
                </tr>
                <tr>
                    <a><td>Detailed student profile</td></a>
                </tr>
                <tr>
                    <a><td>Documentations</td></a>
                </tr>
            </table>
        </div>
<div class="col-md-offset-1 col-md-7" id="Destinations">
    <h2>Souhaits de la destination</h2>
    <form action="#" method="POST" id="formulaire">
        <label for="choix">Choix 1 : </label>
    <select size="1" name="filtre"> 
        <option value="" selected="selected">Mexique</option>
        <option value="" selected="selected">Angleterre</option>
        <option value="" selected="selected">Irlande</option>
            </select><br><br>
    <label for="choix">Choix 2 : </label>
    <select size="1" name="filtre">
        <option value="" selected="selected">Angleterre</option>
        <option value="" selected="selected">Mexique</option>
        <option value="" selected="selected">Irlande</option>
    </select><br><br>
    <label for="choix">Choix 3 : </label>
    <select size="1" name="filtre">
        <option value="" selected="selected">Irlande</option>
        <option value="" selected="selected">Mexique</option>
        <option value="" selected="selected">Angleterre</option>
    </select><br><br>

    <p>En cas de d'impossibilité d'échanges, envisagez-vous de partir avec Terre des Langues ?</p>
    <input id="Oui" type="checkbox" value="Oui">Oui
    <input id="Non" type="checkbox" value="Non">Non<br>
    <br><textarea cols="100" rows="8"> Commentaires </textarea><br><br>
    <input id="Visa" type="checkbox" value="Visa du parent">Visa du parent <br><br>
    <input type="submit" name="choixDest" value="Validation des souhaits">
    </form>
</div>
</section>