<?php

    include '../models/product.php';

    if(isset($_POST['product_submit'])) {
        $product = $_POST;
        unset($product['product_submit']);

        saveProduct($product);

        // header('Location: ../views/product_add.php?success=true');
        header('Location: ../views/products.php');
        
    }

    function getAllProducts() {
        return getProducts();
    }

?>