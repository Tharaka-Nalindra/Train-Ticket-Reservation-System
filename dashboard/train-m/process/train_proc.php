<?php
$train_id = '';
$tr_date = '';
$destination  = '';
$arrive_time = '';
$start_loc = '';
$departure_time = '';
$train_name  = '';
$route  = '';
$availability = '';
$update = false;
$dbconnect = new mysqli('localhost','root','','train_sys') or die(mysqli_error($dbconnect));

if (isset($_POST['save'])){
    $train_id = $_POST['train_id'];
    $tr_date = $_POST['tr_date'];
    $destination = $_POST['destination'];
    $arrive_time = $_POST['arrive_time'];
    $start_loc = $_POST['start_loc'];
    $departure_time = $_POST['departure_time'];
    $train_name = $_POST['train_name'];
    $route = $_POST['route'];
    $availability = $_POST['availability'];


    $dbconnect->query("INSERT INTO train_sys.train(train_id, tr_date,destination,arrive_time,start_loc,
                            departure_time, train_name,route,availability) VALUES('$train_id', '$tr_date', '$destination','$arrive_time','$start_loc','$departure_time','$train_name','$route','$availability');") or die($dbconnect->error);


}

if(isset($_GET['delete'])){
    $train_id = $_GET['delete'];
    $dbconnect->query("DELETE FROM train_sys.train WHERE train_id='$train_id'") or die($dbconnect->error);
    $_SESSION['message'] = "train data has been Deleted !";
    $_SESSION['msg_type'] = "danger";
    header("location: ../train.php");

}

if(isset($_GET['edit'])){
    $train_id = $_GET['edit'];
    $update = true;
    $result = $dbconnect->query("SELECT * FROM train_sys.train WHERE train_id='$train_id'") or die($dbconnect->error);
    /*if (count($result)==1){
        $row = $result->fetch_array();

    }*/
    while($row = mysqli_fetch_array($result)){
        $train_id = $row['train_id'];
        $tr_date = $row['tr_date'];
        $destination = $row['destination'];
        $arrive_time = $row['arrive_time'];
        $start_loc = $row['start_loc'];
        $departure_time = $row['departure_time'];
        $train_name = $row['train_name'];
        $route = $row['route'];
        $availability = $row['availability'];

    }


}
if (isset($_POST['update'])) {
    $train_id = $_POST['train_id'];
    $tr_date = $_POST['tr_date'];
    $destination = $_POST['destination'];
    $arrive_time = $_POST['arrive_time'];
    $start_loc = $_POST['start_loc'];
    $departure_time = $_POST['departure_time'];
    $train_name = $_POST['train_name'];
    $route = $_POST['route'];
    $availability = $_POST['availability'];
    $dbconnect->query("UPDATE train_sys.train SET arrive_time='$arrive_time' , departure_time='$departure_time', availability='$availability' WHERE train_id='$train_id'") or die($dbconnect->error);



}




