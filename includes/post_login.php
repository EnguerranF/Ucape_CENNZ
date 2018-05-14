<?php
    require_once('includes/db.php');

    if (!empty($_POST) && isset($_POST['connection'])) {
        if (!empty($_POST['email']) && !empty($_POST['motdepasse'])) {

            $request = $connection->prepare('SELECT * FROM utilisateur WHERE email = :email AND mot_de_passe = :mot_de_passe');
            $request->bindParam(':email', $_POST['email']);
            $passwordCrypted = sha1($_POST['motdepasse']);
            $request->bindParam(':mot_de_passe', $passwordCrypted);

            try {
                $request->execute();
                $results = $request->fetch();

                if ($results) {

                    $_SESSION['utilisateur'] = [
                        'email' => $results['email'],
                        'id_utilisateur' => $results['id_utilisateur'],
                    ];

                    header('Location: ./index.php');
                    //echo "<script type='text/javascript'>document.location.replace('index.php?page=mapage');</script>";
                    //exit(); 
                }

                echo '<p>Désolé vous n\'avez pas été trouvé dans la BDD</p>';
            } catch (\Exception $exception) {
                echo '<p>Oups une erreur s\'est produite</p>';
                echo '<p>'.$exception->getMessage().'</p>';
            }
        } else {
            $emailError = '<span style="color: red; font-size: 12px;">Veuillez remplir votre email.</span>';
            echo '<p>Oups une erreur s\'est produite durant la connexion.</p>';
            echo '<p>Veuillez remplir tous les champs.</p>';
        }
    }
?>