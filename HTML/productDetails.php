<?php
	require 'config.php';
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Shopzilla</title>
    <link rel="stylesheet" href="..\CSS\headerFooter.css" />
     <link rel="stylesheet" href="..\CSS\Product.css" />

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
            <li>
                <a href="">Seller Center</a>
                <div class="sub-menu">
                    <ul>
                        <li style="margin:15px; text-align:center;" class="hover-me">

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

<?php

                $sql = "SELECT * FROM uploadproducts";
                $result = $conn->query($sql);

                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        $id = $row['PID'];
                       
                        echo "<div style = 'text-align:left; height:600px;' class = 'single-product'>";
                        echo    "<div class = 'row'>";
                        echo        "<div style='margin-top:2px;' class='col-2'>";
                        echo            "<img src= " .$row['image']. "width='300' height='300' style='margin-top:2px;'/>";
                        echo           "<h3 style='margin-top:20px; padding:20px;' class='pro'>Product Attributes</h3>";
                        echo             "<div style = 'text-align:justify; margin-left:185px;' class = 'attribute'>";
                        echo                 "<p>Brand : " .$row['proBrand']. "</p>";
                        echo                 "<p>Color : " .$row['proColor']. "</p>";
                        echo                 "<p>Generation : " .$row['proGen']. "</p>";
                        echo                 "<p>Size : " .$row['proSize']. "</p>";
                        echo                 "<p>Type : " .$row['proType']. "</p>";
                        echo                 "<p>Movemnet :" .$row['proMov']. "</p>";
                        echo            " </div>";
             

                        echo         "</div>";
                        echo         "<div style = 'text-align:justify;' class='col-2'>";
                        echo             "<p>".$row['proCategory']. "</p>";
                        echo             "<h1>".$row['proName']. "</h1>";
                        echo             "<h4> $".$row['proPrice']. "</h4>";
                        echo             "<p> Stock : " .$row['proQty']. "</p>";
                        echo             "<select>
                                         <option>Select Size</option>
                                         <option>XXL</option>
                                         <option>XL</option>
                                         <option>Large</option>
                                         <option>Medium</option>
                                         <option>Small</option>
                                     </select>
                                    <br />

                                   <select>
                                         <option>~Choose Color</option>
                                         <option style='background-color:red;'>Red</option>
                                         <option style='background-color:blue;'>Blue</option>
                                         <option style='background-color:black;'>Black</option>
                                         <option style='background-color:white;'>White</option>
                                        <option style='background-color:green;'>Green</option>
                                         <option style='background-color:yellow;'>Yellow</option>
                                     </select>
                                     <br />";
                        echo             "<label>Quantity</label>";
                        echo             "<input type='number' value='1' min='1' max='10' />";
                        echo            "<br />";
                        echo             "<button href='' class='cart-btn'>Add To Cart</button>";
                        echo           "<button href='' class='wish-btn'>Add To Wishlist</button><br />";
                         echo          "<br><br><br><h3>Product Details</h3>";
                        echo             "<p>".$row['proDesc']. "</p>";
                        echo             "<h3>Service</h3>";
                        echo             "<p>Warranty Type : " .$row['warT']."</p>";
                        echo             "<p>Warranty Period : " .$row['warP']. "</p>";
                        echo             "<h3>Delivery</h3>";
                        echo             "<p>Package Width: " .$row['proW']. "</p>";
                        echo             "<p>Package Length :  " .$row['proL']. "</p>";
                        echo             "<p>Package Weight : " .$row['proDeli']. "</p>";


                        echo        " </div>
                           </div>
                        </div>
                     </div>";
                    }
                }
                else
                {
                    echo "No results";
                }


 ?>



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

