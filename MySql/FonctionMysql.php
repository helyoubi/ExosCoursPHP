<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 01/05/2017
 * Time: 20:26
 */

try{

    $connect = new PDO('mysql:host=localhost;dbname=parcoursphp;charset=utf8','root','');

}catch (Exception $e){

    die("Erreur !  : ".$e->getMessage());
}


//Utilisation de la fonction SQL NOW() , qui retourne la date du jour
$req = $connect->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires,date_ajout) VALUES(\'aizdojd\', \'aozidji\', \'aozidji\', 23.50,16, \'aozidji\',NOW())');



echo 'Le jeu a bien été ajouté ';