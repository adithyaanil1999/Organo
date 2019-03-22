<?php
session_start();
if(isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
}
else
{
    $_SESSION['username'] = "GUEST";
    $username = $_SESSION['username'];
}
include('php/login_script.php');
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
            <li><a href=""><i class="fas fa-seedling"></i>&nbsp Home</a></li>
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
        <div class="Choice-banner">
            <h1>What would you like to sell?</h1>
        </div>
        <div class="Choice-containter">
            <div class="Choice-Fruit">
                <div class="">
                    <a href="#"><img src="img/buyer.png"></a>
                </div>
                <div class="about_pic">
                    <p>Buy</p>
                </div>
            </div>
            <div class="Choice-Vegetable">
            </div>
        </div>
    </div>
</body>

</html> 