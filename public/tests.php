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
// var_dump(Auto::listeMarques($voitures));
// var_dump(Auto::listeModeles('Ford', $voitures['Ford']));
// echo Auto::listeModeles('Ford', $voitures['Ford']);
// echo Auto::listeMarques($voitures);
// var_dump(Auto::image('ferrari', 'california','voiture'));
// var_dump(Auto::listeModeles('ford','fiesta'));
// var_dump(Auto::listeMarques('Ford'));
// var_dump(Auto::listeModeles(''));
// var_dump(Auto::ligne("allo","chat"));
// var_dump(Auto::ligne_puissance("allo"));
echo Auto::ligne_puissance($voitures['Ford']['Fiesta']['puissance']);
echo Auto::ligne_couple($voitures['Ford']['Fiesta']['couple']);
echo Auto::ligne_transmissions($voitures['Ferrari']['California']['transmissions']);
echo Auto::ligne_consommation($voitures['Ferrari']['California']['consommation']);
// echo Auto::ligne_couple("");
// echo Auto::ariane('Ford', 'Fiesta');
// echo Auto::lien('Ford', 'Fiesta');
// echo Auto::image('Ford', 'Fiesta');
?>
<!-- tableau =  array('nomCle' => array('uneCle' => array('nomCle' => etcetc)));
$voitures       valeur   cle       valeur cle        valeur cle         valeur... -->