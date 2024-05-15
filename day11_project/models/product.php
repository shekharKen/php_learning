<?php
    function runQuery($query)
    {
        include '../database.php';
        $data = $db->query($query);

        return $data;
    }


    function saveProduct($product)
    {
        $query = "INSERT INTO products (name, price, description, quantity) VALUES('" . $product['name'] . "', '" . $product['price'] . "', '" . $product['desc'] . "', '" . $product['quantity'] . "')";

        // echo $query;die;

        runQuery($query);

        // print_r($data);die;

        return true;

    }



?>