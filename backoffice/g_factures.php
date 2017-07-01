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
<form class="form-horizontal" method="POST" action="pdf/generatepdf.php" name="formInscription" target="_blank">

<fieldset>
<legend>Coordonnées du participant</legend>

<label for="nom">Nom du participant:</label>
<input type="text" name="nom" id="nom" />

<label for="prenom">Prénom du participant:</label>
<input type="text" name="prenom" id="prenom" />

<label for="email">Âge du participant:</label>
<input type="number" name="age" id="age" />
</fieldset>

<fieldset>
<legend>Service commandé</legend>
<SELECT name="service" size="1">
    <OPTION>Stationnement longue durée</OPTION>
    <OPTION>Stationnement provisoire + Ravitaillement</OPTION>
    <OPTION>Parachutisme & Baptêmes</OPTION>
    <OPTION>Nettoyage intérieur</OPTION>
</SELECT>
</fieldset>

<fieldset>
<SELECT name="date" size="1">
    <OPTION>Lundi</OPTION>
    <OPTION>Mardi</OPTION>
    <OPTION>Mercredi</OPTION>
    <OPTION>Jeudi</OPTION>
    <OPTION>Vendredi</OPTION>
</SELECT>
</fieldset>

<fieldset>
<legend>Validation</legend>
<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Valider</button>
</fieldset>

</form>

    <!-- end .content --></div>
  <div class="footer">
    <?php
		include("inc/footer.php");
	?>
  <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
