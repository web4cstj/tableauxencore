<?php
class Tableau {
	/** Méthode versTable
	 * Transforme un tableau (array) simple en chaine sous forme de <table>
	 * @param array $tableau - Le tableau à afficher 
	 * @param string $enteteCle - Le texte écrit dans l'entête de la colonne des clés. 
	 *   Valeur par défaut: "Clé"
	 * @param string $enteteValeur - Le texte écrit dans l'entête de la colonne des valeurs. 
	 *   Valeur par défaut: "Valeur"
	 * @param string $caption - Le texte optionnel à écrire dans le <caption>. Défaut : ''
	 * @return string - Le code HTML du tableau résultant
	 * @note Le <table> a 2 colonnes : une colonne des clés et une colonne des valeurs
	 * @note Le <table> a un thead contenant les étiquettes des colonnes fournies en paramètres
	 * @note Le <table> a optionnellement un caption. Le caption apparait seulement si on fournit 
	 *   une valeur au paramètre $caption et si celle-ci n'est pas vide.
	 */
	static public function versTable($tableau, $enteteCle='Clé', $enteteValeur='Valeur', $caption='') {
		$resultat = '';
		$resultat .= '<table border="1">';
		if (!empty($caption)) $resultat .= '<caption>'.$caption.'</caption>';
		$resultat .= '<thead style="background-color:rgba(0,0,0,.1);"><tr>';
		$resultat .= '<th>'.$enteteCle.'</th>';
		$resultat .= '<th>'.$enteteValeur.'</th>';
		$resultat .= '</tr></thead>';
		$resultat .= '<tbody>';
		foreach($tableau as $cle=>$valeur) {
			$resultat .= '<tr>';
			$resultat .= '<th>'.$cle.'</th>';
			$resultat .= '<td>'.$valeur.'</td>';
			$resultat .= '</tr>';
			
		}
		$resultat .= '</tbody>';
		$resultat .= '</table>';
		return $resultat;
	}
	/** Méthode versSelect
	 * Transforme un tableau (array) simple en chaine sous forme de <select>
	 * @param array $tableau - Le tableau à afficher 
	 * @param string $name - La valeur de l'attribut "name" à mettre dans la balise <select>
	 * @param string $courant - La clé de l'élément qui doit être sélectionné par défaut 
	 *   dans le select. Valeur par défaut du paramètre : null
	 * @return string - Le code HTML du <select> résultant
	 * @note La "value" des <option> est la clé de l'élément du tableau, et c'est la valeur 
	 *   de cet élément qui est affichée
	 * @note La gestion de l'élément courant est à faire en dernier...
	 */
	static public function versSelect($tableau, $name, $courant=null) {
		$resultat = '';
		$resultat .= '<select name="'.$name.'">';
		foreach($tableau as $cle=>$valeur) {
			$selected = '';
			if ($cle==$courant) $selected = ' selected="selected"';
			$resultat .= '<option value="'.$cle.'"'.$selected.'>';
			$resultat .= $valeur;
			$resultat .= '</option>';
		}
		$resultat .= '</select>';
		return $resultat;
	}
	/** Méthode versStyle
	 * Transforme un tableau simple en chaine sous forme de propriétés CSS à mettre 
	 *   dans un attribut style. Ex.: 'cle1:valeur1;cle2=valeur2;'
	 * @param array $tableau - Le tableau à traiter 
	 * @param booleen $attributComplet - Lorsque true, retourne une attribut 
	 *   style complet (style="..."). Défaut: false
	 * @return string - La valeur de l'attribut style résultant
	 */
	static public function versStyle($tableau, $attributComplet=false) {
		// Stratégie 1
		$resultat = '';
		foreach($tableau as $cle=>$valeur) {
			$resultat .= ''.$cle.':'.$valeur.';';
		}
		if ($attributComplet) $resultat = 'style="'.$resultat.'"';
		return $resultat;
		// Stratégie 2
		$resultat = array();
		foreach($tableau as $cle=>$valeur) {
			$resultat[] = ''.$cle.':'.$valeur.';';
		}
		$resultat = implode('', $resultat);
		if ($attributComplet) $resultat = 'style="'.$resultat.'"';
		return $resultat;
	}
	/** Méthode versAttributs
	 * Transforme un tableau simple en chaine sous forme de séquence d'attributs 
	 *   de balise HTML. Ex.: 'cle1="valeur1" cle2="valeur2"'
	 * @param array $tableau - Le tableau à traiter 
	 * @return string - Les attributs résultants
	 */
	static public function versAttributs($tableau) {
		// Stratégie 1
		$resultat = '';
		foreach($tableau as $cle=>$valeur) {
			$resultat .= ' '.$cle.'="'.$valeur.'"';
		}
		if (empty($resultat)) return $resultat;
		return substr($resultat, 1);
		// Stratégie 2
		$resultat = array();
		foreach($tableau as $cle=>$valeur) {
			$resultat[] = $cle.'="'.$valeur.'"';
		}
		$resultat = implode(' ', $resultat);
		return $resultat;
	}
	/** Méthode versUrl
	 * Transforme un tableau simple en chaine sous forme de paramètres GET 
	 *   d'une adresse URL. Ex.: 'cle1=valeur1&cle2=valeur2'
	 * @param array $tableau - Le tableau à traiter 
	 * @return string - La portion d'URL résultant
	 * @note Ne pas oublier de faire urlencode sur chaque clé et chaque valeur
	 */
	static public function versUrl($tableau) {
		// Stratégie 1
		$resultat = '';
		foreach($tableau as $cle=>$valeur) {
			$resultat .= '&'.urlencode($cle).'='.urlencode($valeur).'';
		}
		if (empty($resultat)) return $resultat;
		return substr($resultat, 1);
		// Stratégie 2
		$resultat = array();
		foreach($tableau as $cle=>$valeur) {
			$resultat[] = urlencode($cle).'="'.urlencode($valeur).'';
		}
		$resultat = implode('&', $resultat);
		return $resultat;
	}
	/** Méthode tableauCouleurs
	 * Retourne une palette de couleurs sous forme de <table> en fonction 
	 *   des choix de valeurs donnés en paramètres
	 * @param array $choixRouge - Le choix des valeurs hexadécimales pour la 
	 *   couleurs rouge. Paramètre obligatoire
	 * @param array $choixVert - Le choix des valeurs hexadécimales pour la couleurs verte. 
	 *   Valeur par défaut: Null. Si le paramètre n'est pas renseigné, on utilisera 
	 *   les valeurs de la couleur rouge.
	 * @param $choixBleu array - Le choix des valeurs hexadécimales pour la couleurs bleue. 
	 *   Valeur par défaut: Null. Si le paramètre n'est pas renseigné, on utilisera 
	 *   les valeurs de la couleur verte.
	 * @return string - Le tableau HTML de la palette de couleurs
	 */
	static public function tableauCouleurs($choixRouge, $choixVert=null, $choixBleu=null) {
		if (is_null($choixVert)) $choixVert = $choixRouge;
		if (is_null($choixBleu)) $choixBleu = $choixVert;
		$resultat = '';
		$resultat .= '<table>';
		foreach($choixRouge as $valRouge) {
			$resultat .= '<tbody>';
			foreach($choixVert as $valVert) {
				$resultat .= '<tr>';
				foreach($choixBleu as $valBleu) {
					$couleur = "#$valRouge$valVert$valBleu";
					$resultat .= '<td style="background-color:'.$couleur.';">';
					$resultat .= $couleur;
					$resultat .= '</td>';
				}
				$resultat .= '</tr>';
			}
			$resultat .= '</tbody>';
		}
		$resultat .= '</table>';
		return $resultat;
	}
	/** Méthode couleursDecVersHex
	 * Retourne un tableau de nombres hexadécimaux (string) à intervalle régulier 
	 *   destiné à constituer une palette de couleurs. Par défaut, elle retourne la palette Web
	 * @param integer $debut - La valeur décimale du premier nombre de la série. Défaut : 0
	 * @param integer $fin - La valeur décimale du dernier nombre de la série. Défaut : 255
	 * @param integer $saut - L'interval entre 2 nombres de la série. Défaut : 51
	 * @return array - Le tableau contenant tous les nombres HEX de la série
	 */
	static public function couleursDecVersHex($debut=0, $fin=255, $saut=51) {
		$chiffres = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F',);
		$resultat = array();
		for ($i=$debut; $i<=$fin; $i+=$saut) {
			$resultat[] = $chiffres[floor($i/16)].$chiffres[$i%16];
			// $resultat[] = str_pad(dechex($i), 2, "0", STR_PAD_LEFT);
		}
		return $resultat;
	}
	/** Méthode pige
	 * Retourne la VALEUR d'un élément aléatoire d'un tableau
	 * @param array $tableau - Le tableau duquel piger une valeur
	 * @return mixed - La valeur trouvée
	 * @note Cette méthode utilise la fonction array_rand
	 */
	static public function pige($tableau) {
		$cle = array_rand($tableau);
		return $tableau[$cle];
	}
	/**	Méthode couleurAlea
	 * Retourne une couleur aléatoire en fonction du choix de nombres Hex donnés en paramètres
	 * Cette méthode utilise la méthode pige ci-dessus
	 * @param $choix array Les nombres devant constituer la couleur
	 * @return string La couleur résultante
	 */
	static public function couleurAlea($choix) {
		$r = self::pige($choix);
		$g = self::pige($choix);
		$b = self::pige($choix);
		return "#$r$g$b";
	}
}
?>