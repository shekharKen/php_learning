<?php

    session_start();

    // login
    if(isset($_POST['admin_login'])) {

        $user = [
            'email' => 'admin@user.com',
            'password' => '1234'
        ];
        $email = $_POST['email'];
        $password = $_POST['password'];
        

        if($user['email'] === $email && $user['password'] === $password) {
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
        echo $_SESSION['user_email'] . "<br>";

        session_destroy();

        header('Location: ../index.php');

    }


?>