<?php require_once('../../view/guest/partials/_header.php'); ?>

<main>

    <form method="post">

        <label for="title">Nom</label>
        <input type="text" name="name"/>

        <label for="content">Prénom</label>
        <input type="text" name="firstname"/>

        <label for="content">Sujet</label>
        <input type="text" name="subject"/>

        <label for="image">Message</label>
        <input type="text" name="message"/>

        <input type="submit" id="submit"/>
    </form>

    <?php if ($isFormCreated) { ?>
        <p id="pFormContactTrue">Vos données ont été envoyées</p>
    <?php }else { ?>
        <p id="pFormContactFalse">Il y a une erreur dans votre saisie de données</p>
    <?php } ?>
</main>

<?php require_once('../../view/guest/partials/_footer.php'); ?>
