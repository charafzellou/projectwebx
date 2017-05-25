<?php

try

{

    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=aen;charset=utf8', 'root', '****');

}

catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


// Si tout va bien, on peut continuer


// On récupère tout le contenu de la table meteo
$reponse = $bdd->query('SELECT * FROM meteo');

// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch())

{

    $id = $donnees['weather'];
	$req = $bdd->query('SELECT icone FROM correspondanceIDWeather WHERE IDWeather = "'.$id.'"');

 	$d = $req->fetch();
    ?>
        <i class="wi <?php echo $d['icone']?>"></i>
    <?php
    $req->closeCursor();

    echo $donnees['description'];
    echo $donnees['tempnow'] - 273.15,'°C';
    echo 'Température max ',$donnees['tempsmax'] - 273.15,'°C';
    echo 'Température min ',$donnees['tempsmin'] - 273.15,'°C';
	?>
		<i class="wi wi-barometer"></i>
	<?php
	echo $donnees['pressure'],' hPa';
	?>
		<i class="wi wi-humidity"></i>
	<?php
	echo $donnees['humidity'], '% ';
	echo 'Visibilité ', $donnees['visibility'], 'm';
	$timezone = +2;
	?>
		<i class="wi wi-sunrise"></i>
	<?php
	echo date("H:i:s", $donnees['sunrise'] + 3600 * $timezone);
	?>
		<i class="wi wi-sunset"></i>
	<?php
	echo date("H:i:s", $donnees['sunset'] + 3600 * $timezone);
}

$reponse->closeCursor(); // Termine le traitement de la requête


?>
