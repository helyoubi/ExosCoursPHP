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

//Modification du jeux avec l'ID 51 , $update renvoie le nombre de lignes modifiées
$update = $connect->exec('UPDATE jeux_video SET prix = 10, nbre_joueurs_max = 32 WHERE ID = 51');

echo 'Le jeu a bien été modifié';
