<nav> 
    <?php 
    $file= basename ($_SERVER["PHP_SELF"]);
    if ($file == "vitrine-accueil.php") { ?>
        <a id="current" href= "vitrine-accueil.php">Accueil</a>
        <a href="vitrine-programme.php">Programme</a>
        <a href="vitrine-contacts.php">Contact</a>
        <?php }
        
        if ($file == "vitrine-programme.php") {?>
        <a href="vitrine-accueil.php">Accueil</a>
        <a id="current" href= "vitrine-programme.php">Programme</a>
        <a href="vitrine-contacts.php">Contact</a>
        <?php }
        
        if ($file == "vitrine-contacts.php") {?>
        <a href="vitrine-programme.php">Programme</a>
        <a href="vitrine-accueil.php">Accueil</a>
        <a id="current" href= "vitrine-contacts.php">Contacts</a>
        <?php } ?>
        </nav>