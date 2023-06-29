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
      header('Location: can2.php?error=1');
      exit();
    }
  }else {
      header('Location: can1.php');
        exit();
  }
}


//if (isset($_POST['next'])) {
 

  $connection = mysqli_connect("localhost", "id17192513_root", "9HNsyalhq&<KyQpg", "id17192513_train_sys");
  $name = $_SESSION['name'];
  $mail = $_SESSION['mail'];

  $query = "SELECT ticket_id,full_name,date_book,time_book FROM persons
          WHERE full_name='$name' AND email='$mail'";

  if ($result = mysqli_query($connection, $query)) {
    $table = "";

    while ($record = mysqli_fetch_assoc($result)) {
      $table .= "<tr><td><input type='checkbox' name='ticket[]' value='{$record['ticket_id']}'></td>";
      $table .= "<td>{$record['full_name']}</td> <td>{$record['date_book']}</td> <td>{$record['time_book']}</td> <td>x</td> <td>x</td>";
      $table .= "</tr>";
    }
  }
//}

if (isset($_POST['cancel'])) {
    $connection = mysqli_connect("localhost", "id17192513_root", "9HNsyalhq&<KyQpg", "id17192513_train_sys");
  $name = $_SESSION['name'];
  $mail = $_SESSION['mail'];

  if (!empty($_POST['ticket'])) {
    foreach ($_POST['ticket'] as $value) {
      $query = "DELETE FROM persons WHERE ticket_id='$value'";
      mysqli_query($connection, $query);
    }
  }
   header('Location: can3.php');
        exit();
  $query = "SELECT ticket_id,full_name,date_book,time_book FROM persons
          WHERE full_name='$name' AND email='$mail'";

  if ($result = mysqli_query($connection, $query)) {
    $table = "";

    while ($record = mysqli_fetch_assoc($result)) {
      $table .= "<tr><td><input type='checkbox' name='ticket[]' value='{$record['ticket_id']}'></td>";
      $table .= "<td>{$record['full_name']}</td> <td>{$record['date_book']}</td> <td>{$record['time_book']}</td> <td>x</td> <td>x</td>";
      $table .= "</tr>";
    }
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: sans-serif;
    }

    .main {
      background-color: #082268;
      width: 100%;
      height: 120px;
      border-radius: 0px 0px 60px 60px;
      color: #EBEBEB;
      position: relative;
    }

    .main img {
      width: 250px;
      height: 125px;
      position: absolute;
      top: 1%;
      left: 5%;
    }

    .main h1 {
      float: left;
      font-size: 220%;
      position: absolute;
      top: 17%;
      left: 39%;
    }

    .main p {
      float: right;
      margin-right: 30px;
      font-size: 20px;
      margin-top: 30px;
    }

    header h1 {
      text-align: center;
      font-size: 220%;
      color: #082268;
      margin-top: 15px;
    }

    section {
      margin-left: 5%;
      margin-right: 5%;
    }

    section a {
      color: #707070;
      font-weight: bold;
      font-size: 120%;
      text-decoration: none;
    }

    section p {
      color: #082268;
      font-weight: bold;
      font-size: 120%;
      margin-top: 10px;
    }

    #hori {
      background-color: #082268;
      width: 100%;
      height: 8px;
      border-radius: 4px;
    }

    table {
      width: 100%;
      position: relative;
      top: 50px;
      border-radius: 30px;
    }

    table,
    th,
    td {
      border: 2px solid #082268;
      border-collapse: collapse;
      padding: 10px;
    }

    th {
      color: #707070;
    }

    th,
    td {
      height: 25px;
      border-radius: 30px;

    }

    #tablehr {
      height: 14px;
      border-radius: 14px;
      padding: 0px;
      background-color: #082268;
    }

    tr td:first-child {
      width: 5px;
    }

    input[type="checkbox"] {
      height: 17px;
      width: 17px;
    }

    input[type="submit"] {
      background-color: #FC9904;
      border: none;
      height: 50px;
      width: 200px;
      color: #EBEBEB;
      font-weight: bold;
      font-size: 120%;
      border-radius: 25px;
      position: absolute;
      top: 87%;
      right: 5%;

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

  <script>
    var x = confirm('Are you sure to Proceed?');
    if(x){
      return true;
    }
    else{
      return false;
    }

  </script>
</head>

<body>

  <div class="main">
    <a href="index.php"><img src="image/logo-main.png" /></a>
    <h1>Sri Lanka Railways</h1>
    <p>Reservation Support Hotline<br>
      011 2 240 222<br>
      011 2 240 333</p>
  </div>


  <header>
    <h1>Ticket Cancellation</h1>
  </header>


  <section>
    <a href="index.php">&lt;&nbsp;&nbsp;&nbsp;Back</a>
    <a href="can1.php?logout=1" class='logout-btn'>Logout</a>
    <p>Reservation Information</p>

    <div id="hori"></div><br>

    <article>
      <form action="#" method="post" onsubmit="return validateForm()">
        <table>
          <tr>
            <th colspan="2">Full Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>From</th>
            <th>To</th>
          </tr>

          <tr>
            <td id="tablehr" colspan="6"></td>
          </tr>

          <?php

          echo $table;
          ?>
        </table>

        <input type="submit" value="Cancel Tickets" name="cancel">
      </form>
      <script>

      </script>
    </article>

  </section>

</body>

</html>