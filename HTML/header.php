<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Shopzilla</title>
    <link rel="stylesheet" href="css\style.css" />

</head>

<body>
    <!--Header Section-->

    <header class="header">
        <a href="Home.html">
            <img src="Images\Images\logo4.png" width="150">
        </a>

        <div class="icons">
            <ul>
                <li id="button-holder">
                    <img id="search-btn" src="Icons\Search.png" width="30" height="30" />
                </li>

                <li>
                    <form action="" class="search-bar-container">
                        <input type="search" id="search-bar" placeholder="search products" />
                        <label for="search-bar" id="search-btn"></label>
                    </form>
                </li>
            </ul>
            <a href="Login.html"><img id="user-btn" src="Icons\User.png " width="35" height="35" style="float: right" /></a>
            <a href="Cart.html"><img id="cart-btn" src="Icons\Cart.jpg" width="35" height="35" style="float: right" /></a>

        </div>
    </header>

    <div class="menu-bar">
        <ul>
            <li>
                <a class="active" href=" ">Category</a>
                <div class="sub-menu">
                    <ul>
                        <li class="hover-me">
                            <a href="">Fashion & Clothing</a>
                            <div class="sub-menu-1">
                                <ul>
                                    <li><a href="wClothing.html">Women</a></li>
                                    <li><a href="">Men</a></li>
                                    <li><a href="kClothing.html">Kids</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="hover-me">
                            <a href="">Accessories & Beauty Products</a>
                            <div class="sub-menu-1">
                                <ul>
                                    <li><a href="wProdcuts.html">Women</a></li>
                                    <li><a href="men.php">Men</a></li>
                                    <li><a href="kProducts.html">Kids</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="Toys.html">Toys,Books & Stationaries</a></li>
                        <li class="active"><a href="Sports.html">Sports Goods</a></li>
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
            <li><a href="SellerAccount.html">Seller Center</a></li>

        </ul>
    </div>
