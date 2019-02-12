<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
Cette page affiche la liste des voitures disponibles sur le site
- Inclure le fichier de la class Auto
- Inclure le fichier donnees.inc.php contenant les données des voitures
- Commencer par le fichier Auto.php
=========================================================================
*/
include_once("includes/Auto.php");
include_once("includes/donnees.inc.php");
?><!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="autoguide.css" />
	<title>Liste des voitures</title>
</head>

<body>
	<div class="interface">
		<!-- /* Inclure le header ici */ -->
		<?php include "includes/header.php" ?>
		<!-- /* Faire afficher le fil d'Ariane ici */ -->
		<?php echo Auto::ariane(); ?>
		<section class="body">
			<article>
				<header>
					<h1>Liste des voitures</h1>
				</header>
				<!-- /* Faire afficher la liste des voitures ici */ -->
				<?php echo Auto::listeMarques($donnees); ?>
			</article>
		</section>
		<!-- /* Inclure le footer ici */ -->
		<?php include "includes/footer.php" ?>
	</div>
</body>

</html>
