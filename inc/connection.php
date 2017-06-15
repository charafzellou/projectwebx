<?php
/*
try
{
	$xml = simplexml_load_file("bdd_config.xml");
}
catch(Exception $e){die('Erreur L7: '.$e->getMessage());}

$protocol = $xml->bdd_config['protocol'];
$host = $xml->bdd_config['host'];
$dbname = $xml->bdd_config['dbname'];
$charset = $xml->bdd_config['charset'];
$login = $xml->bdd_config['login'];
$password = $xml->bdd_config['password'];
*/

$protocol = 'mysql';
$host = '127.0.0.1';
$dbname = 'aen';
$charset = 'utf8';
$login = 'root';
$password = '';

try
{
	$bdd = new PDO($protocol.':host='.$host.';
		dbname='.$dbname.';
		charset='.$charset,
		$login,
		$password);
}
catch(Exception $e){die('Erreur L33: '.$e->getMessage());}

?>