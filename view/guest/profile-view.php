<?php require_once('../../view/guest/partials/_header.php'); ?>

<h1>Mon profil</h1>

<?php if ($profile['isPublished']) { ?>
    <p> prénom : <?php echo $profile['firstName']; ?></p>
    <p> nom : <?php echo $profile['lastName']; ?></p>
    <p> age : <?php echo $profile['age']; ?></p>
    <p> taff : <?php echo $profile['job']; ?></p>

    <h2>skills :</h2>

    <?php foreach ($profile['skills'] as $skill) { ?>
        <p><?php echo $skill; ?></p>
    <?php }} else { ?>
    <p>non</p>
<?php } ?>


<?php require_once('../../view/guest/partials/_footer.php'); ?>


