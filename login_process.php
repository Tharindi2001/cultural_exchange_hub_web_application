<?php
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate user input (you should perform more thorough validation)
    if (empty($email) || empty($password)) {
        echo "Please fill in both email and password.";
    } else {
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Perform authentication
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Authentication successful, redirect to a welcome page
            header("Location: index.html");
            exit();
        } else {
            // Authentication failed, display an error message
            echo "Invalid email or password. Please try again.";
        }

        // Close the database connection
        // $conn->close();
    }
}
