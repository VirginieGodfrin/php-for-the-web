<?php
    include(__DIR__ . '/functions/tour-crud.php');
    
    include(__DIR__ . '/../bootstrap.php');
    
    $toursData = load_all_tours_data();

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
                    <th>Actions</th>
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
                    <td>
                    <a href="/edit-tour?id=<?php echo htmlspecialchars($tourData['id'], ENT_QUOTES);?>" 
                       class="btn btn-primary">
                        Edit
                    </a>
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

