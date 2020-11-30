<?php
    include(__DIR__ . '/functions/tour-crud.php');
    include(__DIR__ . '/../bootstrap.php');

    if (!isset($_GET['id'])) {
        header('Location: /list-tours');
        exit;
    }
    $tourId = (int)$_GET['id'];
    $tourData = load_tour_data($tourId);
    
    include(__DIR__ . '/../_header.php');
?>
    <h1>Tour to 
        <?php echo htmlspecialchars($tourData['destination'], ENT_QUOTES);?>
    </h1>
    <p>This tour is 
        <?php echo $tourData['is_accessible'] ? 'accessible' : 'not accessible'; ?>.
    </p>
    <p>There are 
        <?php echo htmlspecialchars( $tourData['number_of_tickets_available'], ENT_QUOTES); ?> 
        tickets available.
    </p>
<?php
include(__DIR__ . '/../_footer.php');