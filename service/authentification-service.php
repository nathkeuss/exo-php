<?php

function redirectNotLoggedUser()
{
// je démarre la session
    session_start();

//si la clé is_authenticated n'existe pas dans la session
// ou qu'elle n'est pas égale à true, elle redirigera vers la page connexion
    if(!key_exists('is_authentificated', $_SESSION) ||
        !$_SESSION['is_authentificated']){
        header('Location: http://localhost/exo1/controller/guest/connection-controller.php');
    }

}

?>
