<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TABLEAU DE BORD - GESTION STAFF</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
  <div class="header">
  <?php
  	include("inc/header.php");
  ?>
  <!-- end .header --></div>
  <div class="sidebar1">
    <?php
		include("inc/nav.php");
	?>
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h1>GESTION STAFF</h1>
    <?php
				require_once('../inc/connection.php');
			?>			
			<table class="table table-bordered table-inverse">
				<thead>
				<tr>	
					<th>ID Staff</th>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Adresse</th>
                    <th>e-Mail</th>
                    <th>Téléphone</th>
				</tr>
				</thead>
				<?php
				$reponse = $bdd->query('SELECT * FROM staff');;
				
				while ($donnees = $reponse->fetch())
				{
					echo '
					<tbody>
					<tr>
							<th>'.$donnees['idStaff'].'</th>
							<th>'.$donnees['nom'].'</th>
							<th>'.$donnees['prenom'].'</th>
							<th>'.$donnees['adresse'].'</th>
							<th>'.$donnees['email'].'</th>
							<th>'.$donnees['telephone'].'</th>
					</tr>
					</tbody>';
				}
				$reponse->closeCursor();
				?>	
			</table>
    <!-- end .content --></div>
  <div class="footer">
    <?php
		include("inc/footer.php");
	?>
  <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
