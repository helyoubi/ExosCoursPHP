<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ma super page PHP</title>
</head>
<body>

<p>
    Hé ! Je me souviens de toi !<br />
    Tu t'appelles <?php echo $_COOKIE['pseudo']; ?> et tu viens de <?php echo $_COOKIE['pays']; ?> c'est bien ça ?
</p>

</body>

</html>