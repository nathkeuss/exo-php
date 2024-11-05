<?php

$isFormCreated = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if
        ($_POST['name'] &&
            $_POST['firstname'] &&
            $_POST['subject'] &&
            $_POST['message'] &&
        mb_strlen($_POST['name']) > 0 &&
        mb_strlen($_POST['firstname']) > 0 &&
        mb_strlen($_POST['subject']) > 0 &&
        mb_strlen($_POST['message']) > 0) {
        $isFormCreated = true;
    }
}

?>




<?php require_once('../../view/guest/contact-view.php'); ?>
