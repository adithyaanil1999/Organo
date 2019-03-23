<?php
    
    include('config.php');
    $message = "";
    $p_type = $_POST['item-type'];
    $p_user = $_SESSION['username'];
    $p_status = 'LISTED';
    $p_weight = $_POST['amount'];
    $p_pricePkg = $_POST['price'];


    echo json_encode($message);
    //echo  "<script>console.log('$p_type');</script>";
?>