<?php
    $nbdog = isset($_GET['number']) ? (int) $_GET['number'] : 1;
    if ($nbdog < 1) {
        $nbdog = 1;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>dog</title>
    </head>
    <body>
        <form action="action">
            <div>
                <div>
                    <label for="picture">
                        Select a picture:
                    </label>
                    <select name="picture" id="picture">
                        <option value="dog.jpg">Dog</option>
                        <option value="puppy.jpg">Puppy</option>
                    </select>
                </div>
                <label for="number">
                    Number of dogs to show:
                </label>
                <input name="number" 
                       id="number"
                       value="<?php 
                            if (isset($_GET['number'])) echo htmlspecialchars ($_GET['number']); 
                       ?>"
                       onclick="alert('Helloooo\o')"
                >
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
        <hr>
    <?php
        for ($i = 1; $i <= $nbdog; $i++) {
    ?>
    Cat 
    <?php echo $i; ?>:
    <img src="img/dog.jpg" alt="dog <?php echo $i; ?>" width="10%">
    <?php
        }
    ?>
    </body>
</html>

