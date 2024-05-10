<?php

    function runQuery($query)
    {
        include '../database.php';
        $data =  $db->query($query);

        return $data;
    }
    
    function getUserByEmailPassword($email, $password)
    {
        // get user from database query
        $query = "SELECT id FROM users where email='" . $email . "' and password='" . $password . "' and is_admin='1'";

        // echo $query;die;
        // $query = "SELECT * FROM users";

        $data = runQuery($query);

        // print_r($data);die;

        // $data->fetch_assoc() assoc arr
        // $data->fetch_row() index arr

        // while ($row = $data->fetch_assoc()) {
        //     print_r($row['email']);
        //     echo "<br>";
        // }

        // echo mysqli_num_rows($data);

        // die;

        return mysqli_num_rows($data);

    }


?>