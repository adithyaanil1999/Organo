<?php
    session_start();
    $username=$_SESSION['username'];
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
            <li><a href=""><i class="fas fa-seedling"></i> Home</a></li>
            <li><a href=""><i class="fas fa-carrot"></i> My Items</a></li>
            <li><a class="inactive" href=""><i class="fas fa-user"></i><?php echo " ".$username ?> <i class="fas fa-chevron-down"></i></a>
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
    </div>
</body>
</html>

<!-- id="dropdown_wrapper" -->