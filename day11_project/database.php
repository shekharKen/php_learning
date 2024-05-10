<?php

    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'test');

    $db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($db->connect_error) {
        die("database connection error" . $db->connect_error);
    } 
    // else {
    //     echo "connected";
    // }

    // $query = "SELECT * FROM users";
    // $data = $db->query($query);
    // fetch data

?>