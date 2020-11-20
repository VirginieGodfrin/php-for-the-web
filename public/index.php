<?php
    include(__DIR__ . '/../bootstrap.php');
    
    $language = $_COOKIE['language'] ?? null;
    if (!in_array($language, ['en', 'du'])) {
        $language = 'fr';
    };
    setcookie('language', $language);
    
    $urlMap = [
        '/' => 'homepage.php',
        '/create-tour' => 'create-tour.php',
        '/edit-tour' => 'edit-tour.php',
        '/list-tours' => 'list-tours.php',
        '/login' => 'login.php',
        '/logout' => 'logout.php',
        '/name' => 'name.php',
        '/pictures' => 'pictures.php',
        '/random' => 'random.php',
        '/secret' => 'secret.php',
    ];
    
    $pathInfo = $_SERVER['PATH_INFO'] ?? '/';
    
    if( isset( $urlMap[ $pathInfo ] ) ) {
        // Load a specific page script
        include( __DIR__ . '/../pages/' . $urlMap[ $pathInfo ] );
    }else{
        // Return a 404 status code
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
        include(__DIR__ . '/../pages/404.php');
    }
