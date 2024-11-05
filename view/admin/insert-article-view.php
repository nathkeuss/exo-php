<?php require_once('../../view/admin/partials/_header.php'); ?>

<main>

    <h1>Créer un article</h1>

    <form method="post">

        <label for="title">Titre</label>
        <input type="text" name="title"/>

        <label for="content">Contenu</label>
        <input type="text" name="content"/>

        <label for="image">Image</label>
        <input type="text" name="image"/>

        <input type="submit" id="submit"/>

    </form>
<?php if ($isArticleCreated){ ?>
            <p>Vous avez envoyé des données</p>
            <p>Résumé de l'article</p>
            <p>Titre : <?php echo $_POST['title']; ?></p>
            <p>Contenu : <?php echo $_POST['content']; ?></p>
            <p>Image : <?php echo $_POST['image']; ?></p>

        <?php } else { ?>
            <p>Il y a une erreur dans vos données saisies</p>
        <?php } ?>

</main>


<?php require_once('../../view/admin/partials/_footer.php'); ?>

