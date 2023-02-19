<?php
//page d'accueil 
session_start();

// affichage de l'utilisateur qui se connect
echo 'welcome ' . $_SESSION["username"];

// partie de deconnexion  d'un utilisateur
if (isset($_POST['logout'])) {
    session_destroy();
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<br>
<form action="" method="post">
    <input type="submit" name="logout" value="Déconnexion">
</form>
</body>
</html>