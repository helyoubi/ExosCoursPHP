<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 04/05/2017
 * Time: 10:58
 */

header ("Content-type: image/jpeg"); // L'image que l'on va créer est un jpeg

// On charge d'abord les images
$source = imagecreatefrompng("../images/logo.png"); // Le logo est la source
$destination = imagecreatefromjpeg("../images/photo-tigre.jpg"); // La photo est la destination

// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);

// On veut placer le logo en bas à droite, on calcule les coordonnées où on doit placer le logo sur la photo
$destination_x = $largeur_destination - $largeur_source;
$destination_y =  $hauteur_destination - $hauteur_source;

// On met le logo (source) dans l'image de destination (la photo) , 60 c'est le degré de transparence du logo
imagecopymerge($destination, $source, $destination_x, $destination_y, 0, 0, $largeur_source, $hauteur_source, 60);

// On affiche l'image de destination qui a été fusionnée avec le logo
imagejpeg($destination);