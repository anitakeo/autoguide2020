<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom : Anita Keobouarabath
-------------------------------------------------------------------------
Cette page devrait contenir les tests des méthodes
- Inclure le fichier de la class Auto
- Inclure le fichier donnees.inc.php contenant les données des voitures
- Commencer par le fichier Auto.php
=========================================================================
*/
include_once("../src/Auto.php");
include_once("../src/donnees.inc.php");
/*LIGNE DE TEST*/
// echo Auto::titre('Ford', 'Fiesta', 'strong');
// ... CONTINUER ...
// echo Auto::titre('Boudreau', 'Martin','h1');
// var_dump(Auto::trouverModele($voitures, 'Lada', 'California'));
// var_dump(Auto::trouverModele($voitures, 'Ford', 'California'));
// var_dump(Auto::trouverModele($voitures, 'Lada', 'Fiesta'));
// var_dump(Auto::affichageVoiture('','Ford','Fiesta'));
// var_dump(Auto::ariane(''));
// var_dump(Auto::ariane('Ford','Fiesta'));
// var_dump(Auto::lien('Ford', 'Fiesta'));
// var_dump(Auto::image('Ferrari', 'California','patate'));
// var_dump(Auto::image('Ferrari', 'California','voiture'));
var_dump(Auto::listeMarques($voitures));
// var_dump(Auto::listeModeles('Ford', ''));
// var_dump(Auto::image('ferrari', 'california','voiture'));
// var_dump(Auto::listeModeles('ford','fiesta'));
// var_dump(Auto::listeMarques('Ford'));
// var_dump(Auto::listeModeles(''));
// var_dump(Auto::ligne("allo","chat"));
// var_dump(Auto::ligne_puissance("allo","chat"));
?>