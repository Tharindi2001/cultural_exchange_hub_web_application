<?php
include('db_connection.php');

if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } else {

        if (strlen($password) < 6) {
            echo "Password must be at least 6 characters long";
        } else {
            $sql = "INSERT INTO user (email, password) VALUES ('$email', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                header("Location: Signin.html");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}

// $conn->close();
?>