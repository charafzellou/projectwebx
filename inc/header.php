<div>
    <div id="menu-header-logo" class="col-lg-2">
        <img src="img/logonoback.png" width="200px"/>
    </div>
    
    <div id="menu-header-top">
        <div href="#" class="col-lg-8 weather" >
        <!--style ="background: red;"-->	
            <?php
				require_once('inc/weather.php');
			?>
        </div>
        <div href="#" id="conn" class="dd menu-item menu-item-type-post_type menu-item-object-page col-lg-2">Mon compte
        	<ul class="dd-content">
                <li><a  href="login.php">Se connecter</a></li>
				<li><a  href="register.php">Créer un compte</a></li>
			</ul>
        </div>
    </div>
</div>        

<nav id="menu-header-bottom" class="col-lg-12">
    <ul id="menu-primary-bottom" class="menu row">
        <li class="menu-item menu-item-type-post_type menu-item-object-page first col-lg-3">
            <a href="index.php">Accueil</a>
        </li>
		
        <li class="dd menu-item menu-item-type-post_type menu-item-object-page col-lg-3">
			Services
			<ul href="services.php" class="dd-content">
				<li class="">
					<a href="tarifs.php">Tarifs</a>
				</li>
				<li class="">
					<a href="services.php">Réservation</a>
				</li>
			</ul>
			</div>
        </li>
		
        <li class="menu-item menu-item-type-post_type menu-item-object-page col-lg-3">
            <a href="aeroclub.php">Aéroclub</a>
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page last col-lg-3">
            <a href="apropos.php">à propos</a>
        </li>
    </ul>
</nav>
