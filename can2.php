<?php

require 'sendEmails.php';
session_start();

if (isset($_SESSION['varifiled'])) {
    header('Location: can3.php');
    exit();
}


if (isset($_POST['next']) and !isset($_SESSION['_token'])) {
//if (isset($_POST['next'])) {
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['mail'] = $_POST['mail'];
  $_SESSION['_token'] = rand(1000, 9999);

  sendOTPEmail($_SESSION['mail'], $_SESSION['_token']);
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

    form p {
      color: #082268;
      font-weight: normal;
      font-size: 120%;
      line-height: 2;
      text-align: center;
    }
input[type="text"]:focus-visible {
    outline:0;
}
    input[type="text"] {
    position: absolute;
    margin-top: 5px;
    margin-left: 32%;
    width: 25%;
    height: 80px;
    border-radius: 34px;
    background-color: #EBEBEB;
    font-size: 50px;
    text-align: center;
    font-weight: bold;
    letter-spacing: 20px;
    padding-left:16px;
}

    input[type="submit"] {
      background-color: #FC9904;
      border: none;
      height: 50px;
      width: 100px;
      color: #EBEBEB;
      font-weight: bold;
      font-size: 120%;
      border-radius: 25px;
      position: absolute;
      top: 70%;
      right: 33.5%;
    }

    input[type="button"] {
      background-color: #FC9904;
      border: none;
      height: 50px;
      width: 100px;
      color: #EBEBEB;
      font-weight: bold;
      font-size: 120%;
      border-radius: 25px;
      position: absolute;
      top: 70%;
      left: 33%;
    }
  </style>
</head>

<body>

  <div class="main">
    <img src="image/logo-main.png" />
    <h1>Sri Lanka Railways</h1>
    <p>Reservation Support Hotline<br>
      011 2 240 222<br>
      011 2 240 333</p>
  </div>
  <header>
    <h1>Ticket Cancellation</h1>
  </header>
  <section>
    <a href="can1.php">&lt;&nbsp;&nbsp;&nbsp;Back</a>
    <p>E mail Verification</p>
    <div id="hori"></div><br>
    <article>
      <form action="can3.php" method="post">
        <p>Check Your E mail address and Enter the code below</p>
        <?php if (isset($_GET['error'])){?>
            <h2 class='text-danger' style="text-align:center;    color: #ff3939;"> Invalid OTP </h2>
        <?php } ?>
        <input id="code" name="code" type="text" placeholder="****"><br>
        <input type="button" value="Resend">
        <input type="submit" value="Next" name="next">
      </form>
    </article>
  </section>

</body>

</html>