<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>AMP - Online Furniture Store|Furniture</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="furnitureamp.php">Furniture</a></li>
                    <li><a href="decoramp.php">Decor</a></li>
                    <?php

                    if(isset($_SESSION['username'])){
                      echo'<li><a href="cart.php">Cart</a></li>';
                      //echo '<li><a href="account.php">My Account</a></li>';
                      //echo '<li><a href="orders.php">My Orders</a></li>';
                      echo '<li><a href="logout.php">Log Out</a></li>';
                    }
                    else{
                      echo '<li><a href="login.php">Log In</a></li>';
                      echo '<li><a href="register.php">Register</a></li>';
                    }
                    ?>
                </ul>
            </nav>

        </header>
        <!-- Header Area End -->

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="#modernchairmodal" role="button" data-toggle="modal">
                        <img src="img/bg-img/1.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                           <!-- <p>From $180</p>-->
                            <h4>Modern Chair</h4>
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="modernchairmodal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 21;


                                      $result = $mysqli->query('SELECT * FROM furniture where id=21');


                                      if($result){

                                        while($obj = $result->fetch_object()) {


                                          echo '<p><strong>'.$obj->product_name. '</p>';

                                          echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
                                           echo "";

                                          echo '<p><strong>Description</strong>: '.$obj->product_description.'</p>';

                                          echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';

                                          echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';


                                          if($obj->qty > 0){
                                            echo '<center><p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #fbb710; border: none; color: #fff; font-size: 1em; padding: 10px; border-radius:5px" /></a></p></center>';
                                          }
                                          else {
                                            echo 'Out Of Stock!';
                                          }

                                        }

                                      }

                                      $_SESSION['product_id'] = 21;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                                <!--INSERT DB DATA-->

                              Dimensions: H 33 x W 19 x D 19<br>
                              (all dimensions in inches)<br>
                              Warranty: 12 Months' Warranty<br>
                              Assembly: Carpenter Assembly<br>
                              Primary Material: Polypropylene (PP)<br>
                              Room Type: Living Room<br>
                              Height: 33.0 inches<br>
                              Width: 19.0 inches<br>
                              Depth: 19.0 inches<br>
                              Seating Height: 18<br>
                      </div>

                    </div>
                  </div>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="#poangchairmodal" role="button" data-toggle="modal">
                        <img src="img/bg-img/yellowchair.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <!--<p>From $180</p>-->
                            <h4>Poang Chair</h4>
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="poangchairmodal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 22;


                                      $result = $mysqli->query('SELECT * FROM furniture where id=22');


                                      if($result){

                                        while($obj = $result->fetch_object()) {


                                          echo '<p><strong>'.$obj->product_name. '</p>';

                                          echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
                                           echo "";

                                          echo '<p><strong>Description</strong>: '.$obj->product_description.'</p>';

                                          echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';

                                          echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';


                                          if($obj->qty > 0){
                                            echo '<center><p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #fbb710; border: none; color: #fff; font-size: 1em; padding: 10px; border-radius:5px" /></a></p></center>';
                                          }
                                          else {
                                            echo 'Out Of Stock!';
                                          }

                                        }

                                      }

                                      $_SESSION['product_id'] = 22;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                          Dimensions: H 39 x W 25 x D 30<br>
                          (all dimensions in inches)<br>
                          Warranty: 12 Months' Warranty<br>
                          Assembly: Carpenter Assembly<br>
                          Primary Material: Engineered Wood<br>
                          Room Type: Living Room<br>
                          Height: 39.0 inches<br>
                          Width: 25.0 inches<br>
                          Depth: 30.0 inches<br>

                      </div>

                    </div>
                  </div>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="#whitechairmodal" role="button" data-toggle="modal">
                        <img src="img/bg-img/3.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <!--<p>From $180</p>-->
                            <h4>White Chair</h4>
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="whitechairmodal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 23;


                                      $result = $mysqli->query('SELECT * FROM furniture where id=23');


                                      if($result){

                                        while($obj = $result->fetch_object()) {


                                          echo '<p><strong>'.$obj->product_name. '</p>';

                                          echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
                                           echo "";

                                          echo '<p><strong>Description</strong>: '.$obj->product_description.'</p>';

                                          echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';

                                          echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';


                                          if($obj->qty > 0){
                                            echo '<center><p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #fbb710; border: none; color: #fff; font-size: 1em; padding: 10px; border-radius:5px" /></a></p></center>';
                                          }
                                          else {
                                            echo 'Out Of Stock!';
                                          }

                                        }

                                      }

                                      $_SESSION['product_id'] = 23;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          Dimensions: H 33 x W 19 x D 19<br>
                          (all dimensions in inches)<br>
                          Warranty: 12 Months' Warranty<br>
                          Assembly: Carpenter Assembly<br>
                          Primary Material: Polypropylene (PP)<br>
                          Room Type: Living Room<br>
                          Height: 33.0 inches<br>
                          Width: 19.0 inches<br>
                          Depth: 19.0 inches<br>
                          Seating Height: 18<br>
                      </div>

                    </div>
                  </div>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="#nightstandmodal" role="button" data-toggle="modal">
                        <img src="img/bg-img/4.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <!--<p>From $180</p>-->
                            <h4>Night Stand</h4>
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="nightstandmodal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 24;


                                      $result = $mysqli->query('SELECT * FROM furniture where id=24');


                                      if($result){

                                        while($obj = $result->fetch_object()) {


                                          echo '<p><strong>'.$obj->product_name. '</p>';

                                          echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
                                           echo "";

                                          echo '<p><strong>Description</strong>: '.$obj->product_description.'</p>';

                                          echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';

                                          echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';


                                          if($obj->qty > 0){
                                            echo '<center><p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #fbb710; border: none; color: #fff; font-size: 1em; padding: 10px; border-radius:5px" /></a></p></center>';
                                          }
                                          else {
                                            echo 'Out Of Stock!';
                                          }

                                        }

                                      }

                                      $_SESSION['product_id'] = 24;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                          Dimensions: H 33 x W 19 x D 19<br>
                          (all dimensions in inches)<br>
                          Warranty: 12 Months' Warranty<br>
                          Assembly: Carpenter Assembly<br>
                          Primary Material: Wood<br>
                          Room Type: Any room<br>
                          Height: 23.0 inches<br>
                          Width: 20.0 inches<br>
                          Depth: 17.0 inches<br>

                      </div>

                    </div>
                  </div>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="#coffeemodal" role="button" data-toggle="modal">
                        <img src="img/bg-img/coffeetable.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <!--<p>From $18</p>-->
                            <h4>Coffee Table</h4>
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="coffeemodal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 25;


                                      $result = $mysqli->query('SELECT * FROM furniture where id=25');


                                      if($result){

                                        while($obj = $result->fetch_object()) {


                                          echo '<p><strong>'.$obj->product_name. '</p>';

                                          echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
                                           echo "";

                                          echo '<p><strong>Description</strong>: '.$obj->product_description.'</p>';

                                          echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';

                                          echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';


                                          if($obj->qty > 0){
                                            echo '<center><p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #fbb710; border: none; color: #fff; font-size: 1em; padding: 10px; border-radius:5px" /></a></p></center>';
                                          }
                                          else {
                                            echo 'Out Of Stock!';
                                          }

                                        }

                                      }

                                      $_SESSION['product_id'] = 25;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          Dimensions: H 33 x W 19 x D 19<br>
                          (all dimensions in inches)<br>
                          Pieces: 2 (one big, one small)<br>
                          Warranty: 12 Months' Warranty<br>
                          Assembly: NA<br>
                          Primary Material: Cedar Wood<br>
                          Room Type: Living Room<br>
                          Height: 13.0 inches<br>
                          Width: 20.0 inches<br>
                          Depth: 17.0 inches<br>
                      </div>

                    </div>
                  </div>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="#smalltablemodal" role="button" data-toggle="modal">
                        <img src="img/bg-img/6.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <!--<p>From $320</p>-->
                            <h4>Small Table</h4>
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="smalltablemodal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 26;


                                      $result = $mysqli->query('SELECT * FROM furniture where id=26');


                                      if($result){

                                        while($obj = $result->fetch_object()) {


                                          echo '<p><strong>'.$obj->product_name. '</p>';

                                          echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
                                           echo "";

                                          echo '<p><strong>Description</strong>: '.$obj->product_description.'</p>';

                                          echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';

                                          echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';


                                          if($obj->qty > 0){
                                            echo '<center><p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #fbb710; border: none; color: #fff; font-size: 1em; padding: 10px; border-radius:5px" /></a></p></center>';
                                          }
                                          else {
                                            echo 'Out Of Stock!';
                                          }

                                        }

                                      }

                                      $_SESSION['product_id'] = 26;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          Dimensions: H 33 x W 19 x D 19<br>
                          (all dimensions in inches)<br>
                          Warranty: 12 Months' Warranty<br>
                          Assembly: Carpenter Assembly<br>
                          Primary Material: Wood<br>
                          Room Type: Any room<br>
                          Height: 15.0 inches<br>
                          Width: 20.0 inches<br>
                      </div>

                    </div>
                  </div>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="#metallicmodal" role="button" data-toggle="modal">
                        <img src="img/bg-img/7.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                           <!-- <p>From $318</p>-->
                            <h4>Metallic Chair</h4>
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="metallicmodal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 27;


                                      $result = $mysqli->query('SELECT * FROM furniture where id=27');


                                      if($result){

                                        while($obj = $result->fetch_object()) {


                                          echo '<p><strong>'.$obj->product_name. '</p>';

                                          echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
                                           echo "";

                                          echo '<p><strong>Description</strong>: '.$obj->product_description.'</p>';

                                          echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';

                                          echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';


                                          if($obj->qty > 0){
                                            echo '<center><p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #fbb710; border: none; color: #fff; font-size: 1em; padding: 10px; border-radius:5px" /></a></p></center>';
                                          }
                                          else {
                                            echo 'Out Of Stock!';
                                          }

                                        }

                                      }

                                      $_SESSION['product_id'] = 27;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                          Dimensions: H 33 x W 19 x D 19<br>
                          (all dimensions in inches)<br>
                          Colour: Distress<br>
                          Warranty: 36 Months' Warranty<br>
                          Assembly: Not required<br>
                          Primary Material: Metal<br>
                          Room Type: Living Room<br>
                          Height: 33.0 inches<br>
                          Width: 19.0 inches<br>
                          Depth: 19.0 inches<br>
                          Seating Height: 18<br>
                      </div>

                    </div>
                  </div>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="#rockingmodal" role="button" data-toggle="modal">
                        <img src="img/bg-img/8.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <!--<p>From $318</p>-->
                            <h4>Rocking Chair</h4>
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="rockingmodal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 28;


                                      $result = $mysqli->query('SELECT * FROM furniture where id=28');


                                      if($result){

                                        while($obj = $result->fetch_object()) {


                                          echo '<p><strong>'.$obj->product_name. '</p>';

                                          echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
                                           echo "";

                                          echo '<p><strong>Description</strong>: '.$obj->product_description.'</p>';

                                          echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';

                                          echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';


                                          if($obj->qty > 0){
                                            echo '<center><p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #fbb710; border: none; color: #fff; font-size: 1em; padding: 10px; border-radius:5px" /></a></p></center>';
                                          }
                                          else {
                                            echo 'Out Of Stock!';
                                          }

                                        }

                                      }

                                      $_SESSION['product_id'] = 28;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          Dimensions: H 33 x W 19 x D 19; Seating Height-18<br>
                          (all dimensions in inches)<br>
                          Warranty: 36 Months' Warranty<br>
                          Weight: 9 KG<br>
                          Assembly: Not required<br>
                          Primary Material: Fabric<br>
                          Room Type: Living Room<br>
                          Height: 33.0 inches<br>
                          Width: 19.0 inches<br>
                          Depth: 19.0 inches<br>
                          Seating Height: 18<br>
                      </div>

                    </div>
                  </div>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="#sidetablemodal" role="button" data-toggle="modal">
                        <img src="img/bg-img/sidetable.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <!--<p>From $318</p>-->
                            <h4>Side Table</h4>
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="sidetablemodal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Side Table</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          Dimensions: H 33 x W 19 x D 19<br>
                          (all dimensions in inches)<br>
                          Warranty: 12 Months' Warranty<br>
                          Assembly: Carpenter Assembly<br>
                          Primary Material: Wood<br>
                          Room Type: Any room<br>
                          Height: 15.0 inches<br>
                          Width: 20.0 inches<br>
                      </div>

                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->

    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <!--
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="shop.html">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="product-details.html">Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cart.html">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        -->
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>
