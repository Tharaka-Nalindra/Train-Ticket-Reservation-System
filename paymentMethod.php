<?php
session_start();

$_SESSION['train_id'] = $_POST['train_id'];
$count=0;
if(isset($_POST['per1_seat'])){
  $_SESSION['name1'] = $_POST['name1'];
  $_SESSION['per1_seat'] = $_POST['per1_seat'];
  $count++;
}

if(isset($_POST['per2_seat'])){
  $_SESSION['name2'] = $_POST['name2'];
  $_SESSION['per2_seat'] = $_POST['per2_seat'];
  $count++;
}
if(isset($_POST['per3_seat'])){
  $_SESSION['name3'] = $_POST['name3'];
  $_SESSION['per3_seat'] = $_POST['per3_seat'];
  $count++;
}
if(isset($_POST['per4_seat'])){
  $_SESSION['name4'] = $_POST['name4'];
  $_SESSION['per4_seat'] = $_POST['per4_seat'];
  $count++;
}
$_SESSION['price'] = $_POST['price']*$count;
//$_SESSION['email'] = $_POST['email'];

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

    .payment_background {
      background-color: LightGray;
      border-radius: 30px;
      color: #082268;
    }

    .rowmargin {
      margin-right: 10px;
      margin-left: 10px;
      margin-bottom: 10px;
      margin-top: 10px;
    }

    .ml-10 {
      margin-left: 10px !important;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"] {
      width: 100% !important;
    }
  </style>
</head>

<body>
  <div class="jumbotron jumbotron-fluid main">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="image/logo-main.png" />
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
        <button type="button" class="btn btn-primary">Back</button> <br><br>
        <h6 style="margin-top: 5px;">Payment</h6>
        <div class="hori"></div>
        <h6 style="margin-top: 5px;">Please Check Ticket and Passenger Details</h6><br>
      </div>
    </div>

    <div>
      <form method="post" action="https://sandbox.payhere.lk/pay/checkout">
        <input type="hidden" name="merchant_id" value="1219428"> <!-- Replace your Merchant ID -->
        <input type="hidden" name="return_url" value="http://localhost/Train-Ticket-Reservation-System-admin/payment/payment-success.php">
        <input type="hidden" name="cancel_url" value="http://localhost/Train-Ticket-Reservation-System-admin/payment/cancel.php">
        <input type="hidden" name="notify_url" value="http://localhost/Train-Ticket-Reservation-System-admin/payment/notify.php">
        <input type="hidden" name="currency" value="LKR">
        <input type="hidden" name="country" value="Sri Lanka">
        <div class="mb-3 fw-bold fs-6">Ticket Details</div>
        <div class="row">
          <div class="col">
            <div class="input-group mb-2 row">
              <div class="col-md-2">
                <label for="ticketID">Train ID </label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ml-10" placeholder="Train ID" aria-label="Train ID" id="trainID" name="order_id" value=<?php echo($_SESSION['train_id'])?>  required>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="input-group mb-3 row">
              <div class="col-md-2">
                <label for="fromTo">From - To </label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ml-10" placeholder="From - To" aria-label="From - To" id="fromTo" name="items" value="Kandy - Galle" required>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="input-group mb-2 row">
              <div class="col-md-2">
                <label for="date">Date </label>
              </div>
              <div class="col-md-10">
                <input type="date" class="form-control ml-10" placeholder="Date" aria-label="Date" id="date" name="date" value="2021-12-07" required>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="input-group mb-3 row">
              <div class="col-md-2">
                <label for="price">Price </label>
                <label for="price" class="float-end">(Rs.) </label>
              </div>
              <div class="col-md-10">

                <input type="text" class="form-control ml-10" placeholder="Price" aria-label="Price" id="price" name="amount" value= <?php echo($_SESSION['price'])?> required>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4 mb-3 fw-bold fs-6">Passenger Details</div>
        <div class="row">
          <div class="col">
            <div class="input-group mb-2 row">
              <div class="col-md-2">
                <label for="passFName">First Name </label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ml-10" placeholder="First Name" aria-label="First Name" id="passFName" name="first_name" value="fathima" required>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="input-group mb-3 row">
              <div class="col-md-2">
                <label for="passLName">Last Name </label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ml-10" placeholder="Last Name" aria-label="Last Name" id="passLName" name="last_name" value="Munshira" required>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="input-group mb-2 row">
              <div class="col-md-2">
                <label for="email">Email </label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ml-10" placeholder="Email" aria-label="Email" id="email" name="email" value= <?php echo($_SESSION['email'])?>  required>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="input-group mb-3 row">
              <div class="col-md-2">
                <label for="phone">Phone </label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ml-10" placeholder="Phone" aria-label="Phone" id="phone" name="phone" value=<?php echo($_SESSION['contact'])?> required>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="input-group mb-2 row">
              <div class="col-md-2">
                <label for="address">Address </label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ml-10" placeholder="Address" aria-label="Address" id="address" name="address" value=<?php echo($_SESSION['addline1'])?> required>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="input-group mb-3 row">
              <div class="col-md-2">
                <label for="city">City </label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ml-10" placeholder="City" aria-label="City" id="city" name="city" value=<?php echo($_SESSION['city'])?> required>
              </div>
            </div>
          </div>
        </div>
        <input type="submit" style="width:120px;" class="btn btn-success float-end mt-2 mb-4" value="PROCEED">
      </form>
    </div>

    <form method="post" action="https://sandbox.payhere.lk/pay/checkout">
      <!-- <input type="hidden" name="merchant_id" value="121XXXX"> Replace your Merchant ID -->
      <!-- <input type="hidden" name="return_url" value="http://sample.com/return"> -->
      <!-- <input type="hidden" name="cancel_url" value="http://sample.com/cancel"> -->
      <!-- <input type="hidden" name="notify_url" value="http://sample.com/notify"> -->
      <!-- <br><br>Item Details<br> -->
      <!-- <input type="text" name="order_id" value="ItemNo12345">  -->
      <!-- <input type="text" name="items" value="Door bell wireless"><br> -->
      <!-- <input type="text" name="currency" value="LKR"> -->
      <!-- <input type="text" name="amount" value="1000"> -->
      <!-- <br><br>Customer Details<br> -->
      <!-- <input type="text" name="first_name" value="Saman"> -->
      <!-- <input type="text" name="last_name" value="Perera"><br> -->
      <!-- <input type="text" name="email" value="samanp@gmail.com"> -->
      <!-- <input type="text" name="phone" value="0771234567"><br> -->
      <!-- <input type="text" name="address" value="No.1, Galle Road"> -->
      <!-- <input type="text" name="city" value="Colombo"> -->
      <!-- <input type="hidden" name="country" value="Sri Lanka"><br><br> -->
      <!-- <input type="submit" value="Buy Now"> -->
    </form>

    <!-- <div class="row">
      <div class="col-md-5 columnmargin">
        <div class="row">
          <div class="payment">
            <div class="paymentpic">
              <a href="cardInfo.php"><img src="img/mastercard.png" height="100%"></a>
            </div>
            <div style="margin-top:50px;"> Master Card </div>
          </div>
        </div>

        <div class="row">
          <div class="payment">
            <div class="paymentpic">
              <img src="img/ezCash.png" height="100%">
            </div>
            <div style="margin-top:50px;"> EzCash </div>
          </div>
        </div>

      </div>

      <div class="col-2">
      </div>

      <div class="col-md-5">
        <div class="row">
          <div class="payment">
            <div class="paymentpic">
              <a href="cardInfo.php"><img src="img/visa.png" height="100%"></a>
            </div>
            <div style="margin-top:50px;"> Visa Card </div>
          </div>
        </div>

        <div class="row">
          <div class="payment">
            <div class="paymentpic">
              <img src="img/mCash.png" height="80%">
            </div>
            <div style="margin-top:50px;"> M Cash </div>
          </div>
        </div>
      </div>
    </div> -->


</body>

</html>