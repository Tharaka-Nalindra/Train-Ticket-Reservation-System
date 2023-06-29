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
                <button type="button" class="btn btn-primary" onclick="location.href=('personalInfo.php')">Back</button> <br><br>
                <h6 style="margin-top: 5px;">Applicant Passenger Information</h6>
                <div class="hori"></div>
                <h6 style="margin-top: 5px;">Exclude Application</h6><br>
              </div>
          </div>
          
          <!-- Row1 -->
          <form action="insert2.php" method="POST">
          <div class="row">
              <div class="col-md-5 d-none d-md-block">
                  <label>Name of the Passengers</label>
                  <input type="text" name="pasname1" required>
              </div>
              <div class="col-md-2 d-none d-md-block">
                  <label>Gender</label><br>
                  <input type="radio" name="passex1" value="M" required>Male
                  <input type="radio" name="passex1" value="F">Female
              </div>
              <div class="col-md-2 d-none d-md-block">
                <label>Age</label><br>
                <input type="radio" name="age1" value="0" required> Under 16
                <input type="radio" name="age1" value="1"> Over 16
            </div>
            <div class="col-md-3 d-none d-md-block">
                <label>NIC/ Passport No</label><br>
                <input type="text" name="nic">
            </div>
            
            <!-- Hide Larger Only -->
            <div class="col-md-5 d-md-none d-sm-block">
                <label>Name of the Passengers</label>
                <input type="text" name="pasname2">
            </div>
            <div class="col-md-5 d-md-none d-sm-block">
                <label>Gender</label><br>
                  <input type="radio" name="passex2" value="M">Male
                  <input type="radio" name="passex2" value="F">Female
            </div>
            <div class="col-md-5 d-md-none d-sm-block">
                <label>Age</label><br>
                <input type="radio" name="age2" value="N"> Under 16
                <input type="radio" name="age2" value="Y"> Over 16
            </div>
            <div class="col-md-5 d-md-none d-sm-block">
                <label>NIC/ Passport No</label><br>
                <input type="text" name="nic2">
            </div>
            <div class="col-md-5 d-md-none d-sm-block">
                <hr>
            </div> 
          </div>

          <!-- Row 2 -->

          <div class="row">
            
            <div class="col-md-5 d-none d-md-block">
                
                <input type="text" name="pasname2">
            </div>
            <div class="col-md-2 d-none d-md-block">
                
                <input type="radio" name="passex2" value="M">Male
                <input type="radio" name="passex2" value="F">Female
            </div>
            <div class="col-md-2 d-none d-md-block">
              
              <input type="radio" name="age2" value="N"> Under 16
              <input type="radio" name="age2" value="Y"> Over 16
          </div>
          <div class="col-md-3 d-none d-md-block">
              
              <input type="text" name="nic2">
          </div>
          
          <!-- Hide Larger Only -->
            <div class="col-md-5 d-md-none d-sm-block">
                <label>Name of the Passengers</label>
                <input type="text" name="pasname3">
            </div>
            <div class="col-md-5 d-md-none d-sm-block">
                <label>Gender</label><br>
                <input type="radio" name="passex1" value="M">Male
                <input type="radio" name="passex1" value="F">Female
            </div>
            <div class="col-md-5 d-md-none d-sm-block">
                <label>Age</label><br>
                <input type="radio" name="age1" value="N"> Under 16
                <input type="radio" name="age1" value="Y"> Over 16
            </div>
            <div class="col-md-5 d-md-none d-sm-block">
                <label>NIC/ Passport No</label><br>
                <input type="text" name="nic1">
            </div>
            <div class="col-md-5 d-md-none d-sm-block">
                <hr>
            </div> 

        </div>

        <!-- Row 3 -->

        <div class="row">
            
            <div class="col-md-5 d-none d-md-block">
                
                <input type="text" name="passname3">
            </div>
            <div class="col-md-2 d-none d-md-block">
                
                <input type="radio" name="passsex3" value="M">Male
                <input type="radio" name="passsex3" value="F">Female
            </div>
            <div class="col-md-2 d-none d-md-block">
              
              <input type="radio" name="age" value="N"> Under 16
              <input type="radio" name="age" value="Y"> Over 16
          </div>
          <div class="col-md-3 d-none d-md-block">
              
              <input type="text" name="nic">
          </div>
          
          <!-- Hide Larger Only -->
            <div class="col-md-5 d-md-none d-sm-block">
                <label>Name of the Passengers</label>
                <input type="text" name="pasname3">
            </div>
            <div class="col-md-5 d-md-none d-sm-block">
                <label>Gender</label><br>
                <input type="radio" name="passex3" value="M">Male
                <input type="radio" name="passex3" value="F">Female
            </div>
            <div class="col-md-5 d-md-none d-sm-block">
                <label>Age</label><br>
                <input type="radio" name="age3" value="N"> Under 16
                <input type="radio" name="age3" value="Y"> Over 16
            </div>
            <div class="col-md-5 d-md-none d-sm-block">
                <label>NIC/ Passport No</label><br>
                <input type="text" name="nic3">
            </div>
            <div class="col-md-5 d-md-none d-sm-block">
                <hr>
            </div> 

        </div>

            
          <div class="row" style="margin-bottom: 100px; margin-top: 50px;">
                        <div class="col-xs-12 col-md-12">
                            <center><button class="btn btn-warning btn-md btn-block" style="border-radius: 10px;" type="submit">Next</button></center>
                        </div>
            </div></form>

      </div>



</body>
</html>