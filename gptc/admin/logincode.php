<?php
session_start();
include('config/dbcon.php');

if(isset($_POST['login_btn']))
{
    $uid =  $_POST['uid'];
    $password = $_POST['password'];

    $log_query = "SELECT * FROM users WHERE uname='$uid' AND password='$password' LIMIT 1";
    $log_query_run = mysqli_query($con,$log_query);

    if(mysqli_num_rows($log_query_run)>0)
    {
        foreach($log_query_run as $data)
    
        {
        $user_id= $data['id'];
        $user_name= $data['name'];
        $user_userid= $data['uname'];
        $role=$data['role'];
        }
        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = "$role";//1-admin,
        $_SESSION['auth_user']=[
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'user_userid'=>$user_userid,

        ];
        if($_SESSION['auth_role'] == '1')
        {
        $_SESSION['status']="Logged in successfully";
        header("Location:home.php");
        }
        elseif($_SESSION['auth_role'] == '0')
        {
        $_SESSION['status']="Logged in successfully";
        header("Location:home.php");
        }

    }
    else
    {
        $_SESSION['status']="invalid userid or password";
        header("Location:login.php");
    }
    
}
 else
    {
        $_SESSION['status']="Access Denied";
        header("Location:login.php");

    }
    ?>
