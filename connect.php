<?php

$s = "localhost";
$u = "root";
$p = "";
$d = "train_sys";

$connection = mysqli_connect($s, $u, $p, $d);

if($connection -> connect_error){
	die("connection error");
}else{
//echo " ";
}



?>