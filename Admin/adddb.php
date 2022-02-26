<?php
session_start();
include('../db/db.php');

$email = $_POST['email'];
$sql = "INSERT INTO USER(mail) VALUES('$email')";

if ($con->query($sql) === TRUE) {
  header('location:index.php');  
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
  


?>