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
    echo "<script src='../js/buyer.js'> </script>";
    echo "<script> guest_init(); </script>";
}
// include('../php/seller_portal_script.php');
    echo "<script src='../js/buyer.js'> </script>";
    echo "<script> guest_init(); </script>";
    

?>