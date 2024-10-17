<?php

// Création du tableau multidimensionnel des films et des acteurs

$movies = 
        [
            [
            "title" => "The Black Arrow",
            "actors" => ["Louis Hayward", "Janet Blair", "George Macready"]
            ],
             [
        "title" => "The Master of Ballantrae",
        "actors" => ["Errol Flynn", "Roger Livesey", "Anthony Steel"]
            ],
            [
        "title" => "Dr. Jekyll and Mr. Hyde (1941)",
        "actors" => ["Spencer Tracy", "Ingrid Bergman", "Lana Turner"]
            ]
        ];

// Boucle pour parcourir et afficher les films et leurs acteurs

for ($i = 0; $i < count($movies); $i++) 
    {
    echo "Dans le film " . $movies[$i]['title'] . ", les principaux acteurs sont : ";
    echo implode(", ", $movies[$i]['actors']) . ".<br>";
    }

?>