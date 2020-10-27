<?php
    $title = $title ?? 'PHP for the Web';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo htmlspecialchars($title, ENT_QUOTES); ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/">Homepage</a></li>
                <li class="nav-item"><a class="nav-link" href="/random.php"> Get your lucky number! </a></li>
                <li class="nav-item"><a class="nav-link" href="/pictures.php"> Pictures </a></li>
                <li class="nav-item"><a class="nav-link" href="/name.php"> Name </a>
                <li class="nav-item"><a class="nav-link" href="/secret.php">Secret picture</a></li>
            </ul>
        </nav>
<?php
    include(__DIR__ . '/_flash_message.php');