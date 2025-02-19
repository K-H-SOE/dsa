<?php
// filepath: /c:/laragon/www/test1/api/fetch_places.php

$places = [
    [
        "name" => "Beethoven House",
        "description" => "The Beethoven House is a memorial site, museum and cultural institution serving various purposes. It is located at Bonngasse 20 in Bonn, Germany.",
        "lat" => 50.735851,
        "lng" => 7.101944
    ],
    [
        "name" => "Bonn Minster",
        "description" => "The Bonn Minster is a Roman Catholic church in Bonn, Germany. It is one of Germany's oldest churches, having been built between the 11th and 13th centuries.",
        "lat" => 50.7345,
        "lng" => 7.0956
    ],
    [
        "name" => "Poppelsdorf Palace",
        "description" => "Poppelsdorf Palace is a Baroque palace in the Poppelsdorf district of Bonn, western Germany, which is now part of the University of Bonn.",
        "lat" => 50.7256,
        "lng" => 7.0852
    ],
    [
        "name" => "Botanical Garden",
        "description" => "The Botanical Garden in Bonn, Germany, is a historic botanical garden maintained by the University of Bonn.",
        "lat" => 50.7264,
        "lng" => 7.0844
    ],
    [
        "name" => "Rheinisches Landesmuseum",
        "description" => "The Rheinisches Landesmuseum Bonn is a museum in Bonn, Germany. It is one of the oldest museums in the country.",
        "lat" => 50.7269,
        "lng" => 7.0934
    ]
];

header('Content-Type: application/json');
echo json_encode($places);
?>