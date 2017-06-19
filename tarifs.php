<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<?php
			require_once('inc/head.php');
		?>
	</head>
	
	<body class="container">
		
		<header class="row">
			<?php
				require_once('inc/header.php');
			?>
		</header>
		
		<div class="content">
		<div class="post">
			<?php
				require_once('inc/connection.php');
			?>			
			<table class="table table-bordered table-inverse">
				<thead>
				<tr>	
					<th>
						Types avions			
					</th>
					<th>	
					</th>
					<th>
						Hors Taxes
					</th>
					<th>
						TVA
					</th>
					<th>
						TTC
					</th>

				</tr>
				</thead>
				<?php
				$reponse = $bdd->query('SELECT * FROM redevanceatterrissage');;
				
				while ($donnees = $reponse->fetch())
				{
					echo '
						<tbody>
						<tr>
					
						<th>'
							.$donnees['TypesAvions'].'			
						</th>
						<th>'
							.$donnees['TypesAbonnement'].'
						</th>
						<th>'
							.$donnees['HorsTaxes'].'€
						</th>
						<th>'
							.$donnees['TVA'].'€
						</th>
						<th>'
							.$donnees['TTC'].'€
						</th>

					</tr>
					</tbody>';
				}
				$reponse->closeCursor();
				?>	
			</table>
		</div>
		
		<footer class="row">
			<?php
				require_once('inc/footer.php');
			?>
		</footer>	
	</body>
</html>
