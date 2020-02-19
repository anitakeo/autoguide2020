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
var_dump(Auto::image('Ford','Fiesta','auto'));
?>