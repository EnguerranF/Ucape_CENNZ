<?php
    require_once('includes/db.php');

    if (!empty($_POST) && isset($_POST['connection'])) {
        if (!empty($_POST['login']) && !empty($_POST['password'])) {

            $request = $connection->prepare('SELECT * FROM user WHERE id_user = :login AND password = :password');
            $request->bindParam(':login', $_POST['login']);
            $passwordCrypted = $_POST['password'];
            $request->bindParam(':password', $passwordCrypted);

            try {
                $request->execute();
                $results = $request->fetch();

                if ($results) {

                    $_SESSION['utilisateur'] = [
                        'email' => $results['email'],
                        'id_utilisateur' => $results['id_utilisateur'],
                    ];

                    header('Location: ./login-connection.php');
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
        }
    }
?>