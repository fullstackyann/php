<?php
/*require_once ('Personne.php');
$p1 = new Personne('Dumas');
$p2 = new Personne('Martin');*/
use \peopleapp\personne\Etudiant as Etu;
use \peopleapp\personne\Enseignant as Enseignant;
use \peopleapp\afficheur as aff;
use \peopleapp\personne\Groupe as Groupe;

require_once ('src/peopleapp/utils/ClassLoader.php');

$load = new peopleapp\utils\ClassLoader('src');
$load->register();


/*
 *
 *
 * CRÉATION DES ÉTUDIANTS/ENSEIGNANTS
 *
 * */

$p1 = new Etu('Dumas');
$p3 = new Etu('Jo');
$p4 = new Etu('joana');
$p2 = new Enseignant('Martin');

    $p4->prenom = 'enzo';
    $p3->prenom = 'jo';
	$p1->prenom = 'yann';


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


  $p1->ajouterNote("Maths",5);
  $p1->ajouterNote("Maths", 15);

  $p1->ajouterNote("Musique", 20);

  $p1->ajouterNotes("Maths", "5;15");

$p3->ajouterNote("Maths",5);
$p3->ajouterNote("Programmation", 15);

$p3->ajouterNote("Musique", 20);

$p3->ajouterNotes("Maths", "20;15");


$p4->ajouterNote("Maths",12);
$p4->ajouterNote("Programmation", 11);

$p4->ajouterNote("Musique", 9);

$p4->ajouterNotes("Maths", "20;15;13");

/*
$note = array("Maths");
$note["Maths"] = array();

if(isset($note["Maths"])){



    array_push($note["Maths"], 14, 15);

    var_dump($note);
}*/


try{

    $moy = $p1->calculerMoyenneMat("Maths");
    echo('<p>La moyenne en Maths de '.$p1->nom.' est : '.$moy.'</p>');

} catch (Exception $e){

    echo "<p>".$e->getMessage()."</p>";
}
try{

    $moy = $p3->calculerMoyenneMat("Maths");
    echo('<p>La moyenne en Maths de '.$p3->nom.' est : '.$moy.'</p>');

} catch (Exception $e){

    echo "<p>".$e->getMessage()."</p>";
}



/*
 *
 *
 *
 * Moyenne Générale
 *
 *
 *
 *
 * */

try{

    echo ('<p>Voici le tableau de la moyenne générale de '.$p1->prenom.' :</p>');
    $moyenne = $p1->calculerMoyenneGenerale();
    print_r($moyenne);

} catch (Exception $e){

    echo "<p>".$e->getMessage()."</p>";
}

try{

    echo ('<p>Voici le tableau de la moyenne générale de '.$p3->prenom.' :</p>');
    $moyenne = $p3->calculerMoyenneGenerale();
    print_r($moyenne);

} catch (Exception $e){

    echo "<p>".$e->getMessage()."</p>";
}




$grp = new Groupe('groupe 1','s1','CISIIE');

$grp->ajouterEtudiant($p1);
$grp->ajouterEtudiant($p3);
$grp->ajouterEtudiant($p4);

echo ('<p>Moyenne du '.$grp->groupe.' en Maths :</p>');
$moyenneGroupeMat = $grp->calculerMoyenneGroupeMat('Maths');

echo ($moyenneGroupeMat);

echo ("<h1>Moyenne général de chaque éléve appartenant au $grp->groupe </h1>");
echo ("<p>Trié par nom :</p>");
print_r($grp->calculerMoyenneGroupe('noms'));
echo ("<p>Trié par moyenne :</p>");
print_r($grp->calculerMoyenneGroupe());
