<?php

// Initialisation des variables messages, j'ai dû changer l'appostrophe courbé car prends trop d'octects et le mb_string ne fonctionnait pas

$firstMessage="0@sn9sirppa@#?ia'jgtvryko1";
$secondMessage="q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$thirdMessage="aopi?sgnirts@#?sedhtg+p9l!";

// Calcul du "chiffre clé"

$keyNumber=(strlen($firstMessage)/2);

// Extraction de la sous-chaîne et inversement ainsi ue l'affichage

$subChain=substr($firstMessage,5,$keyNumber);
$test=str_replace("@#?"," ",$subChain);
$inverseMessage=strrev($test);
echo $inverseMessage;
echo (" ");

//Répétition de l'étape d'extraction et d'affichage du firstMessage

$keyNumber=(strlen($secondMessage)/2);

$subChain=substr($secondMessage,5,$keyNumber);
$test=str_replace("@#?"," ",$subChain);
$inverseMessage=strrev($test);
echo $inverseMessage;
echo (" ");

//Répétition de l'étape d'extraction et d'affichage du firstMessage

$keyNumber=(strlen($thirdMessage)/2);

$subChain=substr($thirdMessage,5,$keyNumber);
$test=str_replace("@#?"," ",$subChain);
$inverseMessage=strrev($test);
echo $inverseMessage;
echo (" ");

?>