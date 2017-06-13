<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=aen;charset=utf8','root','aenprojectx');
}

catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
?>
