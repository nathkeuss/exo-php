<?php

function findArticles()
{
    $articlesJsonFilePath = '../../model/articles.json';

    $articlesJson = file_get_contents($articlesJsonFilePath);

    $articles = json_decode($articlesJson, true);

    return $articles;
}

function insertArticle($articleCreated) {
    $currentArticles = findArticles();

    // j'ajoute dans le tableau des articles sauvés, le nouvel article
    $currentArticles[] = $articleCreated;

    // je convertis mon article en json
    $updatedArticlesJson = json_encode($currentArticles,JSON_PRETTY_PRINT);


    $articlesJsonpath = '../../model/articles.json';
    // j'ouvre le fichier json, je stocke mon article
    // dedans et je ferme le fichier json
    $fp = fopen($articlesJsonpath, 'w');
    fwrite($fp, $updatedArticlesJson);
    fclose($fp);
}
?>
