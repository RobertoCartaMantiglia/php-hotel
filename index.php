<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Php Hotels</title>
</head>

<body>
    <?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    ?>


    <div class="container">

        <h1 class="text-warning mb-3 text-center">Php Hotels list: </h1>

        <div class="my-5">
            <form action="./index.php" method="get">
                <input type="text" placeholder="parcheggio">
                <input type="text" placeholder="valutazione">
                <button>Filtra</button>
            </form>
        </div>

        <?php
        foreach ($hotels as $hotel) {
            echo "<div class='border p-4'>";
            echo "<h2 class='text-danger'>{$hotel['name']}</h2>";
            echo "<p>Descrizione: {$hotel['description']}</p>";
            echo "<p>Valutazione: {$hotel['vote']}</p>";
            echo "<p>Parcheggio: {$hotel['parking']}</p>";
            echo "<p>Distanza dal Centro Città: {$hotel['distance_to_center']}km</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>