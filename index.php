<?php
require_once("Tableau.inc.php");

//////////////////////////////////////////////////////////////////////////////////
// Exécuter les directives suivantes et utiliser les lignes de test 
// dans le body pour tester chaque étape
// Consulter le final sur le site Web du cours au besoin
//////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////////
// "Les noms des mois"
// Créer le tableau indexé $nomsMois dont l'index 
// commence à 1 et qui contient les noms des 12 mois de l'année. 
// Utiliser la méthode courte.

//////////////////////////////////////////////////////////////////////////////////
// "Le nombre de jours dans un mois"
// Créer le tableau associatif $joursMois 
// dont la clé est le nom du mois et la valeur est le nombre de jours dans ce mois. 
// Utiliser la méthode courte, mais avec des sauts de ligne pour chaque mois.

//////////////////////////////////////////////////////////////////////////////////
// "Les mois en anglais"
// Créer le tableau associatif $nomsMoisAnglais 
// dont la clé est le nom du mois et la valeur le nom anglais du même mois. 
// Utiliser la méthode longue.

//////////////////////////////////////////////////////////////////////////////////
// "Une boite avec du style"
// Créer le tableau $monStyle 
// ayant comme clés les propriétés CSS retrouvés dans l'exemple 
// et comme valeurs les valeurs correspondantes

//////////////////////////////////////////////////////////////////////////////////
// "Ouach!!"
// Créer le tableau $monImage ayant comme clés 
// "src", "alt", "width", "height" et "style", 
// et comme valeurs les données représentant l'image affichée
// Utiliser la variable $monStyle crée précédemment

//////////////////////////////////////////////////////////////////////////////////
// "Una ricerca attraente"

//////////////////////////////////////////////////////////////////////////////////
// "La palette Web"
// Créer le tableau $couleursWeb contenant la liste des 6 chiffres hexadécimaux constituant une couleur Websafe

//////////////////////////////////////////////////////////////////////////////////
// "L'autre palette"
// Créer le tableau $couleurs contenant la liste des 16 chiffres hexadécimaux constituant une couleur

//////////////////////////////////////////////////////////////////////////////////
// "Une palette perso palette"
// Créer le tableau $palettePerso contenant des nombres HEX représentant 
// une palette personnalisée. Utiliser la méthode Tableau::couleursDecVersHex;

//////////////////////////////////////////////////////////////////////////////////
// "Une couleur hasardeuse": Créer la chaine $couleurHasard représentant 
// une couleur aléatoire composée à l'aide de la méthode Tableau::couleurAlea 
// et de la palette perso

?>
<!DOCTYPE html>
<html>
<head>
<title>Tableaux... encore</title>
<meta charset="utf-8" />
</head>

<body>
<?php
// Décommenter progressivement les lignes suivantes et, au besoin, créer la méthode correspondante
// echo '<h1>Les noms des mois</h1>'.Tableau::versTable($nomsMois);
// echo '<h1>Le nombre de jours dans un mois</h1>'.Tableau::versTable($joursMois);
// echo '<h1>Les mois en anglais</h1>'.Tableau::versTable($nomsMoisAnglais);
// echo '<h1>Choisissez votre mois</h1>'.Tableau::versSelect($nomsMois, 'mois', '11');
// echo '<h1>Une boite avec du style</h1><div '.Tableau::versStyle($monStyle, true).'>Je suis belle et je le sais</div>';
// echo '<h1>Ouach!!</h1><img '.Tableau::versAttributs($monImage).' />';
// echo '<h1>Una ricerca attraente</h1><a href="http://www.google.ca/search?'.Tableau::versUrl($paramGoogle).'" target="_blank">Il mio iPad</a>';
// echo '<h1>La palette Web</h1>'.Tableau::tableauCouleurs($couleursWeb);
// echo '<h1>L\'autre palette</h1>'.Tableau::tableauCouleurs($couleurs);
// echo '<h1>Une palette perso</h1>'.Tableau::versTable($palettePerso).Tableau::tableauCouleurs($palettePerso);
// echo '<h1>Une couleur hasardeuse</h1><div style="font-size:5em;background-color:'.$couleurHasard.';">'.$couleurHasard.'</div>';
?>
</body>
</html>
