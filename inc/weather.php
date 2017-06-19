<?php
require_once('connection.php');
$timezone = +2;
$reponse = $bdd->query('SELECT * FROM meteo');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
	$id = $donnees['weather'];
	$req = $bdd->query('SELECT icone FROM correspondanceidweather WHERE IDWeather = "'.$id.'"');

	$d = $req->fetch();
?>
<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#today">
		<p class=date ><?php echo date("d/m/y", $donnees['sunrise'] + 3600 * $timezone);?></p>
		<i class="weathericone wi <?php echo $d['icone']?>"></i>
		<?php $req->closeCursor();?>
		<div class="secondarytemp">
			<p class=tempmin><?php echo 'Min ',$donnees['tempsmin'] - 273.15,'°C';?></p>
			<p class=tempmax><?php echo 'Max ',$donnees['tempsmax'] - 273.15,'°C';?></p>
		</div>
	</a></li>
    <li><a data-toggle="tab" href="#day1">
		<p class=date ><?php echo date("d/m/y", $donnees['sunrise'] + 3600 * $timezone);?></p>
		<i class="weathericone wi <?php echo $d['icone']?>"></i>
		<?php $req->closeCursor();?>
		<div class="secondarytemp">
			<p class=tempmin><?php echo 'Min ',$donnees['tempsmin'] - 273.15,'°C';?></p>
			<p class=tempmax><?php echo 'Max ',$donnees['tempsmax'] - 273.15,'°C';?></p>
		</div>
	</a></li>
    <li><a data-toggle="tab" href="#day2">
		<p class=date ><?php echo date("d/m/y", $donnees['sunrise'] + 3600 * $timezone);?></p>
		<i class="weathericone wi <?php echo $d['icone']?>"></i>
		<?php $req->closeCursor();?>
		<div class="secondarytemp">
			<p class=tempmin><?php echo 'Min ',$donnees['tempsmin'] - 273.15,'°C';?></p>
			<p class=tempmax><?php echo 'Max ',$donnees['tempsmax'] - 273.15,'°C';?></p>
		</div>
	</a></li>
	<li><a data-toggle="tab" href="#day3">
		<p class=date ><?php echo date("d/m/y", $donnees['sunrise'] + 3600 * $timezone);?></p>
		<i class="weathericone wi <?php echo $d['icone']?>"></i>
		<?php $req->closeCursor();?>
		<div class="secondarytemp">
			<p class=tempmin><?php echo 'Min ',$donnees['tempsmin'] - 273.15,'°C';?></p>
			<p class=tempmax><?php echo 'Max ',$donnees['tempsmax'] - 273.15,'°C';?></p>
		</div>
	</a></li>
		<li><a data-toggle="tab" href="#day4">
		<p class=date ><?php echo date("d/m/y", $donnees['sunrise'] + 3600 * $timezone);?></p>
		<i class="weathericone wi <?php echo $d['icone']?>"></i>
		<?php $req->closeCursor();?>
		<div class="secondarytemp">
			<p class=tempmin><?php echo 'Min ',$donnees['tempsmin'] - 273.15,'°C';?></p>
			<p class=tempmax><?php echo 'Max ',$donnees['tempsmax'] - 273.15,'°C';?></p>
		</div>
	</a></li>
</ul>
<div class="tab-content">
	<div id="today" class="tab-pane fade in active">
		<div class="left">
			<div class="description"><?php echo $donnees['description'].' ';?></div><br>
			<div class="maintemp"><?php echo $donnees['tempnow'] - 273.15.'°C';?></div>
		</div>
		<div class="center">
			<ul class="meteolist">
				<li>
					<span><i class="wi wi-strong-wind"></i>Vitesse du vent:</span>
					<?php echo $donnees['windspeed'] * 3.6,'km/h';?>
				</li>
				<li>
					<span><i class="wi wi-wind-direction"></i>Direction du vent:</span>
					<?php echo $donnees['winddegree'].'°';?>
				</li>
				<li class="pressure">
					<span><i class="wi wi-barometer"></i>Pression atmosphérique:</span>
					<?php echo $donnees['pressure'],'hPa';?>
				</li>
				<li class="humidity">
					<span><i class="wi wi-humidity"></i>Humidité:</span>
					<?php echo $donnees['humidity'].'%';?>
				</li>
			</ul>
		</div>
		<div class="right">
			<ul class="meteolist">
				<li class="visibility">
					<span><i class="wi wi-barometer"></i>Visibilité:</span>
					<?php echo $donnees['visibility'].'m';?>
				</li>
				<li class="sunrise">
					<span><i class="wi wi-sunrise"></i>Lever du soleil:</span>
					<?php echo date("H:i:s", $donnees['sunrise'] + 3600 * $timezone);?>
				</li>
				<li class="sunset">
					<span><i class="wi wi-sunset"></i>Coucher du soleil:</span>
					<?php echo date("H:i:s", $donnees['sunset'] + 3600 * $timezone);?>
				</li>
			</ul>
		</div>
		<div class="lastupdate">
			<?php echo 'Dernière mise à jour : ',date("d/m/y H:i:s", $donnees['sunset'] + 3600 * $timezone);?>
		</div>
		<?php
		}
		$reponse->closeCursor(); // Termine le traitement de la requête?>
	<div id="day1" class="tab-pane fade">
   
	 <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>
	<div id="day2" class="tab-pane fade">
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
	</div>
	<div id="day3" class="tab-pane fade">
		<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	</div>
	<div id="day4" class="tab-pane fade">
		<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	</div>
</div>