<?php
include('db_connection.php');

if (isset($_POST['pay'])) {

    $item = $_GET['item'];
    $qty = $_GET['qty'];
    $unit_price = $_GET['unit_price'];
    $total_price = $unit_price * $qty;


    $sql = "INSERT INTO orders (item, qty, unit_price, total_price) VALUES ('$item', '$qty', '$unit_price', '$total_price')";

    if ($conn->query($sql) === TRUE) {
        // echo "Order places successfully";
        header("Location: artisan marketplace Main page.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}

// $conn->close();
?>