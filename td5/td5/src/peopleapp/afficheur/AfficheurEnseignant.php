<?php
namespace peopleapp\afficheur;

class AfficheurEnseignant extends AfficheurPersonne{

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
	
	public function vueDetails (){
				
        // test si conjoint

        $chaine ="<div><p>Prenom : ";
        $chaine .= $this->personne->prenom."</p>";
        $chaine .= "<p>Nom : ".$this->personne->nom."</p>";
        $chaine .= "<p>Ville : ".$this->personne->ville."</p>";
        $chaine .= "<p>Age : ".$this->personne->age."</p>";
        $chaine .= "<p>Adresse : ".$this->personne->adresse."</p>";
        $chaine .= "<p>mail : ".$this->personne->mail."</p>";
        $chaine .= "<p>Mobile : ".$this->personne->mobile ."</p>";
        $chaine .= "<p>Skype : ".$this->personne->idskype."</p></div>";
        $chaine .= "<p>Discipline : ".$this->personne->discipline."</p></div>";
        $chaine .= "<p>Composante : ".$this->personne->composante."</p></div>";
        $chaine .= "<p>Bureau : ".$this->personne->bureau."</p></div>";

        $chaine .= "\n <h1>Description courte du conjoint : </h1> \n";


        if($this->personne->conjoint != null ){

            echo $chaine;

            $pb = new AfficheurEnseignant($this->personne->conjoint);

            // affiche le conjoint de $this->personne (de $pX)

            $pb->vueCourte();

        } else {

            $chaine .= "<p> L'enseignant : ".$this->personne->prenom."  ".$this->personne->nom." n'a pas de conjoint</p>";
            echo $chaine;


        }

    }
	
	
}
