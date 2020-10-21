<!DOCTYPE html>
<?php $number = random_int(1, 20) ?>
<html lang="en">
    <head>
        <title>Your lucky number</title>
    </head>
    <body>
        <h1>Your lucky number is: <?php echo $number ?></h1>
        <?php if ($number > 5) { ?>
            <h2>Nice!</h2>
        <?php } ?>
    </body>
</html>

