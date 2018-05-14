<html>
    <head>
        <title>Choix des établissements</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
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
            <label for="choix">Choix 1 : </label>
            <select size="1" name="filtre"> 
                <option value="" selected="selected">Mexique</option>
                    </select><br><br>
            <label for="choix">Choix 2 : </label>
            <select size="1" name="filtre">
                <option value="" selected="selected">Angleterre</option>
            </select><br><br>
            <label for="choix">Choix 3 : </label>
            <select size="1" name="filtre">
                <option value="" selected="selected">Irlande</option>
            </select><br><br>

            <p>En cas de d'impossibilité d'échanges, envisagez-vous de partir avec Terre des Langues ?</p>
            <input id="Oui" type="checkbox" value="Oui">Oui
            <input id="Non" type="checkbox" value="Non">Non<br>
            <br><textarea cols="100" rows="8"> Commentaires </textarea><br><br>
            <input id="Visa" type="checkbox" value="Visa du parent">Visa du parent <br><br>
            <input type="button" value="Validation des souhaits">
        </div>
        </section>
    </body>
</html>