<?php  
	include_once('../inscription/donne.php');
	if (!isset($_SESSION["id"])) { 	header('Location: ../connexion/connexion.php');}
?>
<!DOCTYPE html>
<html lang="fr">  <!-- Page d'inscription -->
<head>
	<title>Le monde du smartphone</title>
	<script src="https://use.fontawesome.com/d3028f0b61.js"></script>
	<link rel="stylesheet" type="text/css" href="../../Page_CSS/livre_or.css">
	<link rel="shortcut icon" href="https://banner2.kisspng.com/20180320/jpw/kisspng-iphone-5s-iphone-4s-iphone-6-iphone-8-plus-black-iphone-7-png-5ab187f21c6803.8974388315215841141164.jpg"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Vidaloka&amp;display=swap" rel="stylesheet">
	<meta name="description" content="Venez découvrir l'incroyable univers du smartphone!"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="utf-8"/>
</head>
<body class="body_profil">
<header id="header_profil">
		<div id="header_connexion">
			<div id="menu_connexion">
				<div id="header_login">
					<div class="header_centre_connexion">
						<a href="#" class="header_text_mediaquerie">
						<?php
						if (!isset($_SESSION["id"])) { 	
							echo "Login"; 
						} else {
							echo $_SESSION["username"];
						}

						?>
							
						</a>
					</div>
				</div>
				<div id="header_trait_connexion">
					<div id="noir">
						<p>invisible</p>
					</div>
				</div>
				<div id="header_account">
					<div class="header_centre_connexion">
						<a href="../inscription/inscription.php" class="header_text_mediaquerie">
							<?php
							if (!isset($_SESSION["id"])) { 	echo "inscription"; }
							?>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="header_titre">
			<div id="header_centre_titre">
				<h1>Le monde du smartphone</h1>
			</div>
		</div>
		<nav id="header_nav">
			<div class="boxe1">
				<a href="../livre_or/livre-or.php">
					Livre d'or
				</a>
			</div>
			<div class="boxe1">
				<a href="../index/index.php">
					Menu
				</a>
			</div>
		</nav>
	</header>
	<main id="main_profil">
		<div id="image_main_profil">
			<form method="post">
				<section id="section_form1_profil">
					<div class="divform">
						<div class="title_form_section">
						<label for="name">Nouveau Pseudo :</label>
        				<input type="text" id="n_pseudo" name="n_pseudo" value="<?php echo $_SESSION["username"]; ?>" placeholder="Pseudo" ><br>
        				<label for="name">Mot de passe :</label>
        				<input type="password" id="n_password" name="password" placeholder= "Mot de passe" ><br>
						<input type="submit" id="editprofile" value="Valider">
						</div>
					</div>
				</section>
			</form>
		</div>
		<?php
    foreach ($error as $erreure)
    {
    	echo "<center>";
        echo "• " . $erreure . "<br>";
    	echo "</center>";
    }
    
    if (isset($_SESSION["response"])) {
    	echo $_SESSION["response"];
    	unset($_SESSION['response']);
    } 
	?>
	</main>
	<footer id="profil_footer">						<!-- FOOTER -->
		<div id="container1_footer">
			<div id="icone">		
				<a href="#">
					<i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
				</a>
				<a href="#">
					<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
				</a>
				<a href="#">
					<i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
				</a>
				<a href="#">
					<i class="fa fa-snapchat-square fa-2x" aria-hidden="true"></i>
				</a>
				<a href="#">
					<i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
				</a>
				<a href="#">
					<i class="fa fa-twitch fa-2x" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div id="container2_footer">
			<div id="footer_centre_titre">
				<p>Le monde du smartphone</p>
			</div>
		</div>
		<div id="container3_footer">
			<p>Evan Azemard</p>
		</div>
	</footer>
</body>
</html>