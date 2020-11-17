<?php
    include(__DIR__ . '/../bootstrap.php');
    
    $toursJsonFile = __DIR__ . '/../data/tours.json';
    
    if (file_exists($toursJsonFile)) {
        // A tours "database" already exists, load all tours:
        $jsonData = file_get_contents($toursJsonFile);
        $toursData = json_decode($jsonData, true);
    } else {
        // There is no tours "database" yet, start with an emtpy array
        $toursData = [];
    }

    // Create a tour:
    $toursData[] = [
        'destination' => 'Berlin',
        'number_of_tickets_available' => 10,
        'is_accessible' => true
    ];
    
    // Convert the tours data to JSON
    $jsonData = json_encode($toursData, JSON_PRETTY_PRINT);
    
    // Save the tours data to `data/tours.json`:
    file_put_contents($toursJsonFile, $jsonData);