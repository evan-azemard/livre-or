
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
<body id="body_inscription">
<header>
		<div id="header_connexion">
			<div id="menu_connexion">
				<div id="header_login">
					<div class="header_centre_connexion">
						<a href="../connexion/connexion.php" class="header_text_mediaquerie">
							Login
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
						<a href="#" class="header_text_mediaquerie">
							Inscription
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
	<main id="main_inscription" >
		<form method="post" echo var_dump($_POST);>
			<section id="section_form1">
				<div class="divform">
					<div class="title_form_section">
 						<label for="name">Pseudo :</label>
        				<input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required="required"><br>
        				<label for="name">Mot de passe :</label>
        				<input type="password" id="password" name="password" placeholder= "Mot de passe" required="required"><br>
        				<label for="name">Répéter le mot de passe :</label>
        				<input type="password" id="r_password" placeholder="Confirmer mot de passe" name="r_password" required="required"><br>
        				<label for="inscription">S'inscrire</label>
s					</div>

				</div>

			</section>

		</form>

	</main>
	<br>
	<?php
		echo "<br><center>";
		include('donne.php');
		echo "</center>";
	?>	
	
	<footer>						<!-- FOOTER -->
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