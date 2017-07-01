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
    

<div class="main-login main-center">
    <form class="form-horizontal" method="POST" action="#">    
    <div class="form-group">
    <label for="firstname" class="cols-sm-2 control-label">Prénom</label>
        <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="firstname" id="firstname"  placeholder="Prénom" required/>
            </div>
        </div>
    </div>
    
    <div class="form-group">
    <label for="lastname" class="cols-sm-2 control-label">Nom</label>
        <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="lastname" id="lastname"  placeholder="Nom" required/>
            </div>
        </div>
    </div>
    
    <div class="form-group">
    <label for="pseudo" class="cols-sm-2 control-label">Utilisateur</label>
	    <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="pseudo" id="pseudo"  placeholder="Nom d'utilisateur" required/>
            </div>
        </div>
    </div>
    
    <div class="form-group">
    <label for="pass" class="cols-sm-2 control-label">Mot de passe</label>
        <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
            <input type="password" class="form-control" name="pass" id="pass"  placeholder="Saisir le mot de passe" required/>
            </div>
        </div>
    </div>
    
    <div class="form-group">
    <label for="pass_validation" class="cols-sm-2 control-label">Confirmation</label>
        <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
            <input type="password" class="form-control" name="pass_validation" id="pass_validation"  placeholder="Confirmer le mot de passe" required/>
            </div>
        </div>
    </div>
    
    <div class="form-group">
    <label for="mail" class="cols-sm-2 control-label">E-mail</label>
    <div class="cols-sm-10">
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
        <input type="text" class="form-control" name="mail" id="mail"  placeholder="Email" required/>
        </div>
    </div>
    </div>     
    
    <div class="form-group">
    <label for="phone" class="cols-sm-2 control-label">Téléphone</label>
        <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="phone" id="phone"  placeholder="Numéro de téléphone" required/>
	        </div>
        </div>
    </div>
    
    <div class="form-group ">
    	<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Valider</button>
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
