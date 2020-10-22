<?php
    session_start();
    if (isset($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['message'] = 'Thanks for telling us your name!';
        header('Location: /random.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Name</title>
    </head>
    <body>
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
    </body>
</html>