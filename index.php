<!DOCTYPE html>
<html>
<head>

</head>
<body > 

<!-- :::::::::::EXERCISE 1::::::::::::: -->


 <h3>EXERCISE 1</h3>
<br>
Un algo pour créer un tableau associatif à partir de deux autres tableaux.<br>
<br>
Tableau formateurs :<br>
$cuissons : ["à point", "saignant", "bleu", "bien cuit"]; $viandes : ["poulet", "boeuf", "mouton"];<br>
<br>
résultat attendu <br>
$commandes : ["poulet à point", "poulet saignant", "poulet bleu", etc... ]<br>
<br>
 
Appel de la fonction : maFonctionExercice1($viandes,$cuissons );<br>
<br>
<p style="color:red">
résultat : <br>
<?php
$viandes=["poulet", "boeuf", "mouton"];
$cuissons=["à point", "saignant", "bleu", "bien cuit"];
maFonctionExercice1(  $viandes,   $cuissons ) ;
?>
</br>
<?php

function maFonctionExercice1(Array $viandes, Array $cuissons ){
	$commande=array();
 
	for ($i=0; $i < count($viandes); $i++) { 
		for ($n=0; $n < count($cuissons); $n++) { 
			
			array_push($commande,($viandes[$i])." ".($cuissons[$n])); 
		}
	}
		print_r($commande);

 }
 ?>

 <br> <br> <br> <br> <!-- :::::::::::EXERCISE 2::::::::::::: -->


<h3>EXERCISE 2</h3>
<br>
Un algo pour transformer une chaine de caractères en tableau<br>

Phrase formateurs :<br>
$genres : "horreur fantastique action western thriller comédie drame romance historique";<br>

Résultat attendu<br>
$tags : ["horreur", "fantastique", "action", "western", etc...]<br>

Appel de la fonction : maFonctionExercice2($tags);<br>
<br>
<p style="color:red">
résultat : <br>

<?php
$genres="horreur fantastique action western thriller comédie drame romance historique";
maFonctionExercice2($genres);
?>

<?php 

function maFonctionExercice2 ($genres){
	print_r(explode(" ", $genres));
}

?>


 <br> <br> <br> <br><!-- :::::::::::EXERCISE 3::::::::::::: -->

<h3>EXERCISE 3</h3>
<br>
Un algo pour faire ressortir les deux derniers éléments d'un tableau dans un nouveau tableau<br>
<br>
Tableau formateur :<br>
$fruits : ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];<br>
<br>
résultat attendu :<br>
$fruits_favoris : ["noix de coco", "ananas"];<br>

<br>
Appel de la fonction : maFonctionExercice3($fruits);<br>
<br>
<p style="color:red">
<br>
résultat : <br>>

<?php 
$fruits= ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];
maFonctionExercice3($fruits);
?>
</p>

<?php 


function maFonctionExercice3 (Array $parametre) {
	$fruits_favoris=array();

	if (count($parametre)> 2) {
		$indexAvantDernier = count($parametre)-2 ;   // ou 6
		$indexDernierElement = count($parametre) -1;  // ou 7

		//je prends l'avant dernier
		array_push($fruits_favoris, $parametre[$indexAvantDernier]);
		// je prends le dernier
		array_push($fruits_favoris, $parametre[$indexDernierElement]);


	} else {
	   array_push($fruits_favoris, $parametre);

	}

	print_r($fruits_favoris);
}

 ?>


 <br> <br> <br> <br><!-- :::::::::::EXERCISE 4::::::::::::: -->


<h3>EXERCISE 4  </h3>
<br>
 
 $prenoms= array("Harry", "Hilary", "Harrington", "Hagrid", "Holmes");
<br>
Appel de la fonction : maFonctionExercice4($prenoms);<br>
<br>
<p style="color:red">
<br>
résultat : <br>


<?php 
 $prenoms= array("Harry", "Hilary", "Harrington", "Hagrid", "Holmes");
  maFonctionExercice4($prenoms);
?>
</p>

<?php 


function maFonctionExercice4 (Array $listePrenom) {
	$listResultat=array();

	if (count($listePrenom)> 2) {
		//calcul de l index on prend l arrondi sup
		 $indexASupprimer = ceil (count($listePrenom) / 2)-1;
		//on supprime la valeur
		 unset($listePrenom[$indexASupprimer]);
		 $listResultat =  array_values($listePrenom);
	 
	} else {
	   array_push($listResultat, $listePrenom);

	}

	print_r($listResultat);
}
 ?>



 <br> <br> <br> <br><!-- :::::::::::EXERCISE 5::::::::::::: -->
<h3>EXERCISE 5</h3>


<?php

$phrase=["ah...", "encore un beau dimanche", "de perdu", "cloîtré chez", "vous", "à coder", ",mais", " vous avez signé pour ça pas vrai ?", "alors courage !"];
$max = 0;
foreach ($phrase as $clef => $valeur) {
 
    if (strlen($valeur) > $max) {
        $max = strlen($valeur);
        $index = $clef;
    }
}

       echo "La phrase la plus longue comporte $max caractères et est : $phrase[$index]";   

 ?>



<br> <br> <br> <br> <!-- :::::::::::EXERCISE 6::::::::::::: -->

 <h3>EXERCISE 6 </h3>
<br>
Un algo pour modifier les valeurs d'un tableau de façon systèmatique<br>
<br>
Tableau formateur :<br>
$portables : ["0612459623", "0645896235", "0678145263", "0647895263", "0655069912"];<br>
<br>
résultat attendu :<br>
$portables : ["+33612459623", "+33645896235", "+33678145263", "+33647895263", "+33655069912"];<br>
 <br>
 
<br>
Appel de la fonction : maFonctionExercice6($portables);<br>
<br>
<p style="color:red">
<br>
résultat : <br>>
<?php 
$portables = ["0612459623", "0645896235", "0678145263", "0647895263", "0655069912"];
maFonctionExercice6($portables);
?>
</p>
<?php 


function maFonctionExercice6 (Array $listeTelPortable) {
	$portableInternationaux=array();
	$codePays = "+33";
	//pour chaque numéro
	foreach ($listeTelPortable as $telephonePortable) {
		// on retire le 0 
		$telSans0 = substr($telephonePortable, 1);
		// on ajoute pour la france +33
		array_push($portableInternationaux , $codePays . $telSans0);
	 } 
	
	 
	print_r($portableInternationaux);
}

 ?>

 <br> <br> <br> <br>

</body>

</html>


