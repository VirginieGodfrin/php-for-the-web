<?php
    $language = $_COOKIE['language'] ?? null;
    if (!in_array($language, ['en', 'du'])) {
        $language = 'fr';
    };
    setcookie('language', $language);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Php for the web</title>
    </head>
    <body>
        <h1>Hello world</h1>
        <a href="/random.php">Get your lucky number! </a>
        <br>
        <a href="/pictures.php"> Pictures </a>
    </body>
</html>
