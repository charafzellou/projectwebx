<!doctype html>
<?php
  session_start();
?>
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
    <p>Be aware of the CSS.</p>
    <!-- end .content --></div>
  <div class="footer">
    <?php
		include("inc/footer.php");
	?>
  <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
