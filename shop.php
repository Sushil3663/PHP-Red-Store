<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
// print_r($_POST['product_id']);
if(isset($_SESSION['cart'])){

    $item_array_id = array_column($_SESSION['cart'], "product_id");

    if(in_array($_POST['product_id'], $item_array_id)){
        echo "<script>alert('Product is already added in the cart..!')</script>";
        echo "<script>window.location = 'shop.php'</script>";
    }else{

        $count = count($_SESSION['cart']);
        $item_array = array(
            'product_id' => $_POST['product_id']
        );

        $_SESSION['cart'][$count] = $item_array;
    }

}else{

    $item_array = array(
            'product_id' => $_POST['product_id']
    );

   // Create new session variable
    $_SESSION['cart'][0] = $item_array;
    print_r($_SESSION['cart']);
 }
 }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Store</title>
   
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/0ee3a01dbb.js"></script>

    <!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">
</head>
<body>

<section id="header">
    <a href="#"><img src="E IMAGE/logo.png" class="logo" alt="logo"></a>

    <div>
        <ul id="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li id="bag"><a href="cart.php"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
            <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            <li><a href="logout.php">Logout</a></li>
        </ul>

    </div>
    <div id="mobile">
        <a href="cart.html"><i class="fa-solid fa-cart-arrow-down"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

<section id="page">
     <h2>Get Gadget At Home</h2>
     <P>Save More With Coppons and upto 10% off!</P>
</section>


  
<div class="container">
    <div class="row text-center py-5">
        <?php
            $result = $database->getData();
            while ($row = mysqli_fetch_assoc($result)){
                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
            }
        ?>
    </div>
</div>



<section id="product1" class="section-p1">
    <h2>View More</h2>
    <p>Electronic Gadget on Sell</p>
    <div class="pro-container">
        <div class="pro">
            <img src="E IMAGE/eyerphone4.png" alt="">
            <div class="des">
                <span>Eyerphone</span>
                <h5>Brand New Eyerphone</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$80</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
        </div>

        <div class="pro">
            <img src="E IMAGE/Headphone2.png" alt="">
            <div class="des">
                <span>Headphone</span>
                <h5>Brand New Headphone</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$90</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
        </div>

        <div class="pro">
            <img src="E IMAGE/iphone2.png" alt="">
            <div class="des">
                <span>I-Phone 12 pro max</span>
                <h5>New color Available</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$1100</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
        </div>

        <div class="pro">
            <img src="E IMAGE/mouse2.png" alt="">
            <div class="des">
                <span>RGB Mouse</span>
                <h5>New Brand arrival</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$70</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
        </div>

        <div class="pro">
            <img src="E IMAGE/key3.png" alt="">
            <div class="des">
                <span> RGB Keyboard</span>
                <h5>NEw Color Available</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$60</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
        </div>

        <div class="pro">
            <img src="E IMAGE/laptop4.png" alt="">
            <div class="des">
                <span>Dell Laptop</span>
                <h5>New Arrival</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$800</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
        </div>

        <div class="pro">
            <img src="E IMAGE/samsung3.png" alt="">
            <div class="des">
                <span>F32</span>
                <h5>New Arrival</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$200</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
        </div>

      

        <div class="pro">
            <img src="E IMAGE/hp3.png" alt="">
            <div class="des">
                <span>HP Laptop</span>
                <h5>Available Now</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$900</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
        </div>

        <div class="pro">
            <img src="E IMAGE/watch1.png" alt="">
            <div class="des">
                <span>Smart Watch</span>
                <h5>Shop Here</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$100</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
        </div>

    
        

       


</section>



<footer class="section-p1">
    <div class="col">
        <img class="logo" src="E IMAGE/logo.png" alt="This is logo">
        <h4><b>Contact</b></h4>
        <p><strong>Address:</strong>Kathmandu,Koteshwor-Narephat-5</p>
        <p><strong>Phone:</strong>014-547-248, 9619589661</p>
        <p><strong>Hours:</strong>9:00 - 8:00, Sun - Fri</p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>

    <div class="col">
        <h4><b>About</b></h4>
        <a href="#">About Us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms and Condition</a>
        <a href="#">Contact Us</a>
    </div>

    
    <div class="col">
        <h4><b>My Account</b></h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track my Order</a>
        <a href="#">Help</a>
    </div>

    <div class="col install">
        <h4><b>Install App</b></h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="img/pay/app.jpg" alt="App">
            <img src="img/pay/play.jpg" alt="play">
        </div>
        <p>Secure Payment Gateways</p>
        <img src="img/pay/pay.png" alt="">

    </div>
    <div class="copyright">
        <p>@ 2022, Wisdom,KTM - Red Store E-Gadget Website </p>
    </div>
</footer>

<script src="script.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>







