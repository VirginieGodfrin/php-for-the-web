<?php
    $title = $title ?? 'PHP for the Web';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo htmlspecialchars($title, ENT_QUOTES); ?></title>
    </head>
    <body>