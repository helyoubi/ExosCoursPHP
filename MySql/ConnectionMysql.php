<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 30/04/2017
 * Time: 11:54
 */

try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=parcoursphp;charset=utf8', 'root', '');

    //Afin d'activer les erreurs
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
//$reponse = $bdd->query('SELECT * FROM jeux_video LIMIT 0,5');

//Requete plus sécuriser avec prepare et afficher l'erreur s'il y ont as avec errorInfo()
$reponse = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax')or die(print_r($bdd->errorInfo()));
$reponse->execute(array('possesseur' => $_GET['possesseur'], 'prixmax' => $_GET['prix_max']));

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    ?>
    <p>
        <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
        Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
        Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
        <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
    </p>
    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>