<!DOCTYPE html>
<?php include"in.php" ?>
<link rel="stylesheet" href="style.css" media="all" />
<html>
    <head>
        <title>My online shop</title>
    </head>
    <body>
<!-- main container start -->
        <div class="main_wrapper">

            <!-- header start -->
            <div class="header_wrapper">
                
                <img id="logo" src="../images/logo.png" />
                <img id="banner" src="../images/logo.png" />

            </div>
            <!-- header end -->

            <!-- nav bar start -->
            <div class="menubar">
    
                <ul id="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">All Products</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">Shopping Cart</a></li>
                    <li><a href="#">Contact</a></li>

                </ul>

                <div id="form">
                    <form method="get" action="results.php" enctype="multipart/form-data">
                        <input type="text" name="user_query" placeholder="Search a Product" />
                        <input type="submit" name="search" value="Search" />
                    </form>
                </div>

            </div>
            <!-- nav bar end -->

            <!-- content wrapper start -->
            <div class="content_wrapper">


            <div id="sidebar">

                <div id="sidebar_title">Categories</div>

                <ul id="cats">

                    <?php getCats();?>

                </ul>

                <div id="sidebar_title">Brands</div>

                <ul id="cats">

                    <?php getBrands();?>

                </ul>


            </div>

            <div id="content_area">

                <div id="shopping_cart">

                    <span style="float:right; font-size:18px; padding: 5px; line-height: 40px;">
                        
                        Welcome Guest! <b style="color:yellow">Shopping Cart -</b> Total Items: Total Price <a href="cart.php"
                        style="color:yellow">Go to Cart</a>
                    
                    </span>

                </div>


                <div id="products_box">

                    <?php getPro(); ?>

                </div>

            </div>
            <!-- content wrapper end -->

            <div id="footer">

            </div>
        </div>
<!-- main container end -->


    </body>
</html>