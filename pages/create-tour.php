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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $toursData[] = [
            'destination' => isset($_POST['destination']) ? (string)$_POST['destination'] : '',
            'number_of_tickets_available' => isset($_POST['number_of_tickets_available']) ? (int)$_POST['number_of_tickets_available'] : 0,
            'is_accessible' => isset($_POST['is_accessible']) ? true : false
        ];
    }
    
    // Convert the tours data to JSON
    $jsonData = json_encode($toursData, JSON_PRETTY_PRINT);
    
    // Save the tours data to `data/tours.json`:
    file_put_contents($toursJsonFile, $jsonData);
    
    include(__DIR__ . '/../_header.php');
?>

<h1>Create a new tour</h1>
    <form method="post">
        <div>
            <label for="destination">
                Destination:
            </label>
            <input type="text" name="destination" id="destination">
        </div>
        <div>
            <label for="number_of_tickets_available">
                Number of tickets available:
            </label>
            <input type="number" name="number_of_tickets_available" id="number_of_tickets_available">
        </div>
        <div>
            <label>
                <input type="checkbox" name="is_accessible" value="yes">
                Is accessible
            </label>
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
    </form>

<?php
    include(__DIR__ . '/../_footer.php');