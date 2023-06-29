<?php
require 'conn.php';
    
    $nic1           = $_POST['nic'];
    $name1           = $_POST['pasname1'];
    $passex1        = $_POST['passex1'];
    $age1           = $_POST['age1']; 
    $name2    = $_POST['pasname2'];
    $name3    = $_POST['passname3'];


    if($conn->connect_error){
        die('Error');
    }else{

    $sql = "INSERT INTO dependents(nic_dep,full_name,gender,over_18) VALUES('$nic1','$name1','$passex1','$age1')";

    if($conn->query($sql)==false){
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    else{
        if($name2!=NULL)
        {
            $nic2           = $_POST['nic2'];
            $passex2        = $_POST['passex2'];
            $age2           = $_POST['age2'];

            $sql2 = "INSERT INTO dependents(nic_dep,full_name,gender,over_18) VALUES('$nic2','$name2','$passex2','$age2')";

            if($conn->query($sql2)==false)
            {
                echo "Error: " . $sql2 . "<br>" . $conn->error;
            }
            else
            {

            if($name3!=NULL)
            {
                $nic3 = $_POST['nic'];
                $passex3 = $_POST['passsex3'];
                $age3 = $_POST['age'];

                $sql3 = "INSERT INTO dependents(nic_dep,full_name,gender,over_18) VALUES('$nic3','$name3','$passex3','$age3')";

                if($conn->query($sql3)==false)
                {
                    echo "Error: " . $sql3 . "<br>" . $conn->error;
                }
                else
                {
                    header("Location: main4.php"); 
                }

            }
            else
            {
                header("Location: main4.php"); 
            }
        }
    }
    else
            {
                header("Location: main4.php"); 
            }
        }
    }
?>