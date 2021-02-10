<?php
class Tableau {
	/** Méthode qui transforme un tableau simple en chaine sous forme de <table>
	 * Le tableau a 2 colonnes : une colonne des clés et une colonne des valeurs
	 * Le tableau a un thead contenant les étiquettes des colonnes fournies en paramètres
	 * Le tableau a optionnellement un caption. Le caption apparait seulement si on fournit une valeur au paramètre $caption et si celle-ci n'est pas vide.
	 * @param $tableau array Le tableau à afficher 
	 * @param $enteteCle string Le texte écrit dans l'entête de la colonne des clés. Valeur par défaut: "Clé"
	 * @param $enteteValeur string Le texte écrit dans l'entête de la colonne des valeurs. Valeur par défaut: "Valeur"
	 * @param $caption string 
	 * @return string Le code HTML du tableau résultant
	 */
	static public function versTable($tableau, $enteteCle='Clé', $enteteValeur='Valeur', $caption='') {
	}
	/** Méthode qui transforme un tableau simple en chaine sous forme de <select>
	 * La "value" des <option> est la clé de l'élément du tableau, et c'est la valeur de cet élément qui est affichée
	 * Note: La gestion de l'élément courant est à faire en dernier...
	 * @param $tableau array Le tableau à afficher 
	 * @param $name string La valeur de l'attribut "name" à mettre dans la balise <select>
	 * @param $courant string La clé de l'élément qui doit être sélectionné par défaut dans le select. Valeur par défaut du paramètre : null
	 * @return string Le code HTML du <select> résultant
	 */
	static public function versSelect($tableau, $name, $courant=null) {
	}
	/** Méthode qui transforme un tableau simple en chaine sous forme de propriétés CSS à mettre dans un attribut style
	 * Ex.: 'cle1:valeur1;cle2=valeur2;'
	 * @param $tableau array Le tableau à traiter 
	 * @param $attributComplet booleen Lorsque true, retourne une attribut style complet (style="..."). Défaut: false
	 * @return string La valeur de l'attribut style résultant résultant
	 */
	static public function versStyle($tableau, $attributComplet=false) {
	}
	/** Méthode qui transforme un tableau simple en chaine sous forme de séquence d'attributs de balise HTML
	 * Ex.: 'cle1="valeur1" cle2="valeur2"'
	 * @param $tableau array Le tableau à traiter 
	 * @return string Les attributs résultants
	 */
	static public function versAttributs($tableau) {
	}
	/** Méthode qui transforme un tableau simple en chaine sous forme de paramètres GET d'une adresse URL
	 * Ex.: 'cle1=valeur1&cle2=valeur2'
	 * Ne pas oublier de faire urlencode sur chaque clé et chaque valeur
	 * @param $tableau array Le tableau à traiter 
	 * @return string La portion d'URL résultant
	 */
	static public function versUrl($tableau) {
	}
	/** Méthode qui retourne une palette de couleurs sous forme de <table> en fonction des choix de valeurs donnés en paramètres
	 * @param $choixRouge array Le choix des valeurs hexadécimales pour la couleurs rouge. Paramètre obligatoire
	 * @param $choixVert array Le choix des valeurs hexadécimales pour la couleurs verte. Valeur par défaut: Null. Si le paramètre n'est pas renseigné, on utilisera les valeurs de la couleur rouge.
	 * @param $choixBleu array Le choix des valeurs hexadécimales pour la couleurs bleue. Valeur par défaut: Null. Si le paramètre n'est pas renseigné, on utilisera les valeurs de la couleur verte.
	 * @return string Le tableau HTML de la palette de couleurs
	 */
	static public function tableauCouleurs($choixRouge, $choixVert=null, $choixBleu=null) {
	}
	/**	Méthode qui retourne un tableau de nombres hexadécimaux (string) à interval régulier destiné à constituer une palette de couleurs. Par défaut, elle retourne la palette Web
	 * @param $debut integer La valeur décimale du premier nombre de la série. Défaut : 0
	 * @param $fin integer La valeur décimale du dernier nombre de la série. Défaut : 255
	 * @param $saut integer L'interval entre 2 nombres de la série. Défaut : 51
	 * @return array Le tableau contenant tous les nombres HEX de la série
	 */
	static public function couleursDecVersHex($debut=0, $fin=255, $saut=51) {
	}
	/**	Méthode qui retourne la VALEUR d'un élément aléatoire d'un tableau
	 * Cette méthode utilise la fonction array_rand
	 * @param $tableau array Le tableau duquel piger une valeur
	 * @return mixed La valeur trouvée
	 */
	static public function pige($tableau) {
	}
	/**	Méthode qui retourne une couleur aléatoire en fonction du choix de nombres Hex donnés en paramètres
	 * Cette méthode utilise la méthode pige ci-dessus
	 * @param $choix array Les nombres devant constituer la couleur
	 * @return string La couleur résultante
	 */
	static public function couleurAlea($choix) {
	}
}
?>