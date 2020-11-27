<?php

// this function accepts an array of submitted data and returns an array of normalized data
function normalize_submitted_data(array $submittedData): array
{
    return [
        'destination' => isset($submittedData['destination']) ? (string)$submittedData['destination'] : '',
        'number_of_tickets_available' => isset($submittedData['number_of_tickets_available']) ? (int)$submittedData['number_of_tickets_available'] : 0,
        'is_accessible' => isset($submittedData['is_accessible']) ? true : false
    ];
}

// this function accepts the normalized data and returns an array of form errors.
function validate_normalized_data(array $normalizedData): array
{
    $formErrors = [];
    if ($normalizedData['destination'] === '') {
        $formErrors['destination'] = 'Please provide a destination';
    }
    if ($normalizedData['number_of_tickets_available'] < 1) {
        $formErrors['number_of_tickets_available'] = 'Number of tickets available should be at least 1';
    }
    return $formErrors;
}

// this fonction loads all the tours data
function load_all_tours_data(): array
{
    $toursJsonFile = __DIR__ . '/../../data/tours.json';
    if (!file_exists($toursJsonFile)) {
        return [];
    }
    $jsonData = file_get_contents($toursJsonFile);
    return json_decode($jsonData, true);
}

// this function saves all the tours to tours.json
function save_all_tours(array $toursData): void
{
    $toursJsonFile = __DIR__ . '/../../data/tours.json';
    $jsonData = json_encode($toursData, JSON_PRETTY_PRINT);
    file_put_contents($toursJsonFile, $jsonData);
}

// this function can load the data of a single tour which we can use as the normalized data to feed into the form.
function load_tour_data(int $id): array
{
    $toursData = load_all_tours_data();
    foreach ($toursData as $tourData) {
        if ($tourData['id'] === $id) {
            return $tourData;
        }
    }
    throw new RuntimeException('Could not find tour with ID ' . $id);
}

// this function is used to save the modified tour data
function save_tour_data(array $modifiedTourData): void
{
    $toursData = load_all_tours_data();
    foreach ($toursData as $key => $tourData) {
        if ($tourData['id'] === $modifiedTourData['id']) {
            $toursData[$key] = $modifiedTourData;
        }
    }
    save_all_tours($toursData);
}

// this function doesn't delete data in tours.json but marks it as deleted
function delete_tour(int $id): void
{
    $toursData = load_all_tours_data();
    foreach ($toursData as $key => $tourData) {
        if ($tourData['id'] === $id) {
            $toursData[$key]['is_deleted'] = true;
        }
    }
    save_all_tours($toursData);
}