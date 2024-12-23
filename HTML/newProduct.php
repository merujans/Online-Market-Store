<?php

    //strat session
    session_start();
	require 'config.php';
   
    if(isset($POST['add'])){

    }

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
            <a href="Cart.html"><img id="cart-btn" src="..\Images\Icons\Cart.jpg" width="35" height="35" style="float: right" /></a>

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

                $Iid = $_GET['item_id'];
                $sql = "SELECT * FROM product WHERE item_id=$Iid";
                $result = $conn->query($sql);

                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        $id = $row['item_id'];
                       
                        echo "<div style = 'text-align:left; height:600px;' class = 'single-product'>";
                        echo    "<div class = 'row'>";
                                   
                        echo        "<div style='margin-top:2px;' class='col-2'>";
                        echo            "<img src= " .$row['item_image']. "width='300' height='300' style='margin-top:2px;'/>";
                  
                        echo             "<div style = 'text-align:justify; margin-left:185px;' class = 'attribute'>";
                        echo                 "<p>Brand : " .$row['item_brand']. "</p>";
                      
                        echo            " </div>";
             

                        echo         "</div>";
                        echo         "<div style = 'text-align:justify;' class='col-2'>";
                        echo             "<p>".$row['item_category']. "</p>";
                        echo             "<h1>".$row['item_name']. "</h1>";
                        echo             "<h4> $".$row['item_price']. "</h4>";
                        
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
                        echo             "<input type='number' name='quantity' value='1' min='1' max='10' />";
               
                        echo            "<br />";
                        echo            "<form>";

                        echo           "<button href='Cart.html' class='cart-btn' name='add'>Add To Cart</button>
                                        <input type='hidden' name='product_id' value='$Iid'>
                                        </from>";
                        echo           "<button href='' class='wish-btn' >Add To Wishlist</button><br />";
                        echo          "<br><br><br><h3>Product Details</h3>";
                        echo          "<p>".$row['item_desc']. "</p>";
  


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

