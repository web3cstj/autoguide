<?php
/*
Intégration web III - TP1 - Groupe du mardi
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
Cette page affiche la liste des modèles en fonction de la marque fournie dans l'adresse
- Inclure le fichier de la class Auto
- Inclure le fichier donnees.php contenant les données des voitures (crée la variable $autos)
- Commencer par le fichier Auto.class.php

- Cette page s'attend à recevoir de l'adresse la donnée "nomMarque". Il faut donc récupérer cette donnée.
- S'il manque la marque dans l'adresse, on DOIT retourner à la page index.php
- Si la marque ne se trouve pas dans la variable $autos, on DOIT retourner à la page index.php
*/
?><!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="autoguide.css" />
	<!-- /* Faire afficher le nom de la marque dans le title; */ -->
	<title>Ford</title>
</head>

<body>
	<div class="interface">
		<header>
			<h1><a href="index.php">AutoGuide.qc</a></h1>
			<nav id="ariane">
				<!-- /* Faire afficher le fil d'Ariane ici; */ -->
				<ul id="ariane">
					<li><a href="index.php">Accueil</a></li>
					<li><span>Ford </span></li>
				</ul>
			</nav>
		</header>
		<section class="body">
			<article>
				<header>
					<!-- /* Faire afficher le nom de la marque dans le h1; */ -->
					<h1>Ford</h1>
				</header>
				<!-- /* Faire afficher la liste de modèles ici; */ -->
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
			</article>
		</section>
	</div>
</body>

</html>
