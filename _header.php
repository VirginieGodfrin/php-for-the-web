<?php
    $title = $title ?? 'PHP for the Web';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo htmlspecialchars($title, ENT_QUOTES); ?></title>
    </head>
    <body>
        <ul>
            <li><a href="/random.php"> Get your lucky number! </a></li>
            <li><a href="/pictures.php"> Pictures </a></li>
            <li><a href="/name.php"> Name </a>
        </ul>
<?php
    include(__DIR__ . '/_flash_message.php');