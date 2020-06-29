<html>
<head>
    <meta charset="utf-8">
    <title>Contacts Vitrine</title>
    <link rel="stylesheet" type="text/css" href="vitrine.css">
    <script src="script.js"></script>
</head>

<header>
    <?php include ("header.php");?> 
</header>

<body> 
    <h2>Contact</h2>
<form>

    <label for="name"> Nom et Prénom</label>
    <br><input id="Noms" type="text" id="name" name="name" placeholder="Votre Nom et Prénom..">
    <br><label for="email">Votre E-mail</label>
    <br><input id="Mail" type="email" id="email" name="email" placeholder="Votre E-mail..">
    <br><label for="Message">Votre Message</label>
    <br><textarea name="Message" rows="10" cols="30" placeholder="Comment améliorer notre site?"></textarea>
   <br><input id="Soumettre" type="submit" value="Envoyer">
</form>
</body>

<footer>
    <?php include ("footer.php"); ?>
 </footer>
