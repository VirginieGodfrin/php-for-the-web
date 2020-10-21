<?php
    $nbpictures = isset($_GET['number']) ? (int) $_GET['number'] : 1;
    if ($nbpictures < 1) {
        $nbpictures = 1;
    }
    
    $picture = isset($_GET['picture']) ? $_GET['picture'] : 'dog.jpg';
    
    $pictures = [
        'puppy.jpg' => 'Puppy',
        'dog.jpg' => 'Dog'
    ];
?>
<?php
    /*
    * Derive the picture from the query parameter,
    * but also provide a sensible default ('puppy.jpg'):
    */
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>dog</title>
    </head>
    <body>
        <form action="pictures.php" method="POST">
            <div>
                <div>
                    <label for="picture">
                        Select a picture:
                    </label>
                    <select name="picture" id="picture">
                        <?php foreach ($pictures as $filename => $description) {
                        ?>
                            <option value="<?php
                                echo htmlspecialchars($filename, ENT_QUOTES);
                            ?>"<?php
                                if (isset($_POST['picture']) && $_POST['picture'] === $filename) {
                                    $picture = $filename;
                                    ?> selected<?php
                                }
                            ?>>
                            <?php echo htmlspecialchars($description, ENT_QUOTES); ?>
                            </option>
                            <?php
                        } ?>
                    </select>
                </div>
                <label for="number">
                    Pictures:
                </label>
                <input name="number" 
                       id="number"
                       value="<?php 
                            echo htmlspecialchars ($picture); 
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
        for ($i = 1; $i <= $nbpictures; $i++) {
    ?>
    Cat 
    <?php echo $i; ?>:
    <img src="img/<?php echo htmlspecialchars($picture, ENT_QUOTES)?>" 
         alt="dog <?php echo $i; ?>" 
         width="10%">
    <?php
        }
    ?>
    </body>
</html>

