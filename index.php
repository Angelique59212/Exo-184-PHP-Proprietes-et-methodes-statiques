<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";

// Creation d'une instance de la classe personnage
$humain = new Personnage();
$humain->setNom("Angélique");

// Creation d'une instance de la classe dragon
$dragon = new Dragon();
$dragon->setNom("");

// Creation d'une instance de princesse
$princesse = new Princesse();

// Creation d'une instance de sorcier
$sorcier = new Sorcier();

echo Personnage::getNumInstances();
echo Dragon::getNumberDragon();






