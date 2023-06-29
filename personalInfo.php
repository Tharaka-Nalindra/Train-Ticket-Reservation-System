<?php
require 'conn.php';
?>


<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .cc-img {
        margin: 0 auto;
    }

    .margin{
      margin-top: 10px;
      margin-bottom: 10px;
    }
</style>
</head>

<body>
    <div class="jumbotron jumbotron-fluid main">
        <div class="container">
            <div class="row">
            <div class="col-md-4">
                <img src="image/logo-main.png"/>
            </div>
            <div class="col-md-4">
                <h1>Sri Lanka Railways</h1>
            </div>
            <div class="col-md-4">
                <p>Reservation Support Hotline<br>
                    011 2 240 222<br>
                    011 2 240 333
                </p> 
            </div>
            </div>           
        </div>
      </div>
      
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h3 align="center" class="headwithico"><img src="image/train-station.png" height="30"> Ticket Reservation Form </h3>
              </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary" onclick="location.href=('index.php')">Back</button> <br>
              <h6 style="margin-top: 5px;"> Applicant Personal Information </h6>
              <div class="hori"></div>
              <br>
          </div>
          
          </div>
          <form action="insert.php" method="POST">
          <!-- Full Name -->
          <div class="row">
            <div class="col-md-2">
              <label> Full Name</label>
            </div>
            <div class="col-md-8">
              <input type="text" name="Full_Name">
            </div>
          </div>

          <!-- Address -->

          <div class="row">
            <div class="col-md-2">
              <label> Address</label>
            </div>
            <div class="col-md-3">
              <input type="text" name="addline1" placeholder="Address Line1">
            </div>
            <div class="col-md-3">
              <input type="text" name="addline2" placeholder="Address Line2">
            </div>
            <div class="col-md-2">
              <input type="text" name="city" placeholder="City">
            </div>
            <div class="col-md-2">
              <input type="text" name="state" placeholder="State/Province/Region">
            </div>
          </div>

          <!--Address Line 2 -->

          <div class="row">
            <div class="col-md-2">
              <label></label>
            </div>
            <div class="col-md-3">
              <input type="text" name="zip" placeholder="Zip/Postel Code">
            </div>
          </div>

          <!-- Country -->

          <div class="row">
            <div class="col-md-2">
              <label> Country </label>
            </div>
            <div class="col-md-3">
              <input type="text" name="Country">
            </div>
          </div>

          <!-- Gender -->

          <div class="row">
            <div class="col-md-2">
              <label> Gender </label>
            </div>
            <div class="col-md-3">
              Male <input type="radio" name="sex" value="M" required>
              Female <input type="radio" name="sex" value="F">
            </div>
          </div>

          <!-- NIC/ Passport -->

          <div class="row">
            <div class="col-md-2">
              <label> NIC/ Passport No </label>
            </div>
            <div class="col-md-3">
              <input type="text" name="nic"/>
            </div>
          </div>

          <!-- Contact No -->

          <div class="row">
            <div class="col-md-2">
              <label> Contact No </label>
            </div>
            <div class="col-md-3">
              <input type="text" name="contact"/>
            </div>
          </div>

          <!-- Email -->

          <div class="row">
            <div class="col-md-2">
              <label> Email </label>
            </div>
            <div class="col-md-5">
              <input type="email" name="email"/>
            </div>
          </div>
          
          <!-- Holiday -->

          <div class="row">
            <div class="col-md-4">
              <label> Is this Reservation for Holiday Travelling Purpose ? </label>
            </div>
            <div class="col-md-3">
              <input type="radio" name="Holiday" value="1" required> Yes
              <input type="radio" name="Holiday" value="0"> No
            </div>
          </div>
            
          <!-- Applicant-->

          <div class="row">
            <div class="col-md-4">
              <label> Is this Reservation ONLY FOR APPLICANT ? </label>
            </div>
            <div class="col-md-3">
              <input type="radio" name="Applicant" value="1" required> Yes
              <input type="radio" name="Applicant" value="0"> No
            </div>
          </div>            

          <div class="row" style="margin-bottom: 100px; margin-top: 50px;">
                        <div class="col-xs-12">
                            <center><button class="btn btn-warning btn-md btn-block" style="border-radius: 10px;" type="submit">
                              Next
                            </button></center></form>
                        </div>
            </div>
      </div>



</body>
</html>