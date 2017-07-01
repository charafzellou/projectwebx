<?php  
    session_start();
?>    
<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<?php
			require_once('inc/head.php');
            //include "createInscription.php";
		?>
	</head>
	
	<body class="container">
		
		<header class="row">
			<?php
				require_once('inc/header.php');
			?>
		</header>
		   <!-- Page Content -->
    <div class="">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Connexion</h1>
            </div>
        </div> 
<div class="main-login main-center">
                    <form class="form-horizontal" method="post" action="#">
                        
                        <div class="form-group">
                            <label for="mail" class="cols-sm-2 control-label">Login:</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="login" placeholder="Login"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pass" class="cols-sm-2 control-label">Mot de passe</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="mdp" placeholder="Mot de passe"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button">Connexion</button>
                        </div>
<?php
$link = mysql_connect("localhost", "root", "aenprojectx");
if (!$link) {
    die('Connexion impossible : ' . mysql_error());
}

$db_selected = mysql_select_db('aen', $link);
if (!$db_selected) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());
}

if(isset($_POST['submit'])){
	$result = mysql_query("SELECT * FROM client WHERE login=".$_POST['login']);
	
	if (!$result) {
		$message  = 'Requête invalide : ' . mysql_error() . "\n";
		$message .= 'Requête complète : ' . $query;
		die($message);
	}
	
	$row = mysql_fetch_array($result);
	if(strcmp($row['mdp'], $_POST['mdp']) == 0)
	{
		echo "<script type='text/javascript'>document.location.replace('backoffice/');</script>";
		// echo "<meta http-equiv="refresh" content="1;url=http://www.dvp.com"/>";
	}
	else{
		echo "<strong>Mauvais mot de passe! Veuillez réessayer!</strong>";
	}
}
?> 
                        <div class="login-register">
                            <a href="forgetpwd.php">Mot de passe oublié ? Cliquez ici !</a>
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