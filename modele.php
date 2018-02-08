<?php
/*
=========================================================================
Intégration web III - TP1 - Groupe du mardi
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
Cette page affiche une auto en fonction de la marque et de l'adresse fournis dans l'adresse
- Inclure le fichier de la class Auto
- Inclure le fichier donnees.inc.php contenant les données des voitures
- Commencer par le fichier Auto.class.php

- Cette page s'attend à recevoir de l'adresse les données "nomMarque" et "nomModele". Il faut donc récupérer ces données.
- S'il manque une de ces deux données dans l'adresse, on DOIT retourner à la page index.php
- Récupérer la voiture correspondante
- Si la voiture ne se trouve pas dans la variable $autos, on DOIT retourner à la page index.php
=========================================================================
*/
include_once("Auto.class.php");
include_once("donnees.inc.php");

if (!isset($_GET['nomMarque']) || !isset($_GET['nomModele'])) {
	header("location:index.php");
	exit;
}
$nomMarque = $_GET['nomMarque'];
$nomModele = $_GET['nomModele'];
$voiture = Auto::trouverModele($autos, $nomMarque, $nomModele);
if ($voiture === false) {
	header("location:index.php");
	exit;
}
?><!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="autoguide.css" />
	<!-- /* Faire afficher le titre de la voiture ici (dans un title); */ -->
	<?php echo Auto::titre($nomMarque, $nomModele, 'title') ?>
</head>

<body>
	<div class="interface">
		<!-- /* Inclure le header ici */ -->
		<?php include "header.php" ?>
		<!-- /* Faire afficher le fil d'Ariane ici; */ -->
		<?php echo Auto::ariane($nomMarque, $nomModele); ?>
		<section class="body">
			<article>
				<header>
					<!-- /* Faire afficher le titre de la voiture ici (dans un h1); */ -->
					<?php echo Auto::titre($nomMarque, $nomModele, 'h1'); ?>
				</header>
				<!-- /* Faire afficher la voiture ici; */ -->
				<?php echo Auto::affichageVoiture($voiture, $nomMarque, $nomModele); ?>
			</article>
		</section>
		<!-- /* Inclure le footer ici */ -->
		<?php include "footer.php" ?>
	</div>
</body>
</html>
