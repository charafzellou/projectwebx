<?php
$protocol = 'mysql';
$host = '127.0.0.1';
$dbname = 'aen';
$charset = 'utf8';
$login = 'root';
$password = 'aenprojectx';

try
{
	$bdd = new PDO($protocol.':host='.$host.';
		dbname='.$dbname.';
		charset='.$charset,
		$login,
		$password);
}
catch(Exception $e){die('Erreur L11: '.$e->getMessage());}
?>
