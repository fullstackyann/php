<?php
	namespace peopleapp\afficheur;

	abstract class AfficheurPersonne{

		public $personne;
		
		function __construct($personne){
		
		$this->personne = $personne;
		
		}

		abstract public function vueCourte();
		
		abstract public function vueDetails();
		
		public function afficher($sel){
		
			if ($sel=='court'){
				
				$this->vueCourte();	
				
			}
			
			if ($sel=='long'){
				
				$this->vueDetails();	
				
			}
			
			
		}
			
    }
