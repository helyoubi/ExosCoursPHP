<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 04/05/2017
 * Time: 10:23
 */

//Voici le code PHP qu'il faut mettre pour « annoncer » au navigateur que l'on va renvoyer une image jpg
header ("Content-type: image/jpeg");

//Créer une image
//$image = imagecreate(200,50);

//Créer une image d'une image déja existante
$image = imagecreatefromjpeg("../images/photo-tigre.jpg");

//Pour afficher l'image
imagejpeg($image);