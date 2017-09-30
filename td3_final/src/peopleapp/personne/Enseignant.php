<?php
namespace peopleapp\personne;

class Enseignant extends Personne {

    protected $discipline, $composante, $bureau, $conjoint;


	public function __construct($val_nom){
		
		parent::__construct($val_nom);
				
	} 

	public function ajouterConjoint(Personne $conjoint){
		
		$this->conjoint = $conjoint;
	
	}

}
