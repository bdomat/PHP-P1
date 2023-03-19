<?php declare(strict_types=1);?>

<?php session_start();
$_SESSION["nom"] = "Bertrand";
setCookie("prenom", "Bertrand", time() * 2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/******Nuance de guillemets******/
$maVariable = "variables !";

$maVariable1 = "J'interprete les " .$maVariable ; // ==> Double guillemets
echo $maVariable1;
echo("<br/>");
$maVariable2 = 'Je n\'interprete pas les $maVariable'; // ==> Simple guillemets
echo $maVariable2;
echo("<br/>");
/******SCOPES******/
$maVariable3 = 3; // ==> scope global
function fonction1(){
    $maVariable4 = 4; // ==> scope local (variable utilisable dans la fonction uniquement)
    static $maVariable5 = 5; // ==> La valeur de la varibale va être conservée à chaque appel
    global $maVariable3; // ==> appel d'une variable externe ayant un scope global
    echo $GLOBALS['maVariable3']; // ==> SUPERGLOBAL = appel d'une variable externe ayant un scope global
}

fonction1();

/******TYPES DE VARIABLES******/

$maVariable6 = "texte"; // ==> STRING
$maVariable7 = 7; // ==> NOMBRE ENTIER = INT
$maVariable8 = "<br/>"; // ==> Le code HTML sera interpreté
var_dump($maVariable6); // ==> Permet de connaitre le type d'une variable
$maVariable9 = 5.5; // ==> NOMBRE DECIMAL = FLOAT
$maVariable10 = true; // ==> BOOLEAN
$maVariable11 = array("lundi", "mardi", "mercredi", "jeudi"); // ==> TABLEAU = ARRAY


class Voiture{
    function __construct(){
        $this->couleur = "Bleu";
    }
}

$maVariable12 = new Voiture(); // ==> OBJET = OBJECT
$maVariable13 = null; // ==> NULL

/****** LES STRINGS******/

$maVariable14 = "Bertrand Domat est développeur web";
echo strlen("Bertrand Domat est développeur web"); // ==> Compte le nombre de caractères
echo("<br/>");
echo str_word_count("Bertrand Domat est developpeur web"); // ==> Compte le nombre de mots
echo("<br/>");
echo strrev("Bertrand Domat est developpeur web"); // ==> Afficher une string à l'envers
echo("<br/>");
echo strpos("Bertrand Domat est developpeur web", "Domat"); // =>Affiche la position du 1er caractère du mot recherché
echo("<br/>");
echo("<br/>");
$var1 = "com";
$var2= "fr";
$var3= "Le site bd-web.com c'est de la balle !";
echo str_replace($var1, $var2, $var3); // =>Remplacer une chaine par une autre
echo("<br/>");

/****** LES CONSTANTES ******/

define("MON_URL", "https://www.bd-web.fr"); // ==> Déclaration d'une constante
echo "Le site ".MON_URL." c'est de la balle !";
echo("<br/>");
function fonction2(){
    echo "Le site ".MON_URL." c'est de la balle !"; // ==> La constante a une portée globale
}

fonction2();



/****** LES OPÉRATEURS ******/
$maVariable15 = 12;
$maVariable16 = 5;

echo $maVariable15 + $maVariable16; //Addition
echo("<br/>");
echo $maVariable15 - $maVariable16; //Soustraction
echo("<br/>");
echo $maVariable15 * $maVariable16; //Multiplication
echo("<br/>");
echo $maVariable15 / $maVariable16; //Division
echo("<br/>");
echo $maVariable15 % $maVariable16; //Modulo (reste de la division)
echo("<br/>");
echo $maVariable15 ** $maVariable16; //Puissance
echo("<br/>");
echo $maVariable15 += $maVariable16;// ==> Assigne la valeur du résultat de l'opération à la 1ère variable.
echo $maVariable15 -= $maVariable16;// ==> Assigne la valeur du résultat de l'opération à la 1ère variable.
echo $maVariable15 *= $maVariable16;// ==> Assigne la valeur du résultat de l'opération à la 1ère variable.
echo $maVariable15 /= $maVariable16;// ==> Assigne la valeur du résultat de l'opération à la 1ère variable.
echo $maVariable15 %= $maVariable16;// ==> Assigne la valeur du résultat de l'opération à la 1ère variable.

/*==> COMPARAISON*/

$maVariable17 = 50;
$maVariable18 = "50";
$maVariable19 = 51;

var_dump($maVariable17 == $maVariable18); //==> Retourne TRUE
var_dump($maVariable17 === $maVariable18); //==> Retourne FALSE (test le type)
var_dump($maVariable17 != $maVariable18); //==> Retourne FALSE
var_dump($maVariable17 === $maVariable18); //==> Retourne TRUE (test le type)
var_dump($maVariable17 > $maVariable18);
var_dump($maVariable17 < $maVariable18);
var_dump($maVariable17 >= $maVariable18);
var_dump($maVariable17 <= $maVariable18);


$age = 5;
$boisson = ($age >18)? "biere": "eau"; 
echo $boisson; //==> Retourne eau
echo("<br/>");


$rouge = "rouge";
$maCouleur = $bleu ?? $orange ?? $rouge ?? "Pas de couleur" ;// ==>Test l'exsitence de chaque variable et retourne la valeur de la 1ere variable existante
echo $maCouleur; //==> Retourne "rouge"
echo("<br/>");
echo $maVariable17 <=> $maVariable19; // Retourne - 1 si inférieur, 1 si supérieur , ou 0 si égale
echo("<br/>");

echo $maVariable19++; // incrémente de 1
echo("<br/>");
echo $maVariable19--; // décrémente de 1
echo("<br/>");

/*==> OPÉRATEUR LOGIQUES*/
echo("<br/>");
var_dump($maVariable17 > 100 and $maVariable19 > 49); // Retourne FALSE ( AND = ET )
var_dump($maVariable17 > 100 or $maVariable19 > 49) ; // Retourne TRUE ==> Similaire à || (= OU)
var_dump($maVariable17 != $maVariable19); // Test la différence, retourne TRUE
var_dump($maVariable17 > 100 xor $maVariable19 > 49) ; // Retourne TRUE UNIQUEMENT SI 1 SEUL DES 2 valeurs testées est vraie

$maVariable20 = "Hello, ";
$maVariable21 = "moi c'est Bertrand"; 

echo $maVariable20 . $maVariable21; // Retourne "Hello, moi c'est Bertrand"
echo("<br/>");
$maVariable20 .= $maVariable21;// = Concaténation, similaire à $maVariable20 = $maVariable20 . $maVariable21; 
echo $maVariable20; //Retourne "Hello, moi c'est Bertrand"
echo("<br/>");

/*==> CONDITIONS*/

$maVariable22 = 6;
if($maVariable22>6) {
    echo "variable supérieur à 6";
}else if($maVariable22=6) {
    echo "variable égale à 6";
}else{
    echo "variable inférieur à 6";
}
echo("<br/>");



$maVariable23 = "";
switch($maVariable23){
    case "travailler en Freelance":
        echo "Freelance c'est génial !";
        break;
        case "travailler à la maison":
            echo "Trop cool!";
            break;
            case "Coder mon site":
                echo "Bonne chance !";
                break;
                default:
                echo "Choisis un objectif";
}


/****** LES LOOPS = BOUCLES ******/

$maVariable23 = 0;

while ($maVariable23 <= 10){
    echo "La valeur de ma variable 23 est $maVariable23 <br>";
    $maVariable23++;
};
// <=> SIMILAIRE <=>
$maVariable24 = 0;
do{
    echo "La valeur de ma variable 24 est $maVariable24 <br>";
    $maVariable24++;
} while ($maVariable24 <= 10);

for ($maVariable25 = 0 ; $maVariable25 <= 10 ; $maVariable25++){
    echo "La valeur de ma variable est $maVariable25 <br>";
}

/****** LES FONCTIONS ******/
//=> Déclaration
function fonction3(){
    echo "coucou <br>";
}

fonction3();

//=> Avec assignation d'un argument
function fonction4($message){
    echo $message;
};

fonction4("Voici mon message <br>");

//=> Avec assignation d'un argument par défaut
function fonction5($message = "Pas de message <br>"){
    echo $message;
};

fonction5(); //Retourne "Pas de message"

//=> Avec assignation de plusieurs arguments
function fonction6($message, $times){
    for($i = 1; $i <= $times; $i++){
        echo "$message <br>";
    };
};
fonction6("Coucou c'est moi", 15);

//=> Une fonction peut retourner une valeur
//Le mot clé "int" Test si des entier sont bien déclarés en paramètres cf <?php declare(strict_types=1);
function fonction7(int $x1, int $y1):int{
    return $x1 + $y1;
};
$z1 = fonction7(2, 7);
echo $z1;

/****** LES TABLEAUX = ARRAYS ******/

$maVariable26 = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
var_dump($maVariable26);
$mardi = $maVariable26[1];
echo $mardi;
echo("<br>");
echo count($maVariable26); // ==> Retourne le nombre d'éléments dans le tableau
echo("<br>");
for($d = 0; $d < count($maVariable26); $d++ ){
    echo "$maVariable26[$d] <br>";
};

$maVariable27 = array("Pierre" => 30, "Paul" => 35, "Jack" =>50);
var_dump($maVariable27);

echo $maVariable27["Paul"]; // Retourne 35
echo("<br>");
foreach($maVariable27 as $name => $age){
    echo "$name a $age ans <br>";
};



/****** LES OBJETS ******/

class Etudiant{
    public $etudie = true;
    public $nom;
    public $age;
    public $notes;

    public function __construct($nom, $age, $notes){
        $this -> nom = $nom;
        $this -> age = $age;
        $this -> notes = $notes;
    }

    public function sePresente(){
        if ($this->etudie){
            echo "Je m'appelle $this->nom et j'ai $this->age ans. <br>";
            foreach($this->notes as $matiere => $note){
                echo "en $matiere j'ai obtenu $note /20 <br>";
            }

        }
    }
}

$notesJohn = array("Maths" =>17, "Francais" =>10, "Anglais" => 9);
$john = new Etudiant("John", 31, $notesJohn);
$john->sePresente();

echo("<br>");echo("<br>");echo("<br>");
$notesHarry = array("Maths" =>17, "Francais" =>10, "Anglais" => 9);
$harry = new Etudiant("Harry", 57, $notesHarry);
$harry->etudie = false;// Ne retourne rien!
$harry->sePresente();


/****** INCLUDE ET REQUIRE ******/

//cf dossier "include"
//"include" permet d'executer du code php externe
//"require" aussi mais il requiert le chargement obligatoire du fichier externe pour executer le reste du code interne


/****** SUPER GLOBALES ******/

$maVariable28 = 5;
$maVariable29 = 18;

function fonction8(){
   echo $GLOBALS['maVariable28'];
}
fonction8();
//Exemples de super globales :
//var_dump($_SERVER);
// var_dump($_REQUEST);
// var_dump($_POST);
// var_dump($_COOKIE);
// var_dump($_SESSION);

/****** SUPER GLOBALE  GET******/
//cf dossier "get"
//permet de faire transiter des données entre les pages

/****** SUPER GLOBALE  POST******/
//cf dossier "post"
//permet de faire transiter les données lors de la soumission d'un formulaire

/****** SUPER GLOBALE  SESSION******/
// permet de retenir des données pendant le temps de la session
//cf debut de page :
// <?php session_start();
// $_SESSION["nom"] = "Bertrand";
//==> Permet d'initialiser une session

/****** SUPER GLOBALE  COOKIES******/
//permet de stocker des données pendants plusieurs jours / semaines / mois
//cf debut de page setCookie("prenom", "Bertrand", time() * 3600*24*30); pour initialiser un cookie
if(isset($_COOKIE["prenom"])){
    echo "<h1>Hello".$_COOKIE["prenom"]."</h1>";}
    else {echo "<h1>Je ne te connais pas</h1>";}

?>

</body>
</html>