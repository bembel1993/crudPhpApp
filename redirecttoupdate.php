<?php

include('sqlconnected.php');

$success = '<div class="alert alert-success" role="alert">
                Connected successfully
                </div>';

echo $success;

$_POST["id"];
$_POST["firstname"];
$_POST["lastname"];
$_POST["age"];
$_POST["hometown"];
$_POST["job"];

$id = $_POST["id"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$age = $_POST["age"];
$hometown = $_POST["hometown"];
$job = $_POST["job"];

$sql = "UPDATE user 
        SET firstname = '$firstname', lastname = '$lastname', age = '$age', 
        hometown = '$hometown', job = '$job' 
        WHERE id = '$id'";

 if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
  header("Location: ex.php");
    exit();
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
$conn->close();
?>