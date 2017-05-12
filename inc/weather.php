<?php

try

{

    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=aen;charset=utf8', 'root', '');

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
        <i class="wi wi-day-sunny"></i>Ensoleillé
    <?php
    }
    elseif($donnees['weather'] >= 200 && $donnees['weather'] <= 232)
    {
        ?>
        <i class="wi wi-day-thunderstorm">Tempête</i>
        <?php
    }
    elseif($donnees['weather'] >= 300 && $donnees['weather'] <= 321)
    {
        ?>
        <i class="wo wi-day-rain-mix">Bruine</i>
        <?php
    }
    elseif($donnees['weather'] >= 500 && $donnees['weather'] <= 504)
    {
        ?>
        <i class="wi wi-day-rain">Bruine</i>
        <?php
    }
    elseif($donnees['weather'] == 511)
    {
        ?>
        <i class="wi wi-snow">Pluie verglassante</i>
        <?php
    }
    elseif($donnees['weather'] >= 520 && $donnees['weather'] <= 531)
    {
        ?>
        <i class="wi wi-rain">Pluie</i>
        <?php
    }
    elseif($donnees['weather'] >= 600 && $donnees['weather'] <= 622)
    {
        ?>
        <i class="wi wi-snow">Neige</i>
        <?php
    }
    
    elseif($donnees['weather'] >= 701 && $donnees['weather'] <= 781)
    {
        ?>
        <i class="wi wi-dust"></i> Brouillard
        <?php
    }
    
    echo $donnees['tempnow'] - 273.15,'°C';
    echo 'Température max ',$donnees['tempsmax'] - 273.15,'°C';
    echo 'Température min ',$donnees['tempsmin'] - 273.15,'°C';
    echo 'wesh',$donnees['sunrise'];
    
}


$reponse->closeCursor(); // Termine le traitement de la requête


?>