<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 01/05/2017
 * Time: 16:26
 */


try{


    $connect = new PDO('mysql:host=localhost;dbname=parcoursphp;charset=utf8','root','');

}catch (Exception $e){

    die("Erreur !  : ".$e->getMessage());
}

$req = $connect->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');

$req->execute(array(
    'nom' => $nom,
    'possesseur' => $possesseur,
    'console' => $console,
    'prix' => $prix,
    'nbre_joueurs_max' => $nbre_joueurs_max,
    'commentaires' => $commentaires
));

echo 'Le jeu a bien été ajouté ';
