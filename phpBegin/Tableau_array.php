<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 23/04/2017
 * Time: 09:49
 */

$array_nom = array('Elyoubi','Armstrong');

// ou

$prenoms[0] = 'François';
$prenoms[1] = 'Michel';
$prenoms[2] = 'Nicole';


for ($i = 0 ; $i < 3 ; $i++ ){

    echo $prenoms[$i].'<br>';

}

foreach ($prenoms as $element) {

    echo $element.'<br>';
}



//Construire un tableau associatif

// On crée notre array $coordonnees
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');


//Parcourire le tableau associatif et récupérer la clé aussi

foreach($coordonnees as $cle => $element)
{
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}

//Vérifier si la clé existe dans le array associatif

if (array_key_exists('nom', $coordonnees))
{
    echo 'La clé "nom" se trouve dans les coordonnées !';
}

if (array_key_exists('pays', $coordonnees))
{
    echo 'La clé "pays" se trouve dans les coordonnées !';

}else{

    echo 'false';
}

//Recherche dans le Array

$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits))
{
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}

if (in_array('Cerise', $fruits))
{
    echo 'La valeur "Cerise" se trouve dans les fruits !';
}