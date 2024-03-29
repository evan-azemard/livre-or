<?php
session_start();
if (!isset($_SESSION["id"])) { 	
	header('Location: ../connexion/connexion.php');
	}
$bdd = new mysqli("localhost", "root", "", "livreor");

if (isset($_POST["textarea"]) and isset($_POST["Ajouter"])) {
    $time = date('Y-m-d H:i:s');
    $textarea = $_POST["textarea"]; 
    $sql = 'INSERT INTO `commentaires`(`commentaire`, `id_utilisateur`, `date`) VALUES ( "' . $textarea .'","' . $_SESSION["id"] . '","' . $time . '")';
            mysqli_query($bdd, $sql);

header('Location: ../livre_or/livre-or.php');
}      
?>
<!DOCTYPE html>
<html lang="fr">  <!-- Commentaires -->
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
<body class="body_commentaire">
<header id="header_commentaire">
		<div id="header_connexion">
			<div id="menu_connexion">
				<div id="header_login">
					<div class="header_centre_connexion">
							<?php
								if (!isset($_SESSION["id"])) { 	
									echo '<a href="../connexion/connexion.php">';
									echo "Login"; 
									echo "</a>";
								} 

								else { 
									echo '<a href="../profil/profil.php" class="header_text_mediaquerie"  >';					
									echo $_SESSION["username"];
									echo '</a>';
								}
							?>	
					</div>
				</div>
				<div id="header_trait_connexion">
					<div id="noir">
						<p>invisible</p>
					</div>
				</div>
				<div id="header_account">
					<div class="header_centre_connexion">
						<?php
							if (!isset($_SESSION["id"])) {
								echo '<a href="../inscription/inscription.php" class="header_text_mediaquerie">';
								echo 'Inscription';
								echo '</a>'; 
							}
							else {
								echo '<a href="../index/index.php" class="header_text_mediaquerie">';
								echo '<form method="post"> <input type="submit" name="Déconnexion" value="Déconnexion"> </form>';
								echo "</a>";
							        if(isset($_POST["Déconnexion"])){
	         						 session_unset();
	         						 header('location: ../index/index.php');
     							}
							}
						?>
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
				<?php
					if (!isset($_SESSION["id"])) {
						echo "";
					}
				else {
					echo '<a href="../profil/profil.php>"';
					echo 'Profil';
					echo '</a>';
					}
				?>
			</div>
			<div class="boxe1">
				<a href="../index/index.php">
					Menu
				</a>
			</div>
		</nav>
	</header>
	<main id="main_commentaire">
		<div id="image_main_commentaire">
			<form method="post">
				<section class="section_form_commentaire">
					<div class="divform">
						<div class="title_form_section_commentaire">
							<p>Ajouter un commentaire</p>
						</div>
					</div>
					<div class="divform">
						<div class="title_form_section_commentaire">
							<textarea rows="4" cols="50" name="textarea" placeholder="Ajouter votre commentaire" required="required"></textarea>
						</div>
					</div>
					<div class="divform">
						<div class="title_form_section_commentaire">
							<input type="submit" name="Ajouter" value="Ajouter">
						</div>
					</div>
				</section>
			</form>
		</div>
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