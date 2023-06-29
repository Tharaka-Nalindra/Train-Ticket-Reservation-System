<?php

require '../conn.php';

if (isset($_GET['order_id'])) {

    $ticketID = $_GET['order_id'];

    $sql = "INSERT INTO payments (ticket_id, payment_status) VALUES ('$ticketID', '1')";

    if (mysqli_query($conn, $sql)) {
        header("Location:success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
} 
