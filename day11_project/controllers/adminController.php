<?php

    session_start();

    include '../models/admin.php';

    // login
    if(isset($_POST['admin_login'])) {

        // frontend data
        $email = $_POST['email'];
        $password = $_POST['password'];

        $response = getUserByEmailPassword($email, $password);
        
        if($response > 0) {
            // session
            $_SESSION['user_email'] = $email;

            // cookie
            // setcookie('useremail', $email, 86400);
            // echo $_COOKIE['useremail'];die;

            header('Location: ../views/index.php');
        } else {

            header('Location: ../index.php?error=Login failed');
        }

    }


    // logout
    if(isset($_GET['action']) && $_GET['action'] === "logout") {
        // echo $_SESSION['user_email'] . "<br>";

        session_destroy();

        header('Location: ../index.php');

    }


?>