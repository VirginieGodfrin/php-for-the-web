<?php
    if (!isset($_SESSION['authenticated_user'])) {
        header('Location: /login');
        exit;
    }
    $_SESSION['message'] = 'Welkom '. $_SESSION['authenticated_user'];
    ?>
<?php
    $title = 'Secret';
    include(__DIR__ . '/../_header.php');
?>
    <p>Here's something special for users who are logged in:</p>
    <p><img src="img/elephpant.jpg" alt="An elephpant"></p>
<?php
    include(__DIR__ . '/../_footer.php');