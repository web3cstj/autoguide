<?php
/*
Intégration web III - TP1 - Groupe du mardi
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
Cette page affiche la liste des voitures disponibles sur le site
- Inclure le fichier de la class Auto
- Inclure le fichier donnees.php contenant les données des voitures
- Commencer par le fichier Auto.php
*/
?><!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="autoguide.css" />
	<title>Liste des voitures</title>
</head>

<body>
	<div class="interface">
		<header>
			<h1><a href="index.php">AutoGuide.qc</a></h1>
			<!-- /* Faire afficher le fil d'Ariane dans le nav; */ -->
			<nav>
				<ul id="ariane">
					<li><span>Accueil</span></li>
				</ul>
			</nav>
		</header>
		<section class="body">
			<article>
				<header>
					<h1>Liste des voitures</h1>
				</header>
				<!-- /* Faire afficher la liste des voitures ici */ -->
				<ul class="listeMarques">
					<li><a href="marque.php?nomMarque=Ford">Ford</a>
						<ul class="listeModeles">
							<li>
								<a href="modele.php?nomMarque=Ford&amp;nomModele=Fiesta"><img class="tb" src="images/ford_fiesta_tb.jpg" alt="Ford Fiesta" title="Ford Fiesta" /><span>Fiesta</span></a>
							</li>
							<li>
								<a href="modele.php?nomMarque=Ford&amp;nomModele=Focus"><img class="tb" src="images/ford_focus_tb.jpg" alt="Ford Focus" title="Ford Focus" /><span>Focus</span></a>
							</li>
							<li>
								<a href="modele.php?nomMarque=Ford&amp;nomModele=Fusion"><img class="tb" src="images/ford_fusion_tb.jpg" alt="Ford Fusion" title="Ford Fusion" /><span>Fusion</span></a>
							</li>
						</ul>
					</li>
					<li><a href="marque.php?nomMarque=Nissan">Nissan</a>
						<ul class="listeModeles">
							<li>
								<a href="modele.php?nomMarque=Nissan&amp;nomModele=Versa"><img class="tb" src="images/nissan_versa_tb.jpg" alt="Nissan Versa" title="Nissan Versa" /><span>Versa</span></a>
							</li>
							<li>
								<a href="modele.php?nomMarque=Nissan&amp;nomModele=Altima"><img class="tb" src="images/nissan_altima_tb.jpg" alt="Nissan Altima" title="Nissan Altima" /><span>Altima</span></a>
							</li>
						</ul>
					</li>
					<li><a href="marque.php?nomMarque=Ferrari">Ferrari</a>
						<ul class="listeModeles">
							<li>
								<a href="modele.php?nomMarque=Ferrari&amp;nomModele=California"><img class="tb" src="images/ferrari_california_tb.jpg" alt="Ferrari California" title="Ferrari California" /><span>California</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</article>
		</section>
		<footer>
			&copy; 2017 - Travail fait dans le cadre du cours <cite>Intégration Web III</cite>
		</footer>
	</div>
</body>

</html>
