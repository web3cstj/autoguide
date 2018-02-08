<?php
/*
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
Cette page affiche la liste des voitures disponibles sur le site
- Inclure le fichier de la class Auto
- Inclure le fichier donnees.php contenant les données des voitures
- Commencer par le fichier Auto.php
*/
include_once("Auto.php");
include_once("donnees.php");
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
			<nav><?php echo Auto::ariane(); ?></nav>
		</header>
		<section class="body">
			<article>
				<header>
					<h1>Liste des voitures</h1>
				</header>
				<!-- /* Faire afficher la liste des voitures ici */ -->
				<?php echo Auto::listeMarques($autos); ?>
			</article>
		</section>
		<footer>
			&copy; 2017 - Travail fait dans le cadre du cours <cite>Intégration Web III</cite>
		</footer>
	</div>
</body>

</html>
