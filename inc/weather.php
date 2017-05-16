<?php

try

{

    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=aen;charset=utf8', 'root', 'aenprojectx');

}

catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


// Si tout va bien, on peut continuer


// On récupère tout le contenu de la table jeux_video

$reponse = $bdd->query('SELECT * FROM meteo');


// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch())

{

    if( $donnees['weather'] == 800)
    {
    ?>
        <i class="wi wi-day-sunny"></i>
    <?php
    }
    
    echo $donnees['description'];
    echo $donnees['tempnow'] - 273.15,'°C';
    echo 'Température max ',$donnees['tempsmax'] - 273.15,'°C';
    echo 'Température min ',$donnees['tempsmin'] - 273.15,'°C';
    echo 'wesh',$donnees['sunrise'];
    
}


$reponse->closeCursor(); // Termine le traitement de la requête


?>
