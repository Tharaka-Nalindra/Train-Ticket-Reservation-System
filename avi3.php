<?php
session_start();
if (!isset($_SESSION['varifiled'])) {
  if (isset($_SESSION['_token'])) {
    $token = $_SESSION['_token'];
    $code = $_POST['code'];

    if ($token == $code) {
      $_SESSION['varifiled'] = true;
      $_SESSION['_token'] = '';
       unset($_SESSION['_token']);
    } else {
      header('Location: avi2.php?error=1');
      exit();
    }
  }else {
      header('Location: avi1.php');
        exit();
  }
}


$name=$_SESSION['name'];
$mail=$_SESSION['mail'];
$connection = mysqli_connect("localhost", "id17192513_root", "9HNsyalhq&<KyQpg", "id17192513_train_sys");
$query = "SELECT full_name,date_book,time_book FROM persons
          WHERE full_name='$name' AND email='$mail'";

$result = mysqli_query($connection,$query);

//if($result){
//  echo "affected rows : ".mysqli_num_rows($result);
//}

$table = "";

while($record=mysqli_fetch_assoc($result)){
    $table.="<tr>";
    $table.="<td>{$record['full_name']}</td><td>{$record['date_book']}</td><td>{$record['time_book']}</td><td>x</td><td>x</td>";
    $table.="</tr>";
}


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body{
      font-family:sans-serif;
    }
    .main{
      background-color: #082268;
      width:100%;
      height:120px;
      border-radius:0px 0px 60px 60px;
      color:#EBEBEB;
      position: relative;
    }
    .main img{
      width:250px;
      height:125px;
      position:absolute;
      top:1%;
      left:5%;
    }
    .main h1{
      float:left;
      font-size: 220%;
      position: absolute;
      top:17%;
      left:39%;
    }
    .main p{
      float:right;
      margin-right: 30px;
      font-size: 20px;
      margin-top: 30px;
    }
    header h1{
      text-align: center;
      font-size: 220%;
      color: #082268;
      margin-top: 15px;
    }
    section{
      margin-left:5%;
      margin-right:5%;
    }
    section a{
      color:#707070;
      font-weight: bold;
      font-size: 120%;
      text-decoration: none;
    }
    section p{
      color: #082268;
      font-weight: bold;
      font-size: 120%;
      margin-top: 10px;
    }
    #hori{
      background-color: #082268;
      width: 100%;
      height: 8px;
      border-radius: 4px;
    }
    table{
      width:100%;
      position: relative;
      top:50px;
      border-radius:30px;
    }
    table,th,td{
      border: 2px solid #082268;
      border-collapse: collapse;
      padding:10px;
    }
    th{
      color:#707070;
    }
    th,td{
      height:25px;
      border-radius:30px;
      
    }
    #tablehr{
      height: 14px;
      border-radius: 14px;
      padding:0px;
      background-color: #082268;
    }
    .logout-btn {
            float: right;
    padding: 10px;
    background-color: #fd3f3f;
    border-radius: 5px;
    padding: 5px 15px;
    font-weight: 100;
    color: white;
    font-size: 17px;
    }
    

  </style>
</head>
<body>

<div class="main">
  <a href="index.php"><img src="image/logo-main.png"/></a>
  <h1>Sri Lanka Railways</h1>
  <p>Reservation Support Hotline<br>
    011 2 240 222<br>
    011 2 240 333</p>
</div>


<header>
  <h1>Checking Availibility Form</h1>
</header>


<section>
  <a href="avi2.php">&lt;&nbsp;&nbsp;&nbsp;Back</a>
  <a href="avi1.php?logout=1" class='logout-btn'>Logout</a>
  <p>Reservation Information</p>

<div id="hori"></div><br>

  <article>
      
    <table>
          <tr>
            <th>Full Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>From</th>
            <th>To</th>
          </tr>

          <tr>
            <td id="tablehr" colspan="5"></td>
          </tr>

          <?php
              echo $table;
          ?>
    </table>

  </article>

</section>

</body>
</html>