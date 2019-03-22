<?php
session_start();
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/seller.css">
    <script src="../js/seller.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Arvo|Roboto|Sacramento" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <div class="nav">
        <ul class="navbar-container">
            <li><a href="seller_portal.php"><i class="fas fa-seedling"></i>&nbsp Home</a></li>
            <li><a href=""><i class="fas fa-carrot"></i>&nbsp My Items</a></li>
            <li><a class="inactive" href=""><i class="fas fa-user"></i>&nbsp <?php echo " " . $username ?> &nbsp <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-1">
                    <li><a href="">My Wallet</a></li>
                    <li><a href="">Change My Details</a></li>
                    <li><a href="">Change Password</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="main-container">
        <div class="Choice-banner" >
            <p id="top-banner">What would you like to sell?<p>
        </div>
        <div class="Choice-containter" id="choice-wrapper">
            <div class="Choice Fruit">
                <div class="pic" onclick="load_fruit()">
                    <img src="../img/fruit_trans.png">
                </div>
                <div class="about_pic">
                    <p>Fruit</p>
                </div>
            </div>
            <div class="Choice Vegetable">
                <div class="pic" onclick="load_veg()">
                    <img src="../img/vegt.png">
                </div>
                <div class="about_pic">
                    <p>Vegetable</p>
                </div>
            </div>
        </div>
        <div class="Fruit-container" id="fruit-wrapper">
            <button class="back-btn" onclick="back('fruit')">back</button>
            <div class="items">
                
            </div>
        </div>
        <div class="Veg-container" id="veg-wrapper">
            <button class="back-btn" onclick="back('veg')">back</button>
        </div>
    </div>
</body>

</html> 