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

<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php foreach($hotels as $hotel) { ?>
    <h1><?php echo $hotel["name"] ?></h1>
    <h2><?php echo $hotel["description"] ?></h2>
    <h3>Parcheggio : <?php echo $hotel["parking"] ?></h3>
    <h3>Voto : <?php echo $hotel["vote"] ?></h3>
    <h3>Distanza dal centro : <?php echo $hotel["distance_to_center"] ?> km</h3>
    <hr>
    <?php } ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance to Center</th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr> -->
            
            <?php foreach($hotels as $hotel) { ?>

                <tr>
                    <th scope="row"><?php echo $hotel["name"] ?></th>
                    <td><?php echo $hotel["description"] ?></td>
                    <td><?php echo $hotel["parking"] ?></td>
                    <td><?php echo $hotel["vote"] ?></td>
                    <td><?php echo $hotel["distance_to_center"] ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>

</body>
</html>