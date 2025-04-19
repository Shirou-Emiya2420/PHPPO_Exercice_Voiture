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
		$v1 = new Voiture("Peugeot", "408");
		$ve1 = new VoitureElec("BMW", "I3", 100); 
	?>

	<div class="container">
		<?php $v1->getInfos()  ?>
	</div>
	<div class="container">
		<?php $ve1->getInfos()  ?>
	</div>
</body>
</html>