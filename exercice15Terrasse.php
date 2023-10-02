<?php 
/*
    Exercice 1.5
Créer une classe Terasse
avec les attributs: 
- UNITE (constante)
- longueur
- largeur

ajouter en plus des getter et setter,
une methode
- getSurface : retourne la surface totale de la terasse avec l'unité

Créez une Terasse de 7m de longueur sur 15m de largeur
Affichez la surface de cette terasse avec son unité (m²)
----
Testez ce code en créant de nouveaux objets, en en
modifiant les propriétés via les setters et en récupérant les
données via les setters pour les afficher par la suite.

*/
// Autoload
require 'class/Autoloader.php';
spl_autoload_register(array('Autoloader', 'loadClass'));


// programme principal
echo "Test du programme principal <br>";
// Instantiation de l'objet
$terrasse1 = new Terrasse();


// Appel de la méthode
echo "<br>";
echo $terrasse1->setLongueur(7); // Modifie la valeur longueur
echo "<br>";
echo $terrasse1->setLargeur(15);

// Appel des autres méthodes
echo $terrasse1->getSurface();
echo "<br>";
// Afficher la constante de class lorsqu'on l'appelle de l'extérieur
echo "Ma constante de class est " .Terrasse::MA_CONSTANTE_UNITE;


