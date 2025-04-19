<?php 
	class Voiture {
		private string $_marque;
		private string $_modèle;

		function __construct($marque, $modele){
			$this->_marque = $marque;
			$this->_modèle = $modele;
		}

		public function getInfos(){
			echo "Nom et modèle du véhicule : " . $this->_marque . " " . $this->_modèle . " <br>";
		}

		public function getMarque(): string{
			return $this->_marque;
		}
		public function getModele(): string{
			return $this->_modèle;
		}
	
		public function setMarque(string $val): void{
			$this->_marque = $val;
		}
		public function setModele(string $val): void{
			$this->_modèle = $val;
		}
		

	}
	class VoitureElec extends Voiture{
		private int $_autonomie;

		public function __construct($marque, $modele, $autonomie){
			parent::__construct($marque, $modele);
			$this->_autonomie = $autonomie;
		} 

		public function getInfos(){
			parent::getInfos();
			echo "Autonomie du véhicule : " . $this->_autonomie . " <br>";
		}


		public function getAutonomie(): int{
			return $this->_autonomie;
		}
		public function setAutonomie(int $val): void{
			$this->_autonomie = $val;
		}
		
	}
?>