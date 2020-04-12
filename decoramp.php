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
    <title>AMP - Online Furniture Store | Decor</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                    <li><a href="furnitureamp.php">Furniture</a></li>
                    <li class="active"><a href="decoramp.php">Decor</a></li>
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

                <!-- Single Catagory1 -->
                <div class="single-products-catagory clearfix">
                    <a href="#candlemodal" role="button" data-toggle="modal">
                        <img src="img/bg-img/Candlestand.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                             <h4>Candle Stand</h4>
                           
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="candlemodal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"> <?php

                                      $product_id = 1;


                                      $result = $mysqli->query('SELECT * FROM decor where id=1');


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

                                      $_SESSION['product_id'] = 1;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          Material: Metal<br>
                          Dimensions: Length: 3.5, Width: 3.5, Height: 3 Inches<br>
                          Weight: 200 Grams<br>
                          Colour: Golden<br>
                          Pack Content: 2 Decorative Candle Stands<br>
                      </div>
                      <div class="modal-footer">
                        <!--<button type="button" class="btn btn-primary" style = "background-color: #fbb710 !important; border-color: #fbb710">Add to Cart</button>
                      --></div>
                    </div>
                  </div>
                </div>

                <!-- Single Catagory2 -->
                <div class="single-products-catagory clearfix">
                    <a href="#minpotplant" role="button" data-toggle="modal">
                        <img src="img/bg-img/2.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <h4>Minimalistic Plant Pot</h4>
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="minpotplant" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 1;


                                      $result = $mysqli->query('SELECT * FROM decor where id=2');


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

                                      $_SESSION['product_id'] = 1;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          Material: Ceramic<br>
                          Dimensions: Length: 3.5, Width: 3.5, Height: 3 Inches<br>
                          Weight: 200 Grams<br>
                          Colour: White<br>
                          Pack Content: 1 Decorative Planter<br>
                      </div>
                      <div class="modal-footer">
                        
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Single Catagory3 -->
                <div class="single-products-catagory clearfix">
                    <a href="#ceramiccactus" role="button" data-toggle="modal">
                        <img src="img/bg-img/cactus.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <h4>Ceramic Cactus</h4>
                         
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="ceramiccactus" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 1;


                                      $result = $mysqli->query('SELECT * FROM decor where id=3');


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

                                      $_SESSION['product_id'] = 1;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          Material: Ceramic<br>
                          Dimensions: Length: 3.5, Width: 3.5, Height: 3 Inches<br>
                          Weight: 200 Grams<br>
                          Colour: Green<br>
                          Pack Content: 1 Decorative Plant<br>
                      </div>
                      <div class="modal-footer">
                        
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Single Catagory 4-->
                <div class="single-products-catagory clearfix">
                    <a href="#plantpottermodal" role="button" data-toggle="modal">
                        <img src="img/bg-img/4.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <h4>Plant Potter</h4>
                            
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="plantpottermodal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 1;


                                      $result = $mysqli->query('SELECT * FROM decor where id=6');


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

                                      $_SESSION['product_id'] = 1;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          Material: Ceramic<br>
                          Dimensions: Length: 3.5, Width: 3.5, Height: 3 Inches<br>
                          Weight: 200 Grams<br>
                          Colour: Blue<br>
                          Pack Content: 1 Decorative Planter<br>
                      </div>
                      <div class="modal-footer">
                        
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Single Catagory 5-->
                <div class="single-products-catagory clearfix">
                    <a href="#plantpot" role="button" data-toggle="modal">
                        <img src="img/bg-img/5.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <h4>Plant Pot</h4>
                            
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="plantpot" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 1;


                                      $result = $mysqli->query('SELECT * FROM decor where id=4');


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

                                      $_SESSION['product_id'] = 1;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          Material: Ceramic<br>
                          Dimensions: Length: 3.5, Width: 3.5, Height: 3 Inches<br>
                          Weight: 200 Grams<br>
                          Colour: Blue<br>
                          Pack Content: 1 Decorative Planter<br>
                      </div>
                      <div class="modal-footer">
                      
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Single Catagory 6-->
                <div class="single-products-catagory clearfix">
                    <a href="#minitreemodal" role="button" data-toggle="modal">
                        <img src="img/bg-img/minichristmas.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <h4>Mini Tree</h4>
                            
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="minitreemodal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 1;


                                      $result = $mysqli->query('SELECT * FROM decor where id=5');


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

                                      $_SESSION['product_id'] = 1;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          Material: Mixed<br>
                          Dimensions: Length: 3.5, Width: 3.5, Height: 3 Inches<br>
                          Weight: 200 Grams<br>
                          Colour: Green<br>
                          Pack Content: 1 Decorative Christmas Tree<br>
                      </div>
                      <div class="modal-footer">
                      
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Single Catagory 7 -->
                <div class="single-products-catagory clearfix">
                    <a href="#talllampmodal" role="button" data-toggle="modal">
                        <img src="img/bg-img/talllamp.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <h4>Tall Lamp</h4>
                           
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="talllampmodal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 1;


                                      $result = $mysqli->query('SELECT * FROM decor where id=9');


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

                                      $_SESSION['product_id'] = 1;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          Material: Metal<br>
                          Dimensions: Length: 3.5, Width: 3.5, Height: 3 Inches<br>
                          Weight: 200 Grams<br>
                          Colour: Silver<br>
                          Pack Content: 1 Tall Lamp<br>
                      </div>
                      <div class="modal-footer">
                        
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Single Catagory8 -->
                <div class="single-products-catagory clearfix">
                    <a href="#wallhang" role="button" data-toggle="modal">
                        <img src="img/bg-img/triangle.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <h4>Wall Hanging</h4>
                            
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="wallhang" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 1;


                                      $result = $mysqli->query('SELECT * FROM decor where id=7');


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

                                      $_SESSION['product_id'] = 1;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          Material: Plastic<br>
                          Dimensions: Length: 3.5, Width: 3.5, Height: 3 Inches<br>
                          Weight: 200 Grams<br>
                          Colour: White<br>
                      </div>
                      <div class="modal-footer">
                      
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Single Catagory 9-->
                <div class="single-products-catagory clearfix">
                    <a href="#homedecomodal" role="button" data-toggle="modal">
                        <img src="img/bg-img/9.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <h4>Home Deco</h4>
                            
                        </div>
                    </a>
                </div>

                <div class="modal fade" id="homedecomodal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php

                                      $product_id = 1;


                                      $result = $mysqli->query('SELECT * FROM decor where id=8');


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

                                      $_SESSION['product_id'] = 1;




                                      ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          Material: Plastic<br>
                          Dimensions: Length: 3.5, Width: 3.5, Height: 3 Inches<br>
                          Weight: 200 Grams<br>
                          Colour: White<br>
                      </div>
                      <div class="modal-footer">
                        
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/jquery/jquery-2.2.4.min.js"></script>

    <!-- Popper js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>


</body>

</html>
