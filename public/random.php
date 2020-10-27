<!DOCTYPE html>
<?php
    include(__DIR__ . '/../bootstrap.php');
    $randomInt = random_int(1, 20);
            
    $title = 'Random';
    include(__DIR__ . '/../_header.php');
?>
    <h1>Your lucky number is: <?php echo $randomInt ?></h1>
<?php if ($randomInt > 5) { ?>
    <h2>Nice <?php 
        echo htmlspecialchars($_SESSION['name'] ?? 'anonymous user', ENT_QUOTES)
    ?> !</h2>
<?php } ?>
    <form action="pictures.php" method="GET">
        <input type="hidden" name="number" value="<?php
            echo $randomInt;
        ?>">
        <button type="submit">
            Now show me <?php echo $randomInt; ?> dogs!
        </button>
    </form>
<?php
    include(__DIR__ . '/../_footer.php');

