<?php
session_start();
include('../db/db.php');
$i = $_GET['id'];


$sql = "DELETE FROM USER WHERE id = $i";

if ($con->query($sql) === TRUE) {
    header('location: index.php');
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
?>