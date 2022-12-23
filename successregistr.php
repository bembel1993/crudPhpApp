<?php

include('sqlconnected.php');

$success = '<div class="alert alert-success" role="alert">
                Connected successfully
                </div>';

echo $success;

//$_POST["id"];
$_POST["name"];
$_POST["email"];
$_POST["password"];
$_POST["passwordconfirm"];

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$passwordconfirm = $_POST["passwordconfirm"];

if ($passwordconfirm === $password) {
    $sql = "INSERT INTO person (name, email, password)
        VALUES ('$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo " Add successfully";
        //open session
        $previous_name = session_name("$name");
        echo "The previous session name was $previous_name<br />";

        header("Location: ex.php");
        exit();
    } else {
        echo "Error add record: " . mysqli_error($conn);
    }
} elseif ($passwordconfirm != $password) {
    echo "Passwords do not match";
    header("Location: registration.html");
    exit();
}
$conn->close();
?>