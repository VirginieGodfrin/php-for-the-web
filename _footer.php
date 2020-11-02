    <nav class="navbar navbar-expand-lg bg-light">    
        <ul class="navbar-nav">
            <?php
                if( isset($_SESSION['authenticated_user']) ) {
            ?>
                    <li class="nav-item">You are logged in as: 
                        <?php echo $_SESSION['authenticated_user']; ?>
                    </li>
                    <li class="nav-item"><a href="/logout">Log out</a></li>
            <?php
                } else {
            ?>
                    <li class="nav-item"><a href="/login">Log in</a></li>
            <?php
                }
            ?>
        </ul>
    </nav>    
</body>
</html>