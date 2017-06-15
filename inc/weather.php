<?php

require_once('connection.php');

// On récupère tout le contenu de la table météo
$reponse = $bdd->query('SELECT * FROM meteo');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    $id = $donnees['weather'];
	$req = $bdd->query('SELECT icone FROM correspondanceIDWeather WHERE IDWeather = "'.$id.'"');

 	$d = $req->fetch();
	?>
		<div class="description">
        <i class="wi <?php echo $d['icone']?>"></i>
        </br>
    <?php
    $req->closeCursor();

	echo $donnees['description'].' ';?>
		</div>
		<div class="temperature">
			<div class="maintemp">
				<?php echo $donnees['tempnow'] - 273.15,'°C';?></div>
			<div class="secondarytemp">
				<?php echo 'Max ',$donnees['tempsmax'] - 273.15,'°C';?>
                </br>
				<?php echo 'Min ',$donnees['tempsmin'] - 273.15,'°C';?>
			</div>
		</div>
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