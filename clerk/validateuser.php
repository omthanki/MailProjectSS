<?php

session_start();

if ($_POST['username'] == "clerk@gmail.com" && $_POST['password'] == 'clerk123') {

    $_SESSION['clerk'] = $_POST['username'];
  
    header("Location:clerk/index.php");

} else {
    header("Location:login.php");
}
?>