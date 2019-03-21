<?php
    session_start();
    unset($_SESSION['error']);
    include('config.php');
    if($_SERVER["REQUEST_METHOD"]==="POST")
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $password=md5($password);
        $query="SELECT username,account_type FROM login_table WHERE username='$username' AND password='$password';";
        $result=mysqli_query($link,$query);
        if($result)
        {
            $row=mysqli_fetch_assoc($result);
            $account_type=$row['account_type'];
            if(mysqli_num_rows($result)!=0)
            {
                unset($_SESSION['error']);
                $_SESSION['username']=$username;
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
                $_SESSION['error']="Invalid Username or Password";
            }
        }
        else
        {
            die('Error:'.mysqli_error($link));
        }
    }

    mysqli_close($link);
?>