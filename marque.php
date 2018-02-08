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
include_once("Auto.php");
include_once("donnees.php");

if (!isset($_GET['nomMarque'])) {
	header("location:index.php");
	exit;
}
$nomMarque = $_GET['nomMarque'];
if (!isset($autos[$nomMarque])) {
	header("location:index.php");
	exit;
}
$marque = $autos[$nomMarque];
?><!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="autoguide.css" />
	<!-- /* Faire afficher le nom de la marque dans le title; */ -->
	<title><?php echo $nomMarque ?></title>
</head>

<body>
	<div class="interface">
		<header>
			<h1><a href="index.php">AutoGuide.qc</a></h1>
			<nav id="ariane">
				<!-- /* Faire afficher le fil d'Ariane ici; */ -->
				<?php echo Auto::ariane($nomMarque); ?>
			</nav>
		</header>
		<section class="body">
			<article>
				<header>
					<!-- /* Faire afficher le nom de la marque dans le h1; */ -->
					<h1><?php echo $nomMarque; ?></h1>
				</header>
				<!-- /* Faire afficher la liste de modèles ici; */ -->
				<?php echo Auto::listeModeles($nomMarque, $marque); ?>
			</article>
		</section>
	</div>
</body>
</html>
