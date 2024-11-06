<?php
require_once ('../../config/config.php');
$profile = [
    "firstName" => "Nathan",
    "lastName" => "Julio",
    "age" => 22,
    "job" => "chômeur",
    "skills" => [
        "rien", "machin", "bidule"
    ],
    "isPublished" => true,
];

?>

<?php require_once('../../view/guest/profile-view.php'); ?>
