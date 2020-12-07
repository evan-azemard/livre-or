<?php
session_start();  
?>
<!DOCTYPE html>
<html lang="fr">			<!--Page d'accueil-->
<head>
	<title>Le monde du smartphone</title>
	<script src="https://use.fontawesome.com/d3028f0b61.js"></script>
	<link rel="stylesheet" type="text/css" href="../../Page_CSS/livre_or.css">
	<link rel="shortcut icon" href="https://banner2.kisspng.com/20180320/jpw/kisspng-iphone-5s-iphone-4s-iphone-6-iphone-8-plus-black-iphone-7-png-5ab187f21c6803.8974388315215841141164.jpg"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">
	<meta name="description" content="Venez découvrir l'incroyable univers du smartphone!"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="utf-8"/>
</head>
<body id="body_index">
	<header>
		<div id="header_connexion">
			<div id="menu_connexion">
				<div id="header_login">
					<div class="header_centre_connexion">
						<?php
						if (!isset($_SESSION["id"])) { 	
							echo "Login"; 
							} 
						else { 								
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
				<a href="../profil/profil.php">
					Profil
				</a>
			</div>
		</nav>
	</header>
	<main>
		<div id="nav_nav">
			<ul>
				<li><a class="active" href="#">LG G4</a></li>
			    <li><a href="#">LG G8</a></li> <!-- si j'ai le temps -->
			    <li><a href="#">LG Wing</a></li> <!-- si j'ai le temps -->
			</ul>
		</div>
		<div id="main_contenue">
			<div id="main_contien">
				<div id="container1_main">
					<div id="titre_container1_main">
						<p> Présentation LG G4</p>
					</div>
				</div>
				<div id="container2_main">
				</div>
				<div id="container3_main">
					<section id="section1_main">
						<article id="article1_section1_main">
							<div id="SOUSarticle1_article1_section1">
								<p>Fiche technique</p>
							</div>
						</article>
						<article id="article2_section1_main">
							<table>
								<tr class="tr1">
									<td>
										<p>Système</p>
									</td>
									<td>
										<p>Android 6.0</p>
									</td>
								</tr>
								<tr>
									<td>
										<p>Interface utilisateur</p>
									</td>
									<td>
										<p>LG UX 4.0</p>
									</td>
								</tr>
								<tr class="tr1">
									<td>
										<p>Processeur</p>
									</td>
									<td>
										<p>Qualcomm Snapdragon 808</p>
									</td>
								</tr>
								<tr>
									<td>
										<p>Nombre de coeurs</p>
									</td>
									<td>
										<p>6</p>
									</td>
								</tr>
								<tr class="tr1">
									<td>
										<p>Fréquence processeur</p>
									</td>
									<td>
										<p>1.8 GHz</p>
									</td>
								</tr>
								<tr>
									<td>
										<p>Puce graphique</p>
									</td>
									<td>
										<p>Qualcomm Adreno 418</p>
									</td>
								</tr>
								<tr class="tr1">
									<td>
										<p>Support cartes mémoire</p>
									</td>
									<td>
										<p>Oui</p>
									</td>
								</tr>
								<tr>
									<td>
										<p>Type de cartes supportées</p>
									</td>
									<td>
										<p>microSD, microSDHC, microSDXC</p>
									</td>
								</tr>
								<tr class="tr1">
									<td>
										<p>Mémoire vive (RAM)</p>
									</td>
									<td>
										<p>3 Go</p>
									</td>
								</tr>
								<tr>
									<td>
										<p>Mémoire flash Libre</p>
									</td>
									<td>
										<p>22 Go</p>
									</td>
								</tr>
								<tr class="tr1">
									<td>
										<p>Indice DAS</p>
									</td>
									<td>
										<p>0.62 W/kg</p>
									</td>
								</tr>
								<tr>
									<td>
										<p>Double SIM</p>
									</td>
									<td>
										<p>Non</p>
									</td>
								</tr>
								<tr class="tr1">
									<td>
										<p>Taille (diagonale)</p>
									</td>
									<td>
										<p>5.5p</p>
									</td>
								</tr>
								<tr>
									<td>
										<p>Technologie de l'écran</p>
									</td>
									<td>
										<p>IPS</p>
									</td>
								</tr>
								<tr class="tr1">
									<td>
										<p>Définition de l'écran</p>
									</td>
									<td>
										<p>1440 x 2560 px</p>
									</td>
								</tr>
								<tr>
									<td>
										<p>Résolution de l'écran</p>
									</td>
									<td>
										<p>538 ppp</p>
									</td>
								</tr>
								<tr class="tr1">
									<td>
										<p>Capacité de la batterie</p>
									</td>
									<td>
										<p>3000 mAh</p>
									</td>
								</tr>
								<tr>
									<td>
										<p>Capteur photo principal</p>
									</td>
									<td>
										<p>16 Mpx</p>
									</td>
								</tr>
								<tr class="tr1">
									<td>
										<p>Enregistrement vidéo (principal)</p>
									</td>
									<td>
										<p>3840 x 2160 px</p>
									</td>
								</tr>
								<tr>
									<td>
										<p>Définition vidéo du capteur en façade</p>
									</td>
									<td>
										<p>1920 x 1080 px</p>
									</td>
								</tr>
							</table>
						</article>
					</section>
					<section id="section2_main">
						<article id="article1_section2_main">
							<div id="SOUSarticle1_article1_section2">
								<p>Résumé</p>
							</div>
						</article>
						<article id="article2_section2_main">
							<div id="SOUSarticle1_article2_section2">
								<p id="p1">
								C’est là que le G4 nous a particulièrement époustouflés ! Son   capteur photo fait des merveilles sur notre mire. Beaucoup mieux que l’iPhone 6 Plus et encore plus détaillé que le Galaxy S6 (même si un peu plus bruité). C’est surtout en basse lumière que le G4 se démarque le plus nettement : les photos sont incroyablement détaillées et lumineuses, surtout que l’appareil déclenche toujours aussi vite !
								En pratique, certaines photos sont ratées, avec une retouche parfois trop présente en haute luminosité (effet « pastelle »). Le mode HDR est un peu trop frileux selon nous, il faudrait le forcer, surtout qu’il est très rapide et permet de prendre des sujets en mouvement sans dédoublement d’image. Des détails qui pourront être corrigés par une mise à jour, selon nous.
								</p>
							</div>
						</article>
					</section>
				</div>
				<div id= "container4_main">
					<div id="SOUScontainer1_container4_main">
						<p>
							Le LG G4 est l’un des smartphones les plus surprenants de l’année 2015. Son écran constitue une avancée remarquable pour la technologie IPS et ses performances en photo relancent la course à la qualité d’image, surtout en basse luminosité. Sans parler de sa coque en cuir, qui s’avère être une alternative crédible au métal. Dommage que l’appareil n’offre pas une autonomie plus solide pour les utilisateurs les plus accros à leur smartphone, les plus susceptibles d’acheter un modèle haut de gamme.
						</p>
					</div>
					<div id="SOUScontainer2_container4_main">
						<table>
						    <thead>
						        <tr>
						            <th class="THeadIMG"></th>
				                    <th class="THeadIMG"></th>
						            <th class="THeadIMG"></th>
					                <th class="THeadIMG"></th>
					                <th class="THeadIMG"></th>
					                <th class="THeadIMG"></th>
					                <th class="THeadIMG"></th>
					                <th class="THeadIMG"></th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
					                <td>
						                <img src="../../image/imgpre.png" alt="présentation">
						            </td>
						            <td>
						                <img src="../../image/imgpre.png" alt="présentation">
						            </td>
					                <td>
					                    <img src="../../image/imgpre.png" alt="présentation">
					                </td>
					                <td>
					                    <img src="../../image/imgpre.png" alt="présentation">
						            </td>
					 	            <td>
				           		        <img src="../../image/imgpre.png" alt="présentation">
						            </td>
						            <td>
						                <img src="../../image/imgpre.png" alt="présentation">
						            </td>
						            <td>
						                <img src="../../image/imgpre.png" alt="présentation">
						            </td>
						        </tr>
					            <tr>
					                <td>
					                    <img src="../../image/imgpre.png" alt="présentation">
					                </td>
					                <td>
					 	                <img src="../../image/imgpre.png" alt="présentation">
					                </td>
					                <td>
					                    <img src="../../image/imgpre.png" alt="présentation">
					                </td>
						            <td>
						                <img src="../../image/imgpre.png" alt="présentation">
						            </td>
						            <td>
					                    <img src="../../image/imgpre.png" alt="présentation">
					                </td>
					                <td>
					                    <img src="../../image/imgpre.png" alt="présentation">
					                </td>
					                <td>
					                    <img src="../../image/imgpre.png" alt="présentation">
					                </td>
					          	 </tr>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</main>
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