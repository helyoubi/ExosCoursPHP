<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 05/05/2017
 * Time: 09:51
 */

//Fonction qui effectue une recherche du mot guitare et banjo dans le texte a coté
if(preg_match('#guitare|banjo#', 'j\aime la guitare electro-acoustic et la banjo')){

    echo 'Vrai';

}else{

    echo 'Faux';
}