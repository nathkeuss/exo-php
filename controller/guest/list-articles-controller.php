<?php

$articleJsonFilePath = '../../model/article.json';

$articleJson = file_get_contents($articleJsonFilePath);

$article = json_decode($articleJson, true);

function isStringTooLong($stringToCheck) {
    return mb_strlen($stringToCheck, 'UTF-8') > 50;
}

function shortenString($stringToCut) {
    return substr($stringToCut, 0, 30);
}

?>

<?php require_once('../../view/guest/list-articles-view.php'); ?>
