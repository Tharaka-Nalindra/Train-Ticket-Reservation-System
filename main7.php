<?php
session_start();
if (!isset($_SESSION['category'])) {
  header('Location: main4.php');
}

$_SESSION['train_id'] = $_POST['train'];
//$_SESSION['user_email'] = '461@gmail.com';
$connection = mysqli_connect("localhost", "root", "", "train_sys");
$class_id = $_SESSION['category'];
$trainId = $_SESSION['train_id'];
$query = "SELECT price FROM class WHERE class_id='$class_id'";

$seatCheckQuery = "SELECT seat_id FROM reservations WHERE class_id='$class_id' AND train = '$trainId'";
$seatCheckResult = mysqli_query($connection, $seatCheckQuery);
$ReservedSeatsS = mysqli_fetch_all($seatCheckResult);

$ReservedSeats = [];
if ($ReservedSeatsS) {
  foreach ($ReservedSeatsS as $rSeat) {
    $ReservedSeats[] = $rSeat[0];
  }
}

$result = mysqli_query($connection, $query);
$output = mysqli_fetch_assoc($result);

$price =  $output['price'];




?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main7.css">
  <link rel="stylesheet" href="css/common.css">
</head>

<body>

  <script>
    function price_cal() {
      var name1 = document.getElementById("one").value;
      var name2 = document.getElementById("two").value;
      var name3 = document.getElementById("three").value;
      var name4 = document.getElementById("four").value;
      var count = 0;
      if (name1) {
        count = count + 1;
      }
      if (name2) {
        count = count + 1;
      }
      if (name3) {
        count = count + 1;
      }
      if (name4) {
        count = count + 1;
      }
      var sum = count * '<?php echo $price; ?>';
      document.getElementById("cg_price").innerHTML = sum + "/=";
    }
  </script>

  <div class="main">
    <img src="image/logo-main.png" />
    <h1>Sri Lanka Railways</h1>
    <p>Reservation Support Hotline<br>
      011 2 240 222<br>
      011 2 240 333</p>
  </div>
  <header>
    <h1>Ticket Reservation Form</h1>
  </header>
  <section>
    <a href="three.php">&lt;&nbsp;&nbsp;&nbsp;Back</a>
    <p>Seat Allocation Information</p>
    <div id="hori"></div><br>
    <form action="paymentMethod.php" method="post">
      <article>
        <input type="hidden" value="<?php echo $price ?>" name="price">
        <input type="hidden" value="<?php echo $trainId ?>" name="train_id">
        <table class="seat">
          <tr>
            <td class="">W</td>
            <?php
            for ($x = 1; $x <= 10; $x++) {
              $class = in_array($x, $ReservedSeats) ? 'reserverd' : '';
              echo "<td class='S$x $class'>$x</td>";
            }
            ?>
          </tr>

          <tr>
            <td></td>
            <td colspan="10"></td>
          </tr>

          <tr>
            <td></td>
            <?php
            for ($x = 11; $x <= 20; $x++) {
              $class = in_array($x, $ReservedSeats) ? 'reserverd' : '';
              echo "<td class='S$x $class'>$x</td>";
            }
            ?>
          </tr>
        </table><br>

        <table class="seat">
          <tr>
            <td></td>
            <?php
            for ($x = 21; $x <= 30; $x++) {
              $class = in_array($x, $ReservedSeats) ? 'reserverd' : '';
              echo "<td class='S$x $class'>$x</td>";
            }
            ?>
          </tr>

          <tr>
            <td></td>
            <td colspan="10"></td>
          </tr>

          <tr>
            <td>W</td>
            <?php
            for ($x = 31; $x <= 40; $x++) {
              $class = in_array($x, $ReservedSeats) ? 'reserverd' : '';
              echo "<td class='S$x $class'>$x</td>";
            }
            ?>
          </tr>
        </table>
      </article>
      <br><br>

      <div id="tablefr">
        <table class="forms">
          <tr>
            <td>Full Names of Passengers</td>
            <td>Seat number</td>
          </tr>
          <tr>
            <td>1 <input id="one" class="name" type="text" onchange="price_cal()" required name="name1"></td>
            <td>
              <select name="per1_seat">
                <option value="0" selected disabled>-seat-</option>
                <?php
                for ($x = 1; $x <= 40; $x++) {
                  if (!in_array($x, $ReservedSeats)) {
                    echo "<option value='$x'>$x</option>";
                  }
                }
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>2 <input id="two" class="name" type="text" onchange="price_cal()" name="name2"></td>
            <td>
              <select name="per2_seat">
                <option value="0" selected disabled>-seat-</option>
                <?php
                for ($x = 1; $x <= 40; $x++) {
                  if (!in_array($x, $ReservedSeats)) {
                    echo "<option value='$x'>$x</option>";
                  }
                }
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>3 <input id="three" class="name" type="text" onchange="price_cal()" name="name3"></td>
            <td>
              <select name="per3_seat">
                <option value="0" selected disabled>-seat-</option>
                <?php
                for ($x = 1; $x <= 40; $x++) {
                  if (!in_array($x, $ReservedSeats)) {
                    echo "<option value='$x'>$x</option>";
                  }
                }
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>4 <input id="four" class="name" type="text" onchange="price_cal()" name="name4"></td>
            <td>
              <select name="per4_seat">
                <option value="0" selected disabled>-seat-</option>
                <?php
                for ($x = 1; $x <= 40; $x++) {
                  if (!in_array($x, $ReservedSeats)) {
                    echo "<option value='$x'>$x</option>";
                  }
                }
                ?>
              </select>
            </td>
          </tr>
        </table>
        <div id="price">
          <p>Total Price</p>
          <p><span id="cg_price">0<span>/=</p>
          <hr>
        </div>
      </div>
      <div id="finish">
        <input type="button" value="Next">
      </div>
    </form>

  </section>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  // PHP Veriabe to Javascript Variable
  var price = '<?php echo $price; ?>';

  $("#tablefr select").on('change', function() {
    var selectedSeat = $(this).val();
    var selectedSeats = [];

    $("#tablefr select").each(function() {
      if ($(this).val() > 0) {
        selectedSeats.push($(this).val());
      }
    });

    $("#tablefr select option").show();
    $('.seat td').removeClass('selected-seat');

    for (let i = 0; i < selectedSeats.length; i++) {

      $("#tablefr select option[value=" + selectedSeats[i] + "]").hide();
      $('.S' + selectedSeats[i]).addClass('selected-seat');
    }

  });

  $('#finish').on('click', function() {

    var selectedPersons = [];
    var selectedSeats = [];
    var error = 0;

    $("#tablefr select").each(function() {
      if ($(this).val() > 0) {
        selectedSeats.push($(this).val());
        if (!$(this).parent().prev('td').find('input').val()) {
          alert("Please select Customer Name !");
          var error = 1;
        }
      }
    });

    $("#tablefr input").each(function() {
      if ($(this).val()) {
        selectedPersons.push($(this).val());
        if (!$(this).parent().next('td').find('select').val()) {
          alert("Please select Seat No !");
          var error = 1;
        }
      }
    });

    if (selectedSeats.length > 0 && (selectedPersons.length == selectedSeats.length) && !error) {
      $('form').submit();
    } else if (selectedSeats.length == 0) {
      alert("Please select at least one seat !");
    }

  });
</script>

</html>