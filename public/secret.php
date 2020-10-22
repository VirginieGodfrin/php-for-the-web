<?php
    session_start();
    if (!isset($_SESSION['authenticated_user'])) {
        header('Location: /login.php');
        exit;
    }
    $_SESSION['authenticated_user'] = $_POST['username'];
    $_SESSION['message'] = 'Welkom '. $_POST['username'] ;
?>
<?php
    $title = 'Secret';
    include(__DIR__ . '/../_header.php');
?>
    <p>Here's something special for users who are logged in:</p>
    <p><img src="img/elephpant.jpg" alt="An elephpant"></p>
<?php
    include(__DIR__ . '/../_footer.php');