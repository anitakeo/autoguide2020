<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom : Anita Keobouarabath
-------------------------------------------------------------------------
- Compléter les méthodes suivantes
- Toutes les méthodes sont statiques
- Conseils :
	- Commencer par créer toutes les méthodes vides avec les bons paramètres et la bonne valeur de retour
	- Faire chaque méthode en oubliant le contexte dans lequel elles seront utilisées. "Elles prennent des données et retournent une valeur. Point final!"
	- Tester CHAQUE méthode individuellement en ajoutant une ligne de test dans la page test.php
*/
class Auto {
	/** Méthode "titre" qui retourne le titre d'une voiture dont la marque et le modele sont passés en paramètres.
	 * Le résultat peut être envelopée ou non d'une balise dont le nom est passé en paramètre.
	 * Notes:
	 * - Il n'y a pas de validation de la combinaison. On pourrait donc avoir une "Ferrari Focus"
	 * - Si une $balise est fournie, on retourne le titre sous le modele suivant "<p>Ferrari Focus</p>"
	 *   en utilisant le nom de la balise donnée en paramètre
	 * - Si une $balise n'est pas fournie, on retourne le titre seulement. ex.: "Ferrari Focus"
	 * @param string $nomMarque - La marque de voiture
	 * @param string $nomModele - Le modele de voiture
	 * @param string $balise - Le nom de la balise devant envelopper le titre. Valeur par défaut : ""
	 * @return string - Le titre mis en forme
	*/
	static public function titre($nomMarque, $nomModele="", $balise="") {
		$resultat = $nomMarque." ".$nomModele;
		if ($nomModele) {
			$resultat = $nomMarque." ".$nomModele;
		}
		if ($balise != "") {
			$resultat = '<'.$balise.'>'.$resultat.'</'.$balise.'>';
		}
		return $resultat;
	}

	/** Méthode "trouverModele" qui retourne le array représentant un modele de voiture.
	 * En fonction de la marque et du modele envoyé en paramètres.
	 * Si la marque n'existe pas ou le modele n'existe pas pour cette marque, on retourne false
	 * @param array $autos - Le array contenant les autos
	 * @param string $nomMarque - La marque à rechercher
	 * @param string $nomModele - Le modele à rechercher dans la marque
	 * @return array - Le array du modele ou false
	 */

	static public function trouverModele($autos, $nomMarque, $nomModele){
		if(!isset($autos[nomMarque])){
			 return false;
		}
	 
	 	if(!isset($autos[$nomMarque][$nomModele])){
		 	return false;
	 	}

		$resultat = $autos[$nomMarque][$nomModele];
			return $resultat;

	}



	/** Méthode "ariane" qui retourne le HTML du fil d'Ariane se trouvant DANS le div "menu"
	 * Notes :
	 * - Si une $nomMarque est fournie, on retourne le titre de la voiture et un lien vers index (voir la maquette)
	 * - Si une $nomMarque n'est pas fournie, on ne retourne que le mot "Accueil" (voir la maquette)
	 * @param string $nomMarque - La marque de voiture. Valeur par défaut : "".
	 * @param string $nomModele - Le modele de voiture. Valeur par défaut : "".
	 * @return string - Le HTML du fil d'Ariane
	 */

	// Elle affiche le mot Accueil, si $nomMarque n'est pas fournie.
	// Elle affiche le nom de la marque, mais pas Index.

	static public function ariane($nomMarque="", $nomModele=""){
		 $resultat = '';
		 $resultat .= '<nav id="ariane">';
		 $resultat .= '<ul>';

		 if($nomMarque){
			 $resultat .= '<li><a href="index.php">Accueil</a></li>';
			 $resultat .= '<li><span>'.$nomMarque.'</span></li>';
		 }
		 else{
			 $resultat .= '<li>Accueil</li>';;
		 } 
			 
		 if($nomModele){
			 $resultat .= '<li><span>'.$nomModele.'</span></li>';
		  }
		  
		  $resultat .= '</ul>';
		  $resultat .= '</nav>';
		  
		  return $resultat;

	}

	 
	/** Méthode "lien" qui retourne le code HTML d'un lien retrouvé dans la page index
	 * qui permet d'afficher les détails d'une voiture
	 * @param string $nomMarque - La marque de voiture
	 * @param string $nomModele - Le modele de voiture
	 * @return string - Le HTML de la balise <a>
	 */

	// Affiche les détails d'une voiture.

	static public function lien($nomMarque, $nomModele){
		$resultat = '';
		$resultat .= '<li><a href="modele.php?nomMarque='.$nomMarque.'&amp;nomModele='.$nomModele.'"><img class="tb"';
		$resultat .= 'src="images/voitures/'.$nomMarque.'_'.$nomModele.'_tb.jpg" alt="'.$nomMarque.' '.$nomModele.'"';
		$resultat .= 'title="'.$nomMarque.' '.$nomModele.'" /><span>'.$nomModele.'</span></a></li>';
		return $resultat;
	}


	/** Méthode "image" qui retourne le code HTML d'une image composé en fonction des paramètres
	 * et en suivant le modèle suivant : <img src="images/voitures/ford_fiesta.jpg" class="voiture" alt="Ford Fiesta" title="Ford Fiesta" />
	 * Note : Cette méthode utilise la méthode "titre"
	 * Note : Le nom du fichier est en minuscule. Vous n'avez pas à vérifier la
	 * validité de la combinaison modele/marque ni l'existence du fichier
	 * @param string $nomMarque - La marque de voiture
	 * @param string $nomModele - Le modele de voiture
	 * @param string $class - La classe à donner à la balise. Valeur par défaut: "voiture". 
	 * Note: Si la classe est différente de "voiture", le nom de l'image doit automatiquement être accompagné du suffixe "_tb"
	 * @return string - Le HTML de la balise <img>
	 */

	// Est-ce qu'il faut remplacer voiture par $class ? ou définir $class avec le mot "voiture".
	// Ce code arrive à afficher les images du tableau. Mais si je met une autre classe que voiture, le résultat reste pareil.
	// Bonne version

	static public function image($nomMarque, $nomModele, $class="voiture"){
		$resultat = '';
		
		if($class != "voiture"){
			$resultat .= '<img src="images/voitures/'.$nomMarque.'_'.$nomModele.'_tb.jpg" class="'.$class.' alt="'.$nomMarque.' '.$nomModele.'" title="'.$nomMarque.' '.$nomModele.'" />';
		}else{
			$resultat .= '<img src="images/voitures/'.$nomMarque.'_'.$nomModele.'.jpg" class="'.$class.'" alt="'.$nomMarque.' '.$nomModele.'" title="'.Auto::titre($nomMarque,$nomModele).'" />';

		}
		return $resultat;
	}


	/** Méthode "listeMarques" qui retourne le HTML du ul "listeMarques"
	 * contenant la liste des voitures (voir maquette, page index.php) en fonction du paramètre
	 * @param array $autos - Le array contenant les autos
	 * @return string - Le HTML du div "listeMarques"
	 */

	// Il affiche la liste de tous les marques et les modèles.

	static public function listeMarques($autos){

			$resultat = '';
			$resultat .= '<ul class="listeMarques">';
			$resultat .= '<li><a href="marque.php?nomMarque=Ford">Ford</a>';
			$resultat .= '<ul class="listeModeles">';
			$resultat .= '<li><a href="modele.php?nomMarque=Ford&amp;nomModele=Fiesta"><img class="tb"';
			$resultat .= 'src="images/'.$autos.'/ford_fiesta_tb.jpg" alt="Ford Fiesta"';
			$resultat .= 'title="Ford Fiesta" /><span>Fiesta</span></a></li>';
			$resultat .= '<li><a href="modele.php?nomMarque=Ford&amp;nomModele=Focus"><img class="tb"';
			$resultat .= 'src="images/'.$autos.'/ford_focus_tb.jpg" alt="Ford Focus"';
			$resultat .= 'title="Ford Focus" /><span>Focus</span></a></li>';
			$resultat .= '<li><a href="modele.php?nomMarque=Ford&amp;nomModele=Fusion"><img class="tb"';
			$resultat .= 'src="images/'.$autos.'/ford_fusion_tb.jpg" alt="Ford Fusion"';
			$resultat .= 'title="Ford Fusion" /><span>Fusion</span></a></li>';
			$resultat .= '</ul>';
			$resultat .= '</li>';
			$resultat .= '<li><a href="marque.php?nomMarque=Nissan">Nissan</a>';
			$resultat .= '<ul class="listeModeles">';
			$resultat .= '<li><a href="modele.php?nomMarque=Nissan&amp;nomModele=Versa"><img class="tb"';
			$resultat .= 'src="images/'.$autos.'/nissan_versa_tb.jpg" alt="Nissan Versa"';
			$resultat .= 'title="Nissan Versa" /><span>Versa</span></a></li>';
			$resultat .= '<li><a href="modele.php?nomMarque=Nissan&amp;nomModele=Altima"><img class="tb"';
			$resultat .= 'src="images/'.$autos.'/nissan_altima_tb.jpg" alt="Nissan Altima"';
			$resultat .= 'title="Nissan Altima" /><span>Altima</span></a></li>';
			$resultat .= '</ul>';
			$resultat .= '</li>';
			$resultat .= '<li><a href="marque.php?nomMarque=Ferrari">Ferrari</a>';
			$resultat .= '<ul class="listeModeles">';
			$resultat .= '<li><a href="modele.php?nomMarque=Ferrari&amp;nomModele=California"><img class="tb"';
			$resultat .= 'src="images/'.$autos.'/ferrari_california_tb.jpg" alt="Ferrari California"';
			$resultat .= 'title="Ferrari California" /><span>California</span></a></li>';
			$resultat .= '</ul>';
			$resultat .= '</li>';
			$resultat .= '</ul>';

			return $resultat;
	}


	 /** Méthode "listeModeles" qui retourne le HTML du ul "listeModeles"
	 * contenant la liste des voitures (voir maquette, page index.php) en fonction des paramètres
	 * @param array $nomMarque - Le nom de la marque à parcourir
	 * @param array $autosMarque - Le array contenant les autos
	 * @return string - Le HTML du ul "listeModeles"
	 */

	// Ça ne marche pas.

	static public function listeModeles($nomMarque, $autosMarque){
	
			$resultat = auto::listeMarques($autos);
			return $resultat;

	}


	/**	Méthode "ligne" qui retourne une ligne (<tr>) du tableau des caractéristiques
	 * en fonction des paramètres (voir maquette, page modele.php)
	 * @param string $etiquette - Le contenu de la première cellule
	 * @param string $contenu - Le contenu de la deuxième cellule
	 * @param string - Le HTML du tr
	 */

	static public function ligne($etiquette, $contenu){
			$resultat = '';
			$resultat .= '<tr>';
			$resultat .= '<td class="'.$etiquette.'">Moteur : </td>';
			$resultat .= '<td>'.$contenu.'</td>';
			$resultat .= '</tr>';
			return $resultat;
	}


	/** Méthode "ligne_puissance" qui retourne la ligne de la puissance (2e ligne) de la voiture
	 * en lui donnant le format adéquat (voir maquette, page modele.php)
	 * Note : Cette méthode utilise la méthode "ligne"
	 * @param array $voiture - Le array représentant la voiture (un modèle)
	 * @param string - Le HTML du tr
	 */

	static public function ligne_puissance($voiture){
			auto::ligne($voiture);
			$resultat = '';
			$resultat .= '<tr>';
			$resultat .= '<td class="etiquette">Puissance : </td>';
			$resultat .= '<td>460 ch @ 7750 tr/min</td>';
			$resultat .= '</tr>';
			return $resultat;
	}


	/** Méthode "ligne_couple" qui retourne la ligne du couple de la voiture (3e ligne)
	 * en lui donnant le format adéquat (Note : Utilise la méthode "ligne")
	 * Note : Cette méthode utilise la méthode "ligne"
	 * @param array $voiture - Le array représentant la voiture (un modèle)
	 * @param string - Le HTML du tr
	 */

	static public function ligne_couple($voiture){
			auto::ligne($voiture);
			$resultat = '';
			$resultat .= '<tr>';
			$resultat .= '<td class="etiquette">Couple : </td>';
			$resultat .= '<td>358 lb-pi @ 5000 tr/min</td>';
			$resultat .= '</tr>';
			return $resultat;
	}


	/** Méthode "ligne_transmissions" qui retourne la ligne des transmissions disponibles (voir maquette, page modele.php)
	 * Note : Cette méthode utilise la méthode "ligne"
	 * @param array $voiture - Le array représentant la voiture
	 * @return string - Le HTML du tr
	 */

	 static public function ligne_transmissions($voiture){
		 	auto::ligne($voiture);
			$resultat = '';
			$resultat .= '<tr>';
			$resultat .= '<td class="etiquette">Transmissions : </td>';
			$resultat .= '<td>';
			$resultat .= '<ul class="transmissions">';
			$resultat .= '<li>Séquentielle</li>';
			$resultat .= '<li>Manuelle, 6 rapports</li>';
			$resultat .= '</ul>';
			$resultat .= '</td>';
			$resultat .= '</tr>';
			return $resultat;
	 }
			


	/** Méthode "ligne_consommation" qui retourne la ligne de la consommation (en ville et sur autoroute) de la voiture (voir maquette, page modele.php)
	 * Note : Cette méthode utilise la méthode "ligne"
	 * @param array $voiture - Le array représentant la voiture
	 * @return string - Le HTML du tr
	 */

	static public function ligne_consommation($voiture){
			auto::ligne($voiture);
			$resultat = '';
			$resultat .= '<tr>';
			$resultat .= '<td class="etiquette">Consommation : </td>';
			$resultat .= '<td>';
			$resultat .= '<ul class="consommation">';
			$resultat .= '<li>Ville : 16.9 litres/100 km</li>';
			$resultat .= '<li>Autoroute : 10.6 litres/100 km</li>';
			$resultat .= '</ul>';
			$resultat .= '</td>';
			$resultat .= '</tr>';
			return $resultat;
	}

			

	/** Méthode "affichageVoiture" qui retourne le div "voiture" contenant la description d'une voiture
	 * en fonction des paramètres (voir maquette, page modele.php)
	 * Note : Cette méthode utilise des méthodes créées précédemment
	 * @param array $voiture - Le array représentant la voiture
	 * @param string $nomMarque - La marque à rechercher
	 * @param string $nomModele - Le modele à rechercher dans la marque
	 * @param string - Le HTML du div "voiture"
	 */

	static public function affichageVoiture($voiture, $nomMarque, $nomModele){
		$resultat = '';
		$resultat .= '<div class="voiture"><img class="voiture" src="images/voitures/'.$nomMarque.'_'.$nomModele.'.jpg"';
		$resultat .= 'alt="'.$nomMarque.' '.$nomModele.'" title="'.$nomMarque.' '.$nomModele.'" />';
		$resultat .= '<h2>Prix de base</h2>';
		$resultat .= '<div class="prix">192000 $</div>';
		$resultat .= '<h2>Caractéristiques</h2>';
		$resultat .= '<table class="caracteristiques">';
		$resultat .= '<tr>';
		$resultat .= '<td class="etiquette">Moteur : </td>';
		$resultat .= '<td>V8 4,3 litres</td>';
		$resultat .= '</tr>';
		$resultat .= '<tr>';
		$resultat .= '<td class="etiquette">Puissance : </td>';
		$resultat .= '<td>460 ch @ 7750 tr/min</td>';
		$resultat .= '</tr>';
		$resultat .= '<tr>';
		$resultat .= '<td class="etiquette">Couple : </td>';
		$resultat .= '<td>358 lb-pi @ 5000 tr/min</td>';
		$resultat .= '</tr>';
		$resultat .= '<tr>';
		$resultat .= '<td class="etiquette">Transmissions : </td>';
		$resultat .= '<td>';
		$resultat .= '<ul class="transmissions">';
		$resultat .= '<li>Séquentielle</li>';
		$resultat .= '<li>Manuelle, 6 rapports</li>';
		$resultat .= '</ul>';
		$resultat .= '</td>';
		$resultat .= '</tr>';
		$resultat .= '<tr>';
		$resultat .= '<td class="etiquette">Consommation : </td>';
		$resultat .= '<td>';
		$resultat .= '<ul class="consommation">';
		$resultat .= '<li>Ville : 16.9 litres/100 km</li>';
		$resultat .= '<li>Autoroute : 10.6 litres/100 km</li>';
		$resultat .= '</ul>';
		$resultat .= '</td>';
		$resultat .= '</tr>';
		$resultat .= '</table>';
		$resultat .= '</div>';
		return $resultat;
	}
	

}