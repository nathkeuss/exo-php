<?php require_once('../../view/guest/partials/_header.php'); ?>

<main>
    <?php foreach ($articles as $article) { ?>
    <?php if ($article["isPublished"]) { ?>
    <article>

        <h2>Voici l'<?php echo $article["title"] ?></h2>
        <div>
            <img src="<?php echo $article["image"] ?>">
        </div>
        <?php if (isContentTooLong($article)) { ?>

            <p><?php echo shortenString($article) ?></p>
        <?php }
        else { ?>
            <p> <?php echo $article["content"] ?></p>
        <?php } ?>
        <?php } ?>
        <?php } ?>
</main>

<?php require_once('../../view/guest/partials/_footer.php'); ?>
