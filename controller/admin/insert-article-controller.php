<?php
require_once ('../../config/config.php');
require_once('../../service/authentification-service.php');
require_once('../../model/articles-repository.php');
redirectNotLoggedUser();



$isArticleCreated = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if
    ($_POST['title'] &&
        $_POST['content'] &&
        $_POST['image'] &&
        $_POST['category'] &&
        mb_strlen($_POST['title']) > 4 &&
        mb_strlen($_POST['content']) > 4 &&
        mb_strlen($_POST['category']) &&
        mb_strlen($_POST['image']) > 4) {


// je créé un tableau contenant toutes mes valeurs
// issues du formulaire
        $article = ["title" => $_POST["title"],
            "content" => $_POST["content"],
            "image" => $_POST["image"],
            "category" => $_POST["category"]];

        // je créé un tableau contenant toutes mes valeurs
        // issues du formulaire
        $articleCreated = [
            "title" => $_POST['title'],
            "content" => $_POST['content'],
            "image" => $_POST['image'],
            "category" => $_POST['category']
        ];

        insertArticle($articleCreated);

        $isArticleCreated = true;
    }
}
?>

<?php require_once('../../view/admin/insert-article-view.php'); ?>

