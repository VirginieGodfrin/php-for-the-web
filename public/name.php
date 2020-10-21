<?php
//    $language = $_COOKIE['language'];
//    if (!in_array($language, ['english', 'dutch'])) {
//        $language = 'français';
//    };
    
    if (isset($_POST['name'])) {
        $name = $_COOKIE['name'];
        if (strlen($name) > 25) {
            $name = substr($name, 0, 25);
        }
        setcookie('name', $name);
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