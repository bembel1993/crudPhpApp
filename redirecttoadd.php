<?php

include('sqlconnected.php');

$success = '<div class="alert alert-success" role="alert">
                Connected successfully
                </div>';

echo $success;

//$_POST["id"];
$_POST["firstname"];
$_POST["lastname"];
$_POST["age"];
$_POST["hometown"];
$_POST["job"];

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$age = $_POST["age"];
$hometown = $_POST["hometown"];
$job = $_POST["job"];

$sql = "INSERT INTO user (firstname, lastname, age, hometown, job)
        VALUES ('$firstname', '$lastname', '$age', '$hometown', '$job')";

if (mysqli_query($conn, $sql)) {
    echo " Add successfully";
    header("Location: ex.php");
      exit();
  } else {
    echo "Error add record: " . mysqli_error($conn);
  }
  
$conn->close();
?>