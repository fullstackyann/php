<?php
/**
 * Created by PhpStorm.
 * User: yann
 * Date: 04/10/17
 * Time: 11:11
 */
namespace peopleapp\personne;

class Groupe {

    protected $groupe, $formation, $semestre, $liste;
    function __construct($groupe, $semestre, $formation)
    {

        $this->groupe = $groupe;
        $this->formation = $formation;
        $this->semestre = $semestre;
        $this->liste = array();

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

    public function ajouterEtudiant($etudiant){

        array_push($this->liste, $etudiant);

    }

    public function  calculerMoyenneGroupeMat($matiere){

        $tab = array();
        $increment = 0;
        $total = 0;
        $moyennegroupmat = 0;
        //calcule la moyenne du groupe dans une matiere
        foreach ($this->liste as $key => $value){

            // On récupère la méthode de l'objet étudiant
            // On ajoute la moyenne par matiere de chaque étudiant dans $total

            $total += $value -> calculerMoyenneMat($matiere);
            $increment++;// connaitre le nombre d'étudiant ( le nombre de moyenne )
        }
        // On doit faire la moyenne des moyenne du tableau tab

        $moyennegroupmat = $total / $increment;
        return $moyennegroupmat;

    }

    public function calculerMoyenneGroupe(){

        $tab = array();
        // retourne un tableau contenant
        // la liste des étudiants et leur moyenne générale
        // (nom comme clé et moyenne comme valeur)

        foreach ($this->liste as $key => $value){

            foreach ($value->calculerMoyenneGenerale() as $key2 => $value2){

                if($key2 == 'Generale'){
                    $tab[$value->prenom] = $value2;
                }
            }
        }

        return $tab;
    }
}