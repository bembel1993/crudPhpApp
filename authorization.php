<?php
if (count($_POST) > 0) {
    include('sqlconnected.php');
    echo "Connection succes";
    //$_POST["id"];
    $_POST["email"];
    $_POST["password"];

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * 
        FROM person 
        WHERE email = '$email' AND password = '$password'";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        if (!empty($row)) {
            if ($row['email'] == $email && $row['password'] == $password) {
                session_start();
                $_SESSION['logged_in_user_id'] = $row['id'];
                $_SESSION['logged_in_user_name'] = $row['name'];

                $session = $_SESSION;

                $trueEmail = $row['email'];
                $truePass = $row['password'];

                $isSuccess = 1;
                // mysqli_query($conn, $sql);
                // $previous_name = session_name("$name");
                echo $_SESSION['logged_in_user_id'];
                echo $_SESSION['logged_in_user_name'];
                //  echo "The previous session name was $previous_name<br />";

                header("Location: ex.php");
                exit();
            }
            break;
        }
    }
    if ('' == $email || '' == $password) {
        echo "Empty fields email or password";
        header("Location: login.html");
        exit();
    } elseif ($row['email'] != $email && $row['password'] != $password) {
        echo "Wrong email or password";
        header("Location: login.html");
        exit();
    }
    if ($isSuccess == 0) {
        $message = "Invalid Username or Password!";
        header("Location: login.php");
        exit();
    } else {
        $trueEmail = $row['email'];
        $truePass = $row['password'];

        header("Location: ex.php");
        exit();
    }
} else {
    echo "not found";
    header("Location: login.html");
    exit();
}

$conn->close();
