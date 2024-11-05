<?php require_once('../../view/guest/partials/_header.php'); ?>



<form method="post">

    <h3>Connecte toi</h3>

    <label for="content">Entrez votre adresse mail</label>
    <input type="email" name="email"/>

    <label for="title">Entrez votre mot de passe</label>
    <input type="password" name="password"/>

    <input type="submit" id="submit"/>

</form>

<?php if ($isFormSubmitted && $hasFormError) { ?>

        <p id="malConnecte">Utilisateur non reconnu.</p>

<?php } ?>



<?php require_once('../../view/guest/partials/_footer.php'); ?>
