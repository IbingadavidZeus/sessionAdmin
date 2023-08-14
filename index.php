<?php
session_start();
if(!$_SESSION['mdp'])
{
    header('Location: connexion.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <a href="membre.php"> Aficher tous les membres </a>
</body>
</html>