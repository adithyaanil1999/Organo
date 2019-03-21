<?php
    session_start();
    unset($_SESSION['error']);
    include('config.php');
    if($_SERVER["REQUEST_METHOD"]==="POST")
    {
        $name=$_POST['name'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $state=$_POST['state'];
        $district=$_POST['district'];
        $account_type=$_POST['type'];

        $query="INSERT INTO user_table(user_type,user_name,user_email,user_age,user_state,user_district) VALUES('$account_type','$name','$email','$age','$state','$district');";
        $result=mysqli_query($link,$query);
        if($result)
        {

            if($account_type==='S')
            {
                header('Location: seller_portal.php');
            }
            else
            {
                header('Location: buyer_portal.php');
            }
        }
        else
        {
            die('Error'.mysqli_error($link));
        }

    }
    mysqli_close($link);
?>