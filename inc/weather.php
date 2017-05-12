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



    if( $donnees['idMeteo'] == 800)
    {
    ?>
        <i class="wi wi-day-sunny">Ensoleillé</i>
    <?php
    }
    elseif($donnees['idMeteo'] >= 200 && $donnees['idMeteo'] <= 232)
    {
        ?>
        <i class="wi wi-day-thunderstorm">Tempête</i>
        <?php
    }
    elseif($donnees['idMeteo'] >= 300 && $donnees['idMeteo'] <= 321)
    {
        ?>
        <i class="wo wi-day-rain-mix">Bruine</i>
        <?php
    }
        elseif($donnees['idMeteo'] >= 500 && $donnees['idMeteo'] <= 504)
    {
        ?>
        <i class="wi wi-day-rain">Bruine</i>
        <?php
    }    elseif($donnees['idMeteo'] == 511)
    {
        ?>
        <i class="wi wi-snow">Pluie verglassante</i>
        <?php
    }
        elseif($donnees['idMeteo'] >= 520 && $donnees['idMeteo'] <= 531)
    {
        ?>
        <i class="wi wi-rain">Pluie</i>
        <?php
    }
        elseif($donnees['idMeteo'] >= 600 && $donnees['idMeteo'] <= 622)
    {
        ?>
        <i class="wi wi-snow">Neige</i>
        <?php
    }
    
        elseif($donnees['idMeteo'] >= 701 && $donnees['idMeteo'] <= 781)
    {
        ?>
        <i class="wi wi-dust">Brouillard</i>
        <?php
    }
}


$reponse->closeCursor(); // Termine le traitement de la requête


?>