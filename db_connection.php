<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cultural_exchange";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>