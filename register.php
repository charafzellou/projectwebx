<?php  
    session_start();
?>    
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
		    <div class="">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Inscription</h1>
                <div>
                    <h4>Pour pouvoir participer aux services, inscrivez-vous</h4>
                </div>
            </div>
        </div>
        
<?php
/*if(isset($_POST['submit'])){	
	try{
		$insertClient_query = $bdd->query('INSERT INTO `client`(`login`, `mdp`, `nom`, `prenom`, `adresse`, `telephone`, `adresseMail`) VALUES ('.$_POST['submit'].','.$_POST['submit'].','.$_POST['submit'].','.$_POST['submit'].','.$_POST['submit'].','.$_POST['submit'].','.$_POST['submit'].')');
		}catch(PDOException  $e)
			{
				echo "Error: ".$e;
			}
	if (!$insertClient_query) {
    	die('Requête invalide : ' . mysql_error());
	}
}*/
$link = mysql_connect("localhost", "root", "aenprojectx");
if (!$link) {
    die('Connexion impossible : ' . mysql_error());
}

$db_selected = mysql_select_db('aen', $link);
if (!$db_selected) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());
}

if(isset($_POST['submit'])){
	$query = sprintf("INSERT INTO `client` (`login`, `mdp`, `nom`, `prenom`, `adresse`, `telephone`, `adresseMail`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')", $_POST['login'], $_POST['mdp'], $_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['telephone'], $_POST['adresseMail']);
	
	$result = mysql_query($query);
	if (!$result) {
		$message  = 'Requête invalide : ' . mysql_error() . "\n";
		$message .= 'Requête complète : ' . $query;
		die($message);
	}
}
?>
        
<div class="main-login main-center">
    <form class="form-horizontal" method="POST" action="#">    
    <div class="form-group">
    <label for="firstname" class="cols-sm-2 control-label">Prénom</label>
        <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
            <input style="width:40%" type="text" class="form-control" name="prenom" placeholder="Prénom" required/>
            </div>
        </div>
    </div>
    
    <div class="form-group">
    <label for="lastname" class="cols-sm-2 control-label">Nom</label>
        <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
            <input style="width:40%" type="text" class="form-control" name="nom" placeholder="Nom" required/>
            </div>
        </div>
    </div>
    
    <div class="form-group">
    <label for="pseudo" class="cols-sm-2 control-label">Utilisateur</label>
	    <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
            <input style="width:40%" type="text" class="form-control" name="login" placeholder="Nom d'utilisateur" required/>
            </div>
        </div>
    </div>
    
    <div class="form-group">
    <label for="pass" class="cols-sm-2 control-label">Mot de passe</label>
        <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
            <input style="width:40%" type="password" class="form-control" name="mdp" placeholder="Mot de passe" required/>
            </div>
        </div>
    </div>
    
    <div class="form-group">
    <label for="mail" class="cols-sm-2 control-label">E-mail</label>
    <div class="cols-sm-10">
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
        <input style="width:40%" type="text" class="form-control" name="adresseMail" placeholder="E-mail" required/>
        </div>
    </div>
    </div>     
    
    <div class="form-group">
    <label for="phone" class="cols-sm-2 control-label">Téléphone</label>
        <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
            <input style="width:40%" type="text" class="form-control" name="telephone" placeholder="Numéro de téléphone" required/>
	        </div>
        </div>
    </div>
    
    <div class="form-group">
    <label for="adresse" class="cols-sm-2 control-label">Adresse</label>
        <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
            <input style="width:40%" type="text" class="form-control" name="adresse" placeholder="Adresse" required/>
	        </div>
        </div>
    </div>
    
    <div class="form-group ">
    	<button style="width:40%" type='submit' name='submit' value='SUBMIT' class="btn btn-primary btn-lg btn-block login-button">Valider</button>
    </div>
    <div class="login-register">
    	<a href="login.php">Déjà un compte ? Cliquez ici pour vous connectez !</a>
    </div>
    </form>
    </div>
       
		<footer class="row">
			<?php
				require_once('inc/footer.php');
			?>
		</footer>	
	</body>
</html>
