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
    <title>Cart</title>

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
                    <li><a href="furnitureamp.php">Furniture</a></li>
                    <li><a href="decoramp.php">Decor</a></li>
                    <?php

                    if(isset($_SESSION['username'])){
                      echo'<li><a href="orders-update.php">Checkout</a></li>';
                      //echo '<li><a href="account.php">My Account</a></li>';
                      echo '<li><a href="logout.php">Log Out</a></li>';
                    }
                    else{
                      echo '<li><a href="login.php">Log In</a></li>';
                      echo '<li><a href="register.php">Register</a></li>';
                    }
                    ?>

                </ul>
            </nav>
            <!-- Button Group -->



        </header>
        <!-- Header Area End -->

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Shopping Cart</h2>
                        </div>
                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody >


                        
<?php
                        if(isset($_SESSION['cart'])) {

          $total = 0;
        
          
          foreach($_SESSION['cart'] as $product_id => $quantity) {

          $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);


          if($result){

            while($obj = $result->fetch_object()) {
              $cost = $obj->price * $quantity; //work out the line cost
              $total = $total + $cost; //add to the total cost
              
                echo "    <tr >
                                        <td style='margin-right:5px;' class='cart_product_img'>
                                            <a href='#''><img src='img/bg-img/cart1.jpg' alt='Product'></a>
                                        </td>
                                        <td style='margin-right:5px;'  class='cart_product_desc'>
                                            <h5>$obj->product_name</h5>
                                        </td>
                                        <td class='price'>
                                            <span>$cost</span>
                                        </td>
                                        <td class='qty'>
                                            <div class='qty-btn d-flex'>
                                                <p>Qty</p>
                                                <div class='quantity'>
                                                    <span class='qty-minus' onclick='var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;'><i class='fa fa-minus aria-hidden='true'></i></span>
                                                    <input type='number' class='qty-text' id='qty' step='1' min='1' max='300' name='quantity' value='1'>
                                                    <span class='qty-plus' onclick='var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;'><i class='fa fa-plus' aria-hidden='true'></i></span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                     
                                    ";
              
            
            } 
          }

        }
        echo "</tbody>
                            </table>
                        </div>
                    </div>
         <div class='col-12 col-lg-4'>
                        <div class='cart-summary'>
                            <h5>Cart Total</h5>
                            <ul class='summary-table'>
                                <li><span>subtotal:</span> <span>$total</span></li>
                                <li><span>delivery:</span> <span>Free</span></li>
                                <li><span>total:</span> <span>$total</span></li>
                            </ul>
                   
                            <div class='cart-btn mt-100'>";
                            if(isset($_SESSION['username'])) {
          echo " <a href='orders-update.php' class='btn amado-btn w-100'>Checkout</a>";
        }

        else {
          echo "<a href='login.php'><button style='float:right;' class= 'btn amado-btn w-100'>Login</button></a>";
        }

                               
                            
         echo"           </div>  
                        </div>
                    </div>
      ";

        
       echo "<td colspan='4' align='right'><a href='update-cart.php?action=empty' class='btn amado-btn w-40'>Empty Cart</a>&nbsp;<a href='furnitureamp.php' class='btn amado-btn w-40'>Continue Shopping</a>";
        

        echo '</td>';

        echo '</tr>';
        echo '</table>';
      }

      else {
        echo "You have no items in your shopping cart.<br><br>";
      }





        echo '</div>';
        echo '</div>';
        ?>
    </tbody>


                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

</table>
</div>
</div>
</div>
</div>
</div>
</div>


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
