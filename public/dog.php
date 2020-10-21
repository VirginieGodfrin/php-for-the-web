<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kittens</title>
    </head>
<body>
<?php
    $nbdog = $_GET['number'];
    for ($i = 1; $i <= $nbdog; $i++) {
?>
    Cat 
<?php echo $i; ?>:
    <img src="/dog.jpg" alt="dog <?php echo $i; ?>">
<?php
    }
?>
</body>
</html>

