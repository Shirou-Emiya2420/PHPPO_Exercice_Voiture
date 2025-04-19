<?php 
	class Voiture {
		private string $_marque;
		private string $_modèle;
		private int $_nbPortes;
		private int $_vitesseActuelle;
		private bool $_demarrer;

		function __construct($marque, $modele, $nbPortes){
			$this->_vitesseActuelle = 0;
			$this->_demarrer = false;
			$this->_marque = $marque;
			$this->_modèle = $modele;
			$this->_nbPortes = $nbPortes;
		}

		public function demarrer(): void{
			if($this->_demarrer){
				echo  "Le véhicule " . $this->_marque . " " . $this->_modèle . " est déjà en fonctionnement. <br>" ;
			}else{
				echo  "Le véhicule " . $this->_marque . " " . $this->_modèle . " démarre. <br>" ;
				$this->_demarrer = true;
			}

		}
		public function accelerer(int $acc): void{
			if($this->_demarrer){
				echo  "Le véhicule " . $this->_marque . " " . $this->_modèle . " accélère de " . $acc .  " km / h. <br>" ;
				$this->_vitesseActuelle += $acc;
			}else{
				echo  "Le véhicule " . $this->_marque . " " . $this->_modèle . " veut accélère de " . $acc . ". <br>" ;
				echo  "Pour accélerer, il faut démarrer le véhicule " . $this->_marque . " " . $this->_modèle . " ! <br>" ;
			}
		}
		public function stopper(): void{
			if(!$this->_demarrer){
				echo  "Le véhicule " . $this->_marque . " " . $this->_modèle . " est déjà à l'arrêt. <br>" ;
			}else{
				echo  "Le véhicule " . $this->_marque . " " . $this->_modèle . " est stoppé. <br>" ;
				$this->_demarrer = false;
				$this->_vitesseActuelle = 0;

			}
		}
		public function affVitesse(): void{
			echo "La vitesse du véhicule " . $this->_marque . " " . $this->_modèle . "est de : " . $this->_vitesseActuelle . " km / h. <br>" ;
		}
		public function affGlobal(): void{
			echo "Nom et modèle du véhicule : " . $this->_marque . " " . $this->_modèle . " <br> Nombre de portes : " . $this->_nbPortes . ". <br>";
			if($this->_demarrer){
				echo "Le véhicule " . $this->_marque . " est démarré. <br>";
			}else{
				echo "Le véhicule " . $this->_marque . " est à l'arrêt. <br>";
			}
			echo "Sa vitesse actuelle est de : " . $this->_vitesseActuelle . " km / h. <br>";
		}

		public function getMarque(): string{
			return $this->_marque;
		}
		public function getModele(): string{
			return $this->_modèle;
		}
		public function getNbPorte(): int{
			return $this->_nbPortes;
		}
		public function getVitesseActuelle(): int{
			return $this->_vitesseActuelle;
		}
	
		public function setMarque(string $val): void{
			$this->_marque = $val;
		}
		public function setModele(string $val): void{
			$this->_modèle = $val;
		}
		public function setNbPorte(int $val): void{
			$this->_nbPortes = $val;
		}
		public function setVitesseActuelle(int $val): void{
			$this->_vitesseActuelle = $val;
		}
		
	
	
	}
?>