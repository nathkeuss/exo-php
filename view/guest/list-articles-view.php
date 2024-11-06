<?php require_once('../../view/guest/partials/_header.php'); ?>

<main>

    <h1>Les articles du blog</h1>

    <p>Filtrer les articles : </p>

    <form method="get">
        <label for="category">Catégorie</label>
        <select name="category" id="category">
            <option value="">- Choisis -</option>
            <option value="fort">fort</option>
            <option value="mid">mid</option>
            <option value="nul">nul</option>
        </select>

        <input type="submit">
    </form>

    <?php foreach ($articles as $article) { ?>

        <article>
            <h1> <?php echo $article['category'] ?></h1>
            <?php if (isStringTooLong($article['title'])) { ?>
                <h2><?php echo shortenString($article['title']) ?></h2>
            <?php } else { ?>
                <h2><?php echo $article['title']; ?></h2>
            <?php } ?>

            <p><?php echo $article['content']; ?></p>
            <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">
        </article>

    <?php } ?>




</main>

<?php require_once('../../view/guest/partials/_footer.php'); ?>
