<?php

namespace peopleapp\personne;

class Etudiant extends Personne{

    protected $num_etudiant, $ref_formation, $groupe;

	public function __construct($val_nom){
		
		parent::__construct($val_nom);
				
	} 
	
	public function ecrirePunition($phrase, $repetition){
		$machaine ="";
		for($i=0; $i<=$repetition; $i++){
		
			$machaine .="numero : ". $i . " " . $phrase."\n";
		}
		
		echo $machaine;
	
	}

}
