<?php
/*require_once ('Personne.php');
$p1 = new Personne('Dumas');
$p2 = new Personne('Martin');*/
use \peopleapp\personne\Etudiant as Etu;
use \peopleapp\personne\Enseignant as Enseignant;
use \peopleapp\afficheur as aff;

require_once ('src/peopleapp/utils/ClassLoader.php');

$load = new peopleapp\utils\ClassLoader('src');
$load->register();

//Les require_once dans le fichier principal
/*
require_once ('src/peopleapp/personne/Personne.php');
require_once ('src/peopleapp/personne/Etudiant.php');
require_once ('src/peopleapp/personne/Enseignant.php');
require_once ('src/peopleapp/afficheur/AfficheurPersonne.php');
require_once ('src/peopleapp/afficheur/AfficheurEnseignant.php');
require_once ('src/peopleapp/afficheur/AfficheurEtudiant.php');
*/


$p1 = new Etu('Dumas');
$p2 = new Enseignant('Martin');


	$p1->prenom = 'Yann';
	$p1->age = 22;
	$p1->adresse = 'Nancy';
	$p1->ville = 'Neuves-Maisons';
	$p1->codepostal = 54000;
	$p1->mail = 'dudumas@hotmail.fr';
	$p1->mobile =  '02 02 51 26 41';
	$p1->idskype = 'yannnnou';


	$p2->prenom = 'Alexandra';
	$p2->age = 22;
	$p2->adresse = 'Nancy';
	$p2->ville = 'Neuve Maisons';
	$p2->codepostal = 54000;
	$p2->mail = 'dudumas@hotmail.fr';
	$p2->mobile =  '02 02 51 26 41';
	$p2->idskype = 'yannnnou';
	

//$p1->__toString();

//echo ($p1->__toString()); 
// same as
//echo ($p2); 

//var_dump($p1);
//print_r($p2);



//$p1->compter($p1);
//echo ('Age : '.$p1->age);

//$p1->ecrirePunition("je suis alexandra", 3);


/*require_once ('AfficheurPersonne.php');
$pa = new AfficheurPersonne($p1);

$pa->vueCourte();
$pa->vueDetails();

$pa->afficher('court');
$pa->afficher('long');*/

/* TD3 */

// ÉTUDIANT COMPLET

$p1->num_etudiant = 442;
$p1->ref_formation = "cisiie";
$p1->groupe = "Licence professionnelle";

echo ("<h1>Affichage détaillé de l'étudiants</h1>");

$affichep1 = new aff\AfficheurEtudiant($p1);
$affichep1->VueDetails();

// ENSEIGNANT COMPLET

$p2->discipline = "programmation objet";
$p2->composante = "Informatique";
$p2->bureau = "Département informatique";

$p2->ajouterConjoint($p1);
//echo ('Le conjoint est : '.$p2->conjoint);

echo ('<h1>Affichage détaillé de l\'enseignant</h1>');

$affichep2 = new aff\AfficheurEnseignant($p2);
$affichep2->vueDetails();






