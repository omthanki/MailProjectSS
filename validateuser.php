<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin@gmail.com" && $password == 'admin123') {
    $_SESSION['admin'] = $username;
  
    header("Location:admin/");

} else if($username == "clerk@gmail.com" && $password == 'clerk123'){
    $_SESSION['clerk'] = $username;
  
    header("Location:clerk/");
}
else{
    header("Location:login.php");
}
?>