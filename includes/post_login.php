<?php
    require_once('includes/db.php');

    if (!empty($_POST) && isset($_POST['connection'])) {
        if (!empty($_POST['identifiant']) && !empty($_POST['mot_de_passe'])) {

            $request = $connection->prepare('SELECT * FROM user WHERE id_user = :identifiant AND password = :mot_de_passe');
            $request->bindParam(':identifiant', $_POST['identifiant']);
            $passwordCrypted = $_POST['mot_de_passe'];
            $request->bindParam(':mot_de_passe', $passwordCrypted);

            try {
                $request->execute();
                $results = $request->fetch();

                if ($results) {

                    $_SESSION['utilisateur'] = [
                        'email' => $results['email'],
                        'id_utilisateur' => $results['id_user'],
                        'admin'=> $results['admin'],
                    ];

                    if ($results['admin'] == 1) {
                        header('Location: ./post_connexion_admin.php');
                    }
                    else
                    {
                        header('Location: ./post_connexion_eleve.php');
                    }
                }

                echo '<p>Désolé vous n\'avez pas été trouvé dans la BDD</p>';
            } catch (\Exception $exception) {
                echo '<p>Oups une erreur s\'est produite</p>';
                echo '<p>'.$exception->getMessage().'</p>';
            }
        } else {
            $emailError = '<span style="color: red; font-size: 12px;">Veuillez remplir votre email.</span>';
            echo '<p>Oups une erreur s\'est produite durant la connexion.</p>';
        }
    }
?>