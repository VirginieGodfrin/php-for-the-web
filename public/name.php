<?php 
    if (isset($_POST['name'])) {
        setcookie('name', $_POST['name']);
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