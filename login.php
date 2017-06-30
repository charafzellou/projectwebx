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
                            <label for="mail" class="cols-sm-2 control-label">Mail</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="mail" id="mail"  placeholder="Adresse mail utilisée lors de l'inscription"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pass" class="cols-sm-2 control-label">Mot de passe</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="pass" id="pass"  placeholder="saisir le mot de passe"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Connexion</button>
                        </div>
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