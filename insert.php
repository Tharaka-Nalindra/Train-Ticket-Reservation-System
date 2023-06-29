<?php

session_start();

require 'conn.php';

    $name = $_POST['Full_Name'];
    $addline1 = $_POST['addline1'];
    $addline2 = $_POST['addline2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $Country = $_POST['Country'];
    $sex = $_POST['sex'];
    $nic = $_POST['nic'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $Holiday = $_POST['Holiday'];
    $Applicant = $_POST['Applicant'];

    $_SESSION['name'] = $_POST['Full_Name'];
    $_SESSION['addline1'] = $_POST['addline1'];
    $_SESSION['addline2'] = $_POST['addline2'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['zip'] = $_POST['zip'];
    $_SESSION['Country'] = $_POST['Country'];
    $_SESSION['sex'] = $_POST['sex'];
    $_SESSION['nic'] = $_POST['nic'];
    $_SESSION['contact'] = $_POST['contact'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['Holiday'] = $_POST['Holiday'];
    $_SESSION['Applicant'] = $_POST['Applicant'];

    if($conn->connect_error){
        die('Error');
    }else{

    $sql = "INSERT INTO persons(full_name,address1,address2,city,state,zip,country,gender,nic,contact,email,purpose,only_appli)
    VALUES('$name','$addline1','$addline2','$city','$state','$zip','$Country','$sex','$nic','$contact','$email','$Holiday','$Applicant')";

    if($conn->query($sql)==false){
        echo "error".$conn->connect_error;
    }else{
        if($Applicant=='0'){
            header("Location: passengerInfo.php");
        }
        else{
            header("Location: main4.php");
        }
    }
}
?>