<?php

declare(strict_types=1);


function exercise1(): int
{
    $numbers = [
        15,
        55,
        66,
        91,
        100,
        995,
        17,
        550,
    ];
    $result = 0;
    foreach ($numbers as $number) {
        if ($number % 2 === 0) {
            $result = $result + $number;
        }
    }
    // Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą

    return $result;
}

function exercise2(): int
{
    $numbers = [
        [1, 3, 5],
        [55, 87, 100],
        [12],
        [],
    ];

    // Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą

    $product=1;
    foreach (array_filter($numbers) as $number){
        $product *= array_product($number);
    }

    return $product;
}

function exercise3(): void
{
    $holidays = [
        [
            'title' => 'Romantic Paris',
            'destination' => 'Paris',
            'price' => 1500,
            'tourists' => 55,
        ],
        [
            'title' => 'Amazing New York',
            'destination' => 'New York',
            'price' => 2699,
            'tourists' => 21,
        ],
        [
            'title' => 'Spectacular Sydey',
            'destination' => 'Sydey',
            'price' => 4130,
            'tourists' => 9,
        ],
        [
            'title' => 'Hidden Paris',
            'destination' => 'Paris',
            'price' => 1700,
            'tourists' => 10,
        ],
        [
            'title' => 'Emperors of the past',
            'destination' => 'Beijing',
            'price' => null,
            'tourists' => 10,
        ],
    ];

    /*
    Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
    Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
    Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null.
    Užduočiai atlikti nebūtina naudoti OOP.

    Destination "Paris".
    Titles: "Romantic Paris", "Hidden Paris"
    Total: 99500
    ************
    Destination "New York"
    ...
    
    */
    foreach ($holidays as $key => $item) {

        if ($item['price'] !== null) {
            echo "Destination " . '"' . $item['destination'] . '".' . PHP_EOL;
            echo "Titles " . '"' . $item['title'] . '"' . ' ' . PHP_EOL;
            echo"Total " . '"' . $item['price']*$item['tourists'] . '"' . ' ' . PHP_EOL;
            echo'**********' . PHP_EOL;
        }
    }
}

