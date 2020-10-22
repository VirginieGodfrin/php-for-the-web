<!DOCTYPE html>
<?php
    session_start();
    $randomInt = random_int(1, 20) 
?>
<?php
    $title = 'Random';
    include(__DIR__ . '/../_header.php');
?>
<!-- __DIR__ is a magic constant that’s always defined in any PHP script. Its value is
the absolute path of the directory that contains this script.-->
<?php include __DIR__ . '/../_flash_message.php'; ?>
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

