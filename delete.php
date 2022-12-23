<?php
    include('sqlconnected.php');

    $id=$_GET['id'];
    
    $sql = "DELETE FROM user WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
      header("Location: showallhuman.php");
    } else {
      echo "Error deleting record: " . $conn->error;
    }
?>