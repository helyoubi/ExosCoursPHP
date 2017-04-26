<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 26/04/2017
 * Time: 11:57
 */

session_start(); // On démarre la session AVANT toute chose

//Donne l'adresse IP de l'utilisateur qui demande la page
print_r($_SERVER['REMOTE_ADDR']);

$_SESSION['prenom'] = 'Hamza';

$_SESSION['nom'] = 'Elyoubi';

$_SESSION['age'] = '24';

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Titre de ma page</title>
</head>
<body>
<p>bonjour !</p>
<p>
    <a href="RecupeSession.php">Voir s'il ma reconnu :3 </a>
</p>
</body>
</html>



