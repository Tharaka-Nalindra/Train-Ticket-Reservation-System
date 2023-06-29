<?php
//not completed

require '../conn.php';

$merchant_id = $_POST['merchant_id'];
$order_id = $_POST['order_id'];
$payhere_amount = $_POST['payhere_amount'];
$payhere_currency = $_POST['payhere_currency'];
$status_code = $_POST['status_code'];
$md5sig = $_POST['md5sig'];

$merchant_secret = '1219428'; // Replace with your Merchant Secret (Can be found on your PayHere account's Settings page)

$local_md5sig = strtoupper(md5($merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret))));

if (($local_md5sig === $md5sig) and ($status_code == 2)) {
    $ticketID = $_POST['order_id'];

    $sql = "INSERT INTO payments (ticket_id, payment_status) VALUES ('$ticketID', '1')";

    if (mysqli_query($conn, $sql)) {
        header("Location:success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
