<?php
    $language = $_COOKIE['language'] ?? null;
    if (!in_array($language, ['en', 'du'])) {
        $language = 'fr';
    };
    setcookie('language', $language);
?>
<?php
    $title = 'Index';
    include(__DIR__ . '/../_header.php');
?>
    <h1>Hello world</h1>
    <ul>
        <li><a href="/random.php"> Get your lucky number! </a></li>
        <li><a href="/pictures.php"> Pictures </a></li>
        <li><a href="/name.php"> Name </a>
    </ul>
<?php
    include(__DIR__ . '/../_footer.php');
