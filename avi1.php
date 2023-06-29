<?php 
session_start();
if (isset($_GET['logout'])){
    session_destroy();
    header('Location: avi1.php');
    exit();
}
if (isset($_SESSION['varifiled'])) {
    header('Location: avi3.php');
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/avi1.css">
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
  label{
    color:#082268;
    font-weight:normal;
    font-size: 100%;
    line-height: 2;
  }
  input[type="text"]{
    margin-top:5px;
    margin-left:5%;
    width:30%;
    height:20px;
    border-radius: 10px;
    background-color: #EBEBEB;
  }
  input[type="submit"]{
    background-color: #FC9904;
    border: none;
    height:50px;
    width:100px;
    color: #EBEBEB;
    font-weight: bold;
    font-size: 120%;
    border-radius: 25px;
    position: absolute;
    top:70%;
    right:45%;
  }    

  </style>
</head>
<body>

<div class="main">
  <img src="image/logo-main.png"/>
  <h1>Sri Lanka Railways</h1>
  <p>Reservation Support Hotline<br>
    011 2 240 222<br>
    011 2 240 333</p>
</div>
<header>
  <h1>Checking Availibility Form</h1>
</header>
<section>
  <a href="passengerInfo.php">&lt;&nbsp;&nbsp;&nbsp;Back</a>
  <p>Personal Information</p>
<div id="hori"></div><br>
  <article>
    <form action="avi2.php" method="post">
      <label for="name">Full name of Passenger</label><br>
      <input id="name" type="text" name="name"><br>
      <label for="mail">E mail Address</label><br>
      <input id="mail" type="email" name="mail">
      <input type="submit" value="Next" name="next">
    </form>
  </article>
</section>

</body>
</html>