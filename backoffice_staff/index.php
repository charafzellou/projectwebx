<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TABLEAU DE BORD</title>
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
    <h1>Instructions</h1>
    <p>Utilisez le <strong>menu à gauche</strong> pour changer d'onglet et vous déplacer dans le tableau de bord.</p>
    <p>Chaque onglet gère une fonction différente du tableau de bord. Veuillez consulter le <a href="">manuel d'utilisation</a> pour en savoir plus sur le fonctionnement des interfaces.</p>
    <p>N'oubliez pas que les modifications opérées sur cette interface sont <strong>immédiatement répercutées</strong> sur le site web. Pensez à effectuer des sauvegardes avant de procéder à des changements importants sur la base de données.</p>
    <p>Vous pouvez à tout moment effectuer une <strong>sauvegarde manuelle</strong> de la base de données en <a href="">cliquant ici.</a></p>
    <!-- end .content --></div>
  <div class="footer">
    <?php
		include("inc/footer.php");
	?>
  <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
