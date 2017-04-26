<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 26/04/2017
 * Time: 12:53
 */


//IMPORTANT : comme pour session_start(), le setCookie() doit etre créer avant le doctype html

//Création du cookie , expire dans 1 an
//Sécuriser le cookie avec httponly
setcookie('pseudo','zikyoubi',time()+365*24*3600,null,null,false,true);


// On écrit un autre cookie...
setcookie('pays', 'France', time() + 365*24*3600, null, null, false, true);
// Et SEULEMENT MAINTENANT, on peut commencer à écrire du code html

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ma super page PHP</title>
</head>
<body>

<p>
    Ici j'enregistre le cookie, clique <a href="afficherCookie.php">ici</a> pour les affichers ..
</p>

</body>

</html>