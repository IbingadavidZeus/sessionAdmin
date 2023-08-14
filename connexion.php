<?php
session_start();
if(isset($_POST['valider']))
{
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp']))
    {
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "admin1234";

        $pseudo_saisi = strip_tags($_POST['pseudo']);
        $mdp_saisi = strip_tags($_POST['mdp']);

            if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut)
            {
                $_SESSION['mdp'] = $mdp_saisi;
                header('Location: index.php');
            }
            else
            {
                echo " Votre Mot de passe ou pseudo est incorrect... ";
            }
    }
    else
    {
        echo " Veuillez completer tous les champs... ";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Espace de connexion Administateur </title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="pseudo" id="pseudo" placeholder="Nom" required>
    <br>
    <input type="password" name="mdp" id="mdp" placeholder="Password" required>
    <br>
    <input type="submit" name="valider">
    </form>
</body>
</html>