<?php
    include(__DIR__ . '/functions/tour-crud.php');
    
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
    
    $formErrors = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Step 1: normalize the request data:
        $normalizedData = normalize_submitted_data($_POST, $_FILES);
        // Step 2: validate the normalized data
        $formErrors = validate_normalized_data($normalizedData);
        
        if (count($formErrors) === 0) {
            // load all the tours
            $toursData = load_all_tours_data();
            // Provide a unique ID for this new tour:
            $normalizedData['id'] = count($toursData) + 1;

            $toursData[] = $normalizedData;
            
            save_all_tours($toursData);
            
            $_SESSION['message'] = 'The new tour was saved successfully';
            header('Location: /create-tour');
            exit;
        }
        
    }

    include(__DIR__ . '/../_header.php');
?>

    <p><a href="/list-tours">Go back to the list</a></p>
    <h1>Create a new tour</h1>

<?php 
    include(__DIR__ . '/snippets/_tour-form.php');
    include(__DIR__ . '/../_footer.php');