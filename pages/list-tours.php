<?php
    include(__DIR__ . '/../bootstrap.php');

    $toursJsonFile = __DIR__ . '/../data/tours.json';
    if (file_exists($toursJsonFile)) {
        $jsonData = file_get_contents($toursJsonFile);
        $toursData = json_decode($jsonData, true);
    } else {
        $toursData = [];
    }

    include(__DIR__ . '/../_header.php');
?>
    <p>
        <a href="/create-tour" class="btn btn-primary">Add a tour</a>
    </p>
    <?php
        if (count($toursData) === 0) {
    ?>  
            <p>There are no tours (yet).</p>
    <?php
        }else {
    ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Destination</th>
                    <th>Number of tickets</th>
                    <th>Is accessible</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($toursData as $tourData) {
                ?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars($tourData['destination'], ENT_QUOTES); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars( $tourData['number_of_tickets_available'], ENT_QUOTES); ?>
                    </td>
                    <td>
                        <?php echo $tourData['is_accessible'] ? 'Yes' : 'No'; ?>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
        }
    ?>
<?php
include(__DIR__ . '/../_footer.php');

