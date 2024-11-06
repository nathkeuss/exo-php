<?php
require_once ('../../config/config.php');


// j'initialise des variables me permettant de savoir
// si le formulaire a été envoyé
// et si les données envoyées sont correctes (identifiant et mot de passe ok)
// ces variables sont utiles uniquement pour la view
$isFormSubmitted = false;
$hasFormError = false;

// si le formulaire a été envoyé
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // je change la valeur de $isFormSubmitted
    // pour la mettre à true
    $isFormSubmitted = true;

    // vérifier en BDD que l'email existe et que le mot de passe correspond à l'email

    // on vérifie les données envoyées
    // si l'email correspond à celui attendu (dans une vrai app, on verifierait s'il l'email existre en BDD)
    // et si le mot de passe est celui attendu
    if ($_POST['email'] === "nathan.test@gmail.com" &&
        $_POST['password'] === "nathan")
    {
        // démarre l'espace de stockage de session

        // on démarre la session
        // ça créé un espace de stockage spécifique pour un utilisateur
        // lié à un identifiant unique généré

        // j'accède à l'espace de stockage de session de l'utilisateur
        // avec la super globale $_SESSION
        // et je créé une clé me permettant de savoir si l'utilisateur est connecté
        session_start();


        // variable superglobale, permettant d'accéder à la session
        // de l'utilisateur
        // ici je stocke une info permettant de vérifier si
        // l'utilisateur est connecté ou non

        // j'accède à l'espace de stockage de session de l'utilisateur
        // avec la super globale $_SESSION
        // et je créé une clé me permettant de savoir si l'utilisateur est connecté

        $_SESSION['is_authentificated'] = true;



        // je modifie la variable contenant l'info si l'utilisateur a réussi à se connecter ou non


        header('Location: http://localhost/exo1/controller/admin/dashboard-controller.php');

    } else {
        $hasFormError = true;
    }

}


require_once('../../view/guest/connection-view.php');
?>
