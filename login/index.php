<!DOCTYPE html>
<html lang="fr-FR">
<head>
<title>AERODROME d'EVREUX</title>
</head>
<body style="background-image:'img/background.jpg'">
<div>
<center>
	<h2>Nom d'utilisateur:</h2>
	<input accept="text/plain" autofocus="true"></input>
	<br/>
	<h3>Mot de passe:</h3>
	<input accept="text/plain"></input>
	<br/><br/>
	<button formmethod="post">Se connecter</button>
	<br/><br/>
<?php
	$servername = "localhost";
	$dbname = "aen";
	$username = "root";
	$password = "";
	
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connexion SQL réussie!";
		$conn = null;
	}
	
	catch(PDOException $e) {
		echo "Connexion SQL impossible: " . $e->getMessage();
		$conn = null; 
	}
?> 
<br/>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "aen";

	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
		die("Connexion SQL impossible: " . $conn->connect_error);
	}

	$sql = "INSERT INTO staff (idStaff, login, mdp, nom, prenom, adresse, email, telephone, experience) VALUES ('1', 'amary', 'amary2017', 'Amary', 'Jovier', '24 du 25 dans le 26', 'amary@aerodrome-evreux.fr', '0033600000000', '0')";

	if ($conn->query($sql) === TRUE) {
		echo "Nouvelle entrée sauvegardée!";
	}
	else {
		echo "Erreur SQL: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?> 
<br/>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "aen";

	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
		die("Connexion SQL impossible: " . $conn->connect_error);
	}

	$sql = "SELECT (idStaff, login, mdp, nom, prenom, adresse, email, telephone, experience) FROM staff";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["idStaff"]. " - Nom: " . $row["prenom"]. " " . $row["nom"]. "<br>";
		}
	}
	else {
		echo "Aucun résultat SQL!";
	}
	$conn->close();
?> 
<br/>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "aen";

	try	{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "DELETE FROM staff WHERE idStaff=3";

		$conn->exec($sql);
		echo "L'entrée SQL a été bien supprimée!";
	}
		
	catch(PDOException $e) {
		echo $sql . "<br />" . $e->getMessage();
	}
	
	$conn = null;
?> 
<br/>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "aen";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "UPDATE staff SET nom='Clémence' WHERE idStaff=1";
		
		$stmt = $conn->prepare($sql);
		
		$stmt->execute();
		
		echo $stmt->rowCount() . " la mise à jour SQL a été bien effectuée!";
	}
	
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}

	$conn = null;
?>
</center>
</div>
</div>
<!-- Fin du Posts -->
</div>
<!-- Fin du Page -->
</div>
</body>
</html>