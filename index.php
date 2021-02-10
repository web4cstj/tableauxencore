<?php
require_once("Tableau.php");

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
$nomsMois = array(1=>"janvier", "février", "mars", "avril", "mai", "juin", 
	"juillet", "août", "septembre", "octobre", "novembre", "décembre");

//////////////////////////////////////////////////////////////////////////////////
// "Le nombre de jours dans un mois"
// Créer le tableau associatif $joursMois 
// dont la clé est le nom du mois et la valeur est le nombre de jours dans ce mois. 
// Utiliser la méthode courte, mais avec des sauts de ligne pour chaque mois.
$joursMois = array(
	"janvier"=>31, 
	"février"=>28,
	"mars"=>31,
	"avril"=>30,
	"mai"=>31,
	"juin"=>30,
	"juillet"=>31,
	"août"=>31,
	"septembre"=>30,
	"octobre"=>31,
	"novembre"=>30,
	"décembre"=>31,
);

//////////////////////////////////////////////////////////////////////////////////
// "Les mois en anglais"
// Créer le tableau associatif $nomsMoisAnglais 
// dont la clé est le nom du mois et la valeur le nom anglais du même mois. 
// Utiliser la méthode longue.
$nomsMoisAnglais['janvier']="january";
$nomsMoisAnglais['février']="february";
$nomsMoisAnglais['mars']="march";
$nomsMoisAnglais['avril']="april";
$nomsMoisAnglais['mai']="may";
$nomsMoisAnglais['juin']="june";
$nomsMoisAnglais['juillet']="july";
$nomsMoisAnglais['août']="august";
$nomsMoisAnglais['septembre']="september";
$nomsMoisAnglais['octobre']="october";
$nomsMoisAnglais['novembre']="november";
$nomsMoisAnglais['décembre']="december";

//////////////////////////////////////////////////////////////////////////////////
// "Une boite avec du style"
// Créer le tableau $monStyle 
// ayant comme clés les propriétés CSS retrouvés dans l'exemple 
// et comme valeurs les valeurs correspondantes
$monStyle['border'] = '1px solid black'; 
$monStyle['background-color'] = 'lightgoldenrodyellow'; 
$monStyle['padding'] = '1em 1em 4em 1em';
$monStyle['box-shadow'] = '.5em .5em .5em rgba(0,0,0,.25)';

//////////////////////////////////////////////////////////////////////////////////
// "Ouach!!"
// Créer le tableau $monImage ayant comme clés 
// "src", "alt", "width", "height" et "style", 
// et comme valeurs les données représentant l'image affichée
// Utiliser la variable $monStyle crée précédemment
$monImage = array('src'=>'images/moi.jpg', 'alt'=>'Photo de moi si je n\'étudie pas bien le PHP', 
	'width'=>'283', 'height'=>'320', 'style'=>Tableau::versStyle($monStyle));

//////////////////////////////////////////////////////////////////////////////////
// "Una ricerca attraente"
$paramGoogle = array('q'=>'ipad', 'sitesearch'=>'apple.com', 'hl'=>'it');

//////////////////////////////////////////////////////////////////////////////////
// "La palette Web"
// Créer le tableau $couleursWeb contenant la liste des 6 chiffres hexadécimaux 
//   constituant une couleur Websafe
$couleursWeb = array('00','33','66','99','CC','FF',);

//////////////////////////////////////////////////////////////////////////////////
// "L'autre palette"
// Créer le tableau $couleurs contenant la liste des 16 chiffres hexadécimaux constituant une couleur
$couleurs = array('00','11','22','33','44','55','66','77','88','99','AA','BB','CC','DD','EE','FF',);

//////////////////////////////////////////////////////////////////////////////////
// "Une palette perso palette"
// Créer le tableau $palettePerso contenant des nombres HEX représentant 
// une palette personnalisée. Utiliser la méthode Tableau::couleursDecVersHex;
$palettePerso = Tableau::couleursDecVersHex(0,255,85);

//////////////////////////////////////////////////////////////////////////////////
// "Une couleur hasardeuse": Créer la chaine $couleurHasard représentant 
// une couleur aléatoire composée à l'aide de la méthode Tableau::couleurAlea 
// et de la palette perso
$couleurHasard = Tableau::couleurAlea($palettePerso);

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
echo '<h1>Les noms des mois</h1>'.
	Tableau::versTable($nomsMois);
echo '<h1>Le nombre de jours dans un mois</h1>'.
	Tableau::versTable($joursMois);
echo '<h1>Les mois en anglais</h1>'.
	Tableau::versTable($nomsMoisAnglais);
echo '<h1>Choisissez votre mois</h1>'.
	Tableau::versSelect($nomsMois, 'mois', '11');
echo '<h1>Une boite avec du style</h1>'.
	'<div '.Tableau::versStyle($monStyle, true).'>Je suis belle et je le sais</div>';
echo '<h1>Ouach!!</h1><img '.
	Tableau::versAttributs($monImage).' />';
echo '<h1>Una ricerca attraente</h1>'.
	'<a href="http://www.google.ca/search?'.Tableau::versUrl($paramGoogle).'" target="_blank">'.
	'Il mio iPad'.
	'</a>';
echo '<h1>La palette Web</h1>'.
	Tableau::tableauCouleurs($couleursWeb);
echo '<h1>L\'autre palette</h1>'.
	Tableau::tableauCouleurs($couleurs);
echo '<h1>Une palette perso</h1>'.
	Tableau::versTable($palettePerso).Tableau::tableauCouleurs($palettePerso);
echo '<h1>Une couleur hasardeuse</h1>'.
	'<div style="font-size:5em;background-color:'.$couleurHasard.';">'.$couleurHasard.'</div>';
?>
</body>
</html>
