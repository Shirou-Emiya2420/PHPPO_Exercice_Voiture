<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ExoVoiture_1</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		require_once "Voiture.php";
		$v1 = new Voiture("Peugeot", "408", 5);
		$v2 = new Voiture("Citroën", "C4", 3); 
	?>

	<div class="container">
		<?php  $v1->demarrer(); $v1->accelerer(50);  $v2->demarrer(); $v2->stopper(); $v2->accelerer(50); $v1->affVitesse(); $v2->affVitesse(); ?>
	</div>
	<div class="container">
		Info du véhicule 1 <br>
		*********************** <br>
		<?php $v1->affGlobal() ?>
	</div>
	<div class="container">
		Info du véhicule 2 <br>
		*********************** <br>
		<?php $v2->affGlobal() ?>
	</div>
</body>
</html>