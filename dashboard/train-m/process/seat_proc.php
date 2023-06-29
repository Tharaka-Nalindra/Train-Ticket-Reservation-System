
<?php

$Seat_ID = '';
$window = '';
$seat_availability = '';
$class_id = '';
$update = false;
$dbconnect = new mysqli('localhost','root','','train_sys') or die(mysqli_error($dbconnect));

if (isset($_POST['save'])){
    $Seat_ID = $_POST['Seat_ID'];
    $window = $_POST['window'];
    $seat_availability = $_POST['seat_availability'];
    $class_id = $_POST['class_id'];

    $dbconnect->query("INSERT INTO train_sys.seats(seat_id, window_allocation, availability, class_id)
        VALUES('$Seat_ID', '$window', '$seat_availability',$class_id);") or die($dbconnect->error);




}

if(isset($_GET['delete'])){
    $seat_id = $_GET['delete'];
    $dbconnect->query("DELETE FROM train_sys.seats WHERE seat_id='$seat_id'") or die($dbconnect->error);

    $_SESSION['message'] = "Seat data has been Deleted !";
    $_SESSION['msg_type'] = "danger";
    header("location: ../seats.php");

}

if(isset($_GET['edit'])){
    $seat_id = $_GET['edit'];
    $update = true;
     $result = $dbconnect->query("SELECT * FROM train_sys.seats WHERE seat_id='$seat_id'") or die($dbconnect->error);
    while($row = mysqli_fetch_array($result)){
        $Seat_ID = $row['seat_id'];
        $window = $row['window_allocation'];
        $seat_availability = $row['availability'];
        $class_id = $row['class_id'];

    }


}
if (isset($_POST['update'])) {
    $Seat_ID = $_POST['Seat_ID'];
    $window = $_POST['window'];
    $seat_availability = $_POST['seat_availability'];
    $class_id = $_POST['class_id'];
    $dbconnect->query("UPDATE train_sys.seats SET availability='$seat_availability' WHERE seat_id='$Seat_ID'") or die($dbconnect->error);



}



