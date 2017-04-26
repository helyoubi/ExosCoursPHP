<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h4>T'es dans la page bonjour.html mon poteau !!</h4>

<?php


    //La fonction isset() permet de vérifier si une variable est définie ou non
    if(isset($_GET['nom']) && isset($_GET['nom']) && isset($_GET['repeter'])) {

        //Transtipage : convertion en int !

        $_GET['repeter'] = (int) $_GET['repeter'];
        if($_GET['repeter']>0 && $_GET['repeter']<=100){

    for($i=0;$i<$_GET['repeter'];$i++) {

     ?>


        <p>Bonjour <?php echo $_GET['prenom'] . ' ' . $_GET['nom']; ?> !</p>

      <?php


    }


    }else if($_GET['repeter']==0){

            echo 'La valeur de répéter n\'est pas valide !';
        }

    }else{

    echo 'Vous avez supprimez les paramètres !';

    }

?>


</body>

</html>