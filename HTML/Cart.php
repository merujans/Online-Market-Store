<?php
 
    require 'config.php';
    
   
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Cart Page</title>
    <link rel="stylesheet" href="..\CSS\headerFooter.css" />
   
    <style>

        .cart-container {
            text-align: justify;
            padding: 20px;
            margin: 20px;
        }

        div .row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(20px, 1fr));
            gap: 5px;
        }

        .cart-container, .row, .col-2 {
            margin: 20px 100px 10px 100px;
        }

            .cart-container h5 {
                margin-top: 5px;
            }

            .cart-container img {
                padding: 10px;
            }

        .sb-btn {
            background: #d82727;
            color: white;
        }
        .footer{
            text-align: center;
        }
         .footer, .row, .col-2 {
             padding: 5px;
         }
    </style>
</head>

<body>

    <!--Header Section-->

    <header class="header">
        <a href="Home.html">
            <img src="..\Images\logo4.png" width="150">
        </a>

        <div class="icons">
            <ul>

                <li>
                    <form action="" class="search-bar-container">

                        <input type="search" id="search-bar" placeholder="search products" />
                        <label for="search-bar" id="search-btn"></label>

                        <button type="submit" id="search-btn" value="Search">Search</button>
                    </form>
                </li>
            </ul>
            <a href="Login.html"><img id="user-btn" src="..\Images\Icons\User.png " width="35" height="35" style="float: right" /></a>
            <a href="Cart.php"><img id="cart-btn" src="..\Images\Icons\Cart.jpg" width="35" height="35" style="float: right" /></a>

        </div>
    </header>


    <div class="menu-bar">
        <ul>
            <li>
                <a href=" ">Category</a>
                <div class="sub-menu">
                    <ul>
                        <li class="hover-me">
                            <a href="">Fashion & Clothing</a>
                            <div class="sub-menu-1">
                                <ul>
                                    <li><a href="wClothing.html">Women</a></li>
                                    <li><a href="mClothing.html">Men</a></li>
                                    <li><a href="kClothing.html">Kids</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="hover-me">
                            <a href="">Accessories & Beauty Products</a>
                            <div class="sub-menu-1">
                                <ul>
                                    <li><a href="wProdcuts.html">Women</a></li>
                                    <li><a href="mProducts.html">Men</a></li>
                                    <li><a href="kProducts.html">Kids</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="Toys.html">Toys,Books & Stationaries</a></li>
                        <li><a href="Sports.html">Sports Goods</a></li>
                        <li><a href="lifeStyle.html">Home & LifeStyle</a></li>
                        <li><a href="Electronics.html">Electronics</a></li>
                        <li><a href="Pet.html">Pet Items</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="Home.html">Home</a></li>
            <li><a href="Signup.html">Sign Up</a></li>
            <li><a href="Account.html">My Account</a></li>
            <li><a href="Wishlist.html">Wishlist</a></li>
            <li><a href="Contact.html">Contact  Us</a></li>
            <li><a href="Sell.html">Sell</a></li>
            <li><a href="">Seller Center</a>
                <div class="sub-menu">
                    <ul>
                        <li style="margin:15px; text-align:center;"class="hover-me">
                            
                                <a href="SellerLogin.html">Seller Login</a>
                                <a href="SellerDetails.html">Seller Details</a>
                                <a href="SellerAccount.html">Seller Account</a>
                                <a href="uploadProduct.html">Upload Products</a>
                            
                         
                        </li>
                    </ul>
                </div>
            
            </li>

        </ul>
    </div>

    <!--Page Content-->

    <section id="cart">
        <div class="cart-container">
            <h3>Shopping Cart</h3>
            <div class="row">
                <div class="col-6">
                    <h5>Product</h5>
                </div>
                <div class="col-6">
                    <h5>Product Name</h5>
                </div>
                <div class="col-6">
                    <h5>Product Price</h5>
                </div>
                <div class="col-6">
                    <h5>Quantity</h5>
                </div>
                <div class="col-6">
                    <h5>Sub Total</h5>
                </div>
                <div class="col-6">

                </div>
            </div>

            <?php 

                if(!empty($_SESSION['cart'])){
                    $subtotal = 0;
                    $total = 0;
                    foreach ($_SESSION['cart'] as $key => $value)
                    {
                        echo "<div class='row'>";
                        echo "<div class='col-6'>";
                        echo    "<img src=" .$row['item_image']. " style= 'height:100px; width:80px;' />";
                        echo "</div>";
                        echo "<div class='col-6'>";
                        echo  " <br /><small>".$row['item_name']. "</small>";
                        echo "</div>";
                        echo "<div class='col-6'>";
                        echo   "<br />$<span class='product_price'>" .$row['item_price']."</span>";
                        echo "</div>";

                        echo "<div class='col-6'>";
                            echo "<br /><div class='qty'>";
                            echo   "<p>" .$row['item_qty']. "</p>";
                            echo "</div>";
                        echo "</div>";
                        echo "<div class='col-6'>";
                        echo " <br />";
                        echo "</div>";
                        echo "<div class='col-6'>";
                        $subtotal = $row['item_qty'] * $row['item_price'];
                        echo   " number_format($subtotal,decimals:2)";
                        echo " <br />";
                        echo  "<button type='submit' class='sb-btn' Value='Delete'>Remove</button>";
                        echo "</div>";
                    }
                }

            ?>


        </div>
</section>

    <!--Footer Section-->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our App</h3>
                    <img src="..\Images\icons\Googleplay1.png" />
                    <img src="..\Images\icons\Windows.png" />
                    <br />
                    <img src="..\Images\icons\Applestore1.jpg" />
                </div>
                <div class="footer-col-2">
                    <h3>Payment Methods</h3>
                    <img src="..\Images\icons\Master1.png" />
                    <img src="..\Images\icons\Visa1.png" />
                    <img src="..\Images\icons\Discover.png" />
                </div>
                <div class="footer-col-3">
                    <h3>Follow Us on</h3>
                    <img src="..\Images\icons\Facebook1.png" />
                    <img src="..\Images\icons\Instagram1.png" />
                    <img src="..\Images\icons\Twitter1.png" />
                </div>
                <div class="footer-col-4">
                    <p><a href="About.html">About Us</a></p><br />
                    <p><a href="Blog.html">Blog</a></p><br />
                    <p><a href="Policy.html">Privacy Policy</a></p><br />
                    <p><a href="Terms.html">Terms and Conditions</a></p>
                </div>
                <div class="footer-col-5">
                    <h3>Business Details</h3>
                    <p><img src="..\Images\icons\location.png" />Shopzilla, Colombo, Sri Lanka.</p>
                    <p><img src="..\Images\icons\email.png" />Shopzilla2022@gmail.com</p>
                    <p><img src="..\Images\icons\phone.png" />+94573409210</p>
                </div>
            </div>
            <br /><br />
            <hr />
            <p class="copyright"> Copyright 2022 Shopzilla <br /> All Rights Reserved</p>
        </div>
    </div>
</body>

</html>
