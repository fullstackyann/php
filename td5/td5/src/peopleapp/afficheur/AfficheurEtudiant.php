<?php
namespace peopleapp\afficheur;

class AfficheurEtudiant extends AfficheurPersonne{

	public function __construct($personne){
		
		parent::__construct($personne);
				
	} 
	
	public function vueCourte (){
				
				
				$chaine ="<div><p>Prenom : ";
				$chaine .= $this->personne->prenom."</p>";
				$chaine .= "<p>Nom : ".$this->personne->nom."</p>";
				$chaine .= "<p>Ville : ".$this->personne->ville."</p></div>";
				
				echo $chaine;

	}

	public function VueDetails(){

        $chaine ="<div><p>Prenom : ";
        $chaine .= $this->personne->prenom."</p>";
        $chaine .= "<p>Nom : ".$this->personne->nom."</p>";
        $chaine .= "<p>Ville : ".$this->personne->ville."</p>";
        $chaine .= "<p>Age : ".$this->personne->age."</p>";
        $chaine .= "<p>Adresse : ".$this->personne->adresse."</p>";
        $chaine .= "<p>mail : ".$this->personne->mail."</p>";
        $chaine .= "<p>Mobile : ".$this->personne->mobile ."</p>";
        $chaine .= "<p>Skype : ".$this->personne->idskype."</p>";
        $chaine .= "<p>Numéro étudiant : ".$this->personne->num_etudiant."</p>";
        $chaine .= "<p>Référence étudiant : ".$this->personne->ref_formation."</p>";
        $chaine .= "<p>Groupe étudiant : ".$this->personne->groupe."</p>";


        echo $chaine;

    }

}
 
