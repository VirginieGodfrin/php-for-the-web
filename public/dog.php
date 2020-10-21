<?php
    $nbdog = isset($_GET['number']) ? (int) $_GET['number'] : 1;
    if ($nbdog < 1) {
        $nbdog = 1;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kittens</title>
    </head>
<body>
<?php
    for ($i = 1; $i <= $nbdog; $i++) {
?>
    Cat 
<?php echo $i; ?>:
    <img src="/dog.jpg" alt="dog <?php echo $i; ?>" width="10%">
<?php
    }
?>
</body>
</html>

