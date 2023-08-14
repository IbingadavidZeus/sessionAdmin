<?php
session_start();
$serveur = "localhost";
$login = "root";
$pass = "";
$dbname = "adminstrateur";
try
{
    $connexion = new PDO("mysql:host=$serveur;dbname=$dbname", $login, $pass);
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
}

catch(PDOException $e)
{
    echo "la connexion a echoué: " .$e->getMessage();
}

    if($_SESSION['mdp'])
    {
        // header('Location: connexion.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Afficher les membres </title>
</head>
<body>
    <!-- Affciher les membres -->
        <?php
            $selectuser = $connexion->query("SELECT * FROM membre");
            while($user = $selectuser->fetch())
            {
                ?>
                <p> <?= $user['pseudo'];?> <a href="bannir.php?id=<?$user['id'];?>"> Bannir le membre </a></p>
                <?php
            };
        ?>
    <!-- Fin d'afficher tous les membres -->
</body>
</html>