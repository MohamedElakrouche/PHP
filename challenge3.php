<?php
// Création du tableau avec les titres de livres et leurs années d'édition
$books =    [
    "Treasure Island" => 1883,
    "Strange Case of Dr Jekyll and Mr Hyde" => 1886,
    "Kidnapped" => 1886
            ];

// Tri du tableau par valeur en ordre croissant
asort($books);

// Boucle pour afficher les titres et les années, problème (consigne éronnée) : le signe > qui n'a rien à faire au début
echo "Liste tré croissante des livres de Robert Stevenson par année d'édition :<br> <br>";
foreach ($books as $titleBook => $yearBook) 
    {
    echo (" > ".$yearBook." - ".$titleBook);
    }
?>
