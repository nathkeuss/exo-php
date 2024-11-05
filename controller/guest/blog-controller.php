<?php

$articles = [
    "1" => [
        "title" => "Article 1",
        "image" => "https://s2.dmcdn.net/v/MvJ8j1QfefT-fs57e/x1080",
        "content" => "KACCHHOOOWWWW",
        "isPublished" => true
    ],
    "2" => [
        "title" => "Article 2",
        "image" => "https://s2.dmcdn.net/v/MvJ8j1QfefT-fs57e/x1080",
        "content" => "KACCHHOOOWWWW",
        "isPublished" => true
    ],
    "3" => [
        "title" => "Article 3",
        "image" => "https://s2.dmcdn.net/v/MvJ8j1QfefT-fs57e/x1080",
        "content" => "KACCHHOOOWWWW",
        "isPublished" => true
    ]
];
function shortenString($article) {
    return substr($article['content'],  0, 30);
}
function isContentTooLong($article) {
    return (mb_strlen($article["content"], 'UTF-8') > 30);
}
?>

<?php require_once('../../view/guest/blog-view.php'); ?>