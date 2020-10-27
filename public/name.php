<?php
    include(__DIR__ . '/../bootstrap.php');
    if (isset($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['message'] = 'Thanks for telling us your name!';
        header('Location: /random.php');
        exit;
    }
?>
<?php
    $title = 'Name';
    include(__DIR__ . '/../_header.php');
?>
    <form method="post">
        <p>
            <label for="name">
                Your name:
            </label>
            <input type="text" name="name" id="name">
        </p>    
        <p>
            <button type="submit">Submit</button>
        </p>
    </form>
<?php
    include(__DIR__ . '/../_footer.php');