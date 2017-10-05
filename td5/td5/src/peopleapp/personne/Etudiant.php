<?php

namespace peopleapp\personne;

class Etudiant extends Personne{

    protected $num_etudiant, $ref_formation, $groupe, $notes;

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
    public function ajouterNote($matiere, $notation){


	    if(!isset($this->notes[$matiere])){

	        $this->notes[$matiere] = array();
	        array_push($this->notes[$matiere],$notation);

        } else {

	        array_push($this->notes[$matiere],$notation);

        }

    }
    public  function ajouterNotes($matiere, $notation){


        $tabNote = explode(";",$notation);


        if(!isset($this->notes[$matiere])){

            $this->notes[$matiere] = array();
            foreach($tabNote as $value){

                array_push($this->notes[$matiere],intval($value));

            }

        } else {

            foreach ($tabNote as $value){

                array_push($this->notes[$matiere],intval($value));
            }
        }
    }
    public function calculerMoyenneMat($matiere){

        $somme = 0;
        $count = 0;
        $moyenne = 0;

        if(isset($this->notes[$matiere])){

            foreach($this->notes[$matiere] as $value) {

                $somme += $value;
                $count++;

            }

            $moyenne = $somme / $count;
            return $moyenne;

        } else {

            throw new \Exception("L'étudiant n'a pas de note pour cette matière");

        }


    }

    public function calculerMoyenneGenerale(){
        // parcourir toutes les notes en fonction de la matière
        // appel de la fonction calculmoyenne
        // ensuite faire le calcule de la général avec les secondaire obtenu

        $tableauGenerale = array();
        $count = 0;
        $moyenne = 0;
        $somme = 0;
        if(isset($this->notes)){

            foreach ($this->notes as $key => $value) {

                $tableauGenerale[$key] = $this->calculerMoyenneMat($key);

            }

            foreach ($tableauGenerale as $key => $value){

                $somme += $value;
                $count++;
            }

            $moyenne = $somme / $count;

            $tableauGenerale['Generale'] = $moyenne;
            return $tableauGenerale;

        } else {

            throw new \Exception("Il n'y à pas de notes");

        }

    }
}
