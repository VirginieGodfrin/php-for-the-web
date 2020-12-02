<?php
set_exception_handler(
    function (Throwable $exception) {
        error_log('Uncaught ' . (string)$exception);
        
        header( $_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error');
        
        $displayErrors = (bool)ini_get('display_errors');
        
        include(__DIR__ . '/pages/error.php');
    }
);

session_start();