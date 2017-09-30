<?php 
namespace peopleapp\personne;

// Class personne est abstract pck chaque personne est un Etudiant ou un enseignant
abstract class Personne {

	protected $nom, $prenom, $age, $adresse, $ville, $codepostal, $mail, $mobile, $idskype;
	
	/* get et set (méthodes magiques) */
	// Faire autant de get&set que de classe quand c'est protected
	
	
	function __construct($val_nom){


        $this->nom = $val_nom;

	}
	
	function __get($attr_nom){

        if(property_exists(get_class($this),$attr_nom)){

            return $this->$attr_nom;

        } else {

            throw new \Exception('L\'attribut n\'éxiste pas');
        }

	}

	function __set($attr_nom, $valeur_nom){

        if(property_exists(get_class($this),$attr_nom)){

            $this->$attr_nom=$valeur_nom;

        } else {

            throw new \Exception('L\'attribut n\'éxiste pas');
        }
	}

	public function __toString(){
	
	$chaine = '{ ';
	$chaine .= "nom : ";
	$chaine .= $this->nom ." , \n";
	$chaine .= "prenom : ";
	$chaine .= $this->prenom ." , \n";
	$chaine .= "age : ";
	$chaine .= $this->age ." , \n";
	$chaine .= "adresse : ";
	$chaine .= $this->adresse ." , \n";
	$chaine .= "ville : ";
	$chaine .= $this->ville ." , \n";
	$chaine .= "codepostal : ";
	$chaine .= $this->codepostal ." , \n";
	$chaine .= "mail : ";
	$chaine .= $this->mail ." , \n";
	$chaine .= "mobile : ";
	$chaine .= $this->mobile ." , \n";
	$chaine .= "idskype: ";
	$chaine .= $this->idskype ." , \n }\n";

	return $chaine;
	
	}

	public function compter(){
		$chaine2="";
		for($i=0; $i<=$this->age;$i++){
			$chaine2 .= $i."\n";
		}
		echo ($chaine2);	
	}

}





