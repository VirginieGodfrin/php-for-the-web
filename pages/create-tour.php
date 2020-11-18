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
    
    $formErrors = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Step 1: normalize the request data:
        $normalizedData[] = [
            'destination' => isset($_POST['destination']) ? (string)$_POST['destination']:  "" ,
            'number_of_tickets_available' => isset($_POST['number_of_tickets_available']) ? (int)$_POST['number_of_tickets_available'] : 0,
            'is_accessible' => isset($_POST['is_accessible']) ? true : false
         ];
        
        // Step 2: validate the normalized data
        if ($normalizedData['destination'] == "") {
            $formErrors['destination'] = 'Please provide a destination';
        }
        if ($normalizedData['number_of_tickets_available'] < 1) {
            $formErrors['number_of_tickets_available'] = 'Number of tickets available should be at least 1';
        }
        
        if (count($formErrors) == 0) {
            $toursData[] = $normalizedData;
            // Convert the tours data to JSON
            $jsonData = json_encode($toursData, JSON_PRETTY_PRINT);
            // Save the tours data to `data/tours.json`:
            file_put_contents($toursJsonFile, $jsonData);
        }
    }
    
    include(__DIR__ . '/../_header.php');
?>
<h1>Create a new tour</h1>
    <form method="post">
        <div>
            <label for="destination">
                Destination:
            </label>
            <input type="text" name="destination" id="destination">
            <?php
                if (isset($formErrors['destination'])) {
            ?>
                <strong>
                    <?php echo $formErrors['destination']; ?>
                </strong>
            <?php
                }
            ?>
        </div>
        <div>
            <label for="number_of_tickets_available">
                Number of tickets available:
            </label>
            <input type="number" name="number_of_tickets_available" id="number_of_tickets_available">
            <?php
                if (isset($formErrors['number_of_tickets_available'])) {
            ?>
                    <strong>
                        <?php echo $formErrors['number_of_tickets_available']; ?>
                    </strong>
            <?php
                }
            ?>
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