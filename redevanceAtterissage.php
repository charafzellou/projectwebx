<?xml version = "1.0" encoding="UTF-8" standalone="yes" ?>
<exemple>
<table class="table table-bordered table-inverse">
	<thead>
		<tr>	
			<th>Types avions</th>
			<th></th>
			<th>Hors Taxes</th>
			<th>TVA</th>
			<th>TTC</th>
		</tr>
	</thead>
	<?php
	require_once('inc/connection.php');
	$reponse = $bdd->query('SELECT * FROM redevanceAtterrissage');
	while ($donnees = $reponse->fetch())
	{
		echo '
		<tbody>
		<tr>
			<th>'.$donnees['TypesAvions'].'</th>
			<th>'.$donnees['TypesAbonnement'].'</th>
			<th>'.$donnees['HorsTaxes'].'€</th>
			<th>'.$donnees['TVA'].'€</th>
			<th>'.$donnees['TTC'].'€</th>
		</tr>
		</tbody>';
	}		
	$reponse->closeCursor();
	?>
</table>
</exemple>
