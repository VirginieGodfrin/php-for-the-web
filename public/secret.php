<?php
    session_start();
    if (!isset($_SESSION['authenticated_user'])) {
        header('Location: /login.php');
        exit;
    }
?>
<?php
    include(__DIR__ . '/../_header.php');
?>
    <p><a href="/logout.php">Log out</a></p>
    <p>Here's something special for users who are logged in:</p>
    <p><img src="img/elephpant.jpg" alt="An elephpant"></p>
<?php
    include(__DIR__ . '/../_footer.php');