<?php declare(strict_types=1);?>

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



?>
    

</body>
</html>