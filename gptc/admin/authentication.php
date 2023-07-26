<?php
// error_reporting(E_ALL & ~E_NOTICE);
// if (session_status() !== PHP_SESSION_ACTIVE) {
//     session_start();
// }


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['auth']))
{
    $_SESSION['auth_status']="Login to Access Dashboard";
    header("Location:login.php");
    exit(0);
}

?>