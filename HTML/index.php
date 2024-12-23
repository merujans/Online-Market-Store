<?php

        session_start();

        require_once 'config.php';
        require_once ('./php/component.php');


        // create instance of Createdb class
        $database = new CreateDb("Productdb", "Producttb");

        if (isset($_POST['add'])){
        /// print_r($_POST['product_id']);
        if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "
            <script>alert('Product is already added in the cart..!')</script>";
            echo "
            <script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }
    else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <form action='#' method="POST">
                    <div class='card shadow'>
                        <div>
                            <img src=''
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-4">


            </div>
            <div class="col-4">


            </div>
            <div class="col-4">


            </div>
            <?php
            $result = $database->getData();
            while ($row = mysqli_fetch_assoc($result)){
            component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
            }
            ?>
        </div>
    </div>





    
</body>
</html>