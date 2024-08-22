<?php

// Adjust session settings
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

// Set session cookie parameters
session_set_cookie_params([
    'lifetime' => 3600, // 1 hour
    'path' => '/',
    'domain' => 'localhost',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Lax'
]);

session_start();

function regenerate_session_id(){
    session_regenerate_id();
    $_SESSION["last_regeneration"] = time();
}

if(!isset($_SESSION["last_regeneration"])){
    regenerate_session_id();
} else{
    $interval = 60 * 30;
    if (time() - $_SESSION['last_regeneration'] >= $interval){
        regenerate_session_id();
    }
}