<?php 

$weapons = ["fists", "whip", "gun"];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

switch($opponentWeapon)
    {
        case "fists" : $stevensonWeapon=$weapons[2];
        break;
    

    
        case "whip" : $stevensonWeapon=$weapons[0];
        break;
    

    
        case "gun" : $stevensonWeapon=$weapons[1];
        break;
    }
echo ("l'arme de l'ennemi est le :". $opponentWeapon ." Steven sort son : " . $stevensonWeapon);

?>