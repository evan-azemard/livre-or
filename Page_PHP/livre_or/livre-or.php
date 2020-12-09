<?php  
session_start();  
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
<body id="blivre">
<header id="header_livre">
		<div id="header_connexion">
			<div id="menu_connexion">
				<div id="header_login">
					<div class="header_centre_connexion">
						<a href="#" class="header_text_mediaquerie">
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
						<?php
						if (!isset($_SESSION["id"])) {
							echo '<a href="../inscription/inscription.php" class="header_text_mediaquerie">';
							echo 'Inscription';
							echo '</a>'; 
						}
						else{
							echo '<form method="post"> <input type="submit" name="Déconnexion" value="Déconnexion"> </form>';
						        if(isset($_POST["Déconnexion"])){
         						 session_unset();
         						 header('location: ../index/index.php');
     						}
						}
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
				<a href="#">
					Livre d'or
				</a>
			</div>
			<div class="boxe1">
							<?php
						if (!isset($_SESSION["id"])) { 	
							echo "";
						} 
						else { 								
							echo '<a href="../commentaire/commentaire.php">';
							echo 'Ajouter un commentaire';
						   	echo '</a>';
						}
						?>
			</div>
			<div class="boxe1">
				<a href="../profil/profil.php">
					Profil
				</a>
			</div>
			<div class="boxe1">
				<a href="../index/index.php">
					Menu
				</a>
			</div>
		</nav>
	</header>
	<main id="main_livre">
				<?php
  			   	    $bdd = new mysqli("localhost", "root", "", "livreor");
					$sql = " SELECT commentaire, login, date FROM commentaires INNER JOIN utilisateurs ON utilisateurs.id = commentaires.id_utilisateur ";

 					if (isset($_SESSION["username"])){

						$result = mysqli_query ($bdd,$sql);

						// Test pour trier par ordres.
						// foreach ($result as $results)
						// 	{
						// 		sort($results);
						// 	}

  						while ($rows = mysqli_fetch_assoc($result)){
  						echo '<div class="div1livre">';
						echo '<div class="ecrire">';
						echo '<p>';
		                echo 'publié par :';
		                echo $rows['login'] . "";
		                echo '<br/> <br/><br/>';
		                echo $rows['commentaire'];
		                echo '<br/><br/>';
						echo '<br/>';
		                echo 'le ';
		                echo substr($rows['date'],8,2);
		                echo '-';
		                echo substr($rows['date'],5,2);
		                echo '-';
		                echo substr($rows['date'],0,4);
		                echo '<br/>';
		                echo '</p>';
		                echo '</div>';
		                echo '</div>';
		                } 
		            }
             	 ?>
		<div class="div1livre">
			<div class="ecrire">
				<p>Exmple de commentaire</p>
			</div>
		</div>
		<div class="div1livre">
			<div class="ecrire">
				<p>Exmple de commentaire</p>
			</div>
		</div>
		<div class="div1livre">
			<div class="ecrire">
				<p>Exmple de commentaire</p>
			</div>
		</div>
	</main>
	<footer id="livre_footer">						<!-- FOOTER -->
		<div id="container1_footer_livre">
			<div id="icone_livre">		
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
		<div id="container2_footer_livre">
			<div id="footer_centre_titre_livre">
				<p>Le monde du smartphone</p>
			</div>
		</div>
		<div id="container3_footer_livre">
			<p>Evan Azemard</p>
		</div>
	</footer>
</body>
</html>