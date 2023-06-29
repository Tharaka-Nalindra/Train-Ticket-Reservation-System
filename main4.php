<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/main4.css">
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
  <h1>Ticket Reservation Form</h1>
</header>
<section>
  <a href="passengerInfo.html">&lt;&nbsp;&nbsp;&nbsp;Back</a>
  <p>Train Information</p>
<div id="hori"></div><br>
  <article>
    <form action="one.php" method="post">
      <p>Select Your Reservation Type</p><br>

      <table>
        <tr>
          <td><a href="main5.php"><div style="line-height:1.5;"><div></div><br>Sleepets</div></a></td>
          <td>
            <div id="ObservationSaloon">
              <div></div>
              <br>Observation<br>Saloon
            </div>
            <input   type="radio" name="category" id="categoryObservationSaloon" value="1">
          </td>
        </tr>

        <tr>
          <td><div id="AC"><div></div><br><br>A/C Special</div><input   type="radio" name="category" id="categoryAC" value="5"></td>
          <td><div id="Genaral1"><div></div><br>General<br>1<sup>st</sup>Class</div><input   type="radio" name="category" id="categoryGenaral1" value="2" ></td>
        </tr>
        <tr>
          <td><div id="Genaral2"><div></div><br>General<br>2<sup>nd</sup>Class</div><input   type="radio" name="category" id="categoryGenaral2" value="3"></td>
          <td><div id="Genaral3"><div></div><br>General<br>3<sup>rd</sup>Class</div><input   type="radio" name="category" id="categoryGenaral3" value="4"></td>
        </tr>

      </table>

      <input type="submit" value="Next">
      
    </form>
  </article>
</section>

</body>
<script>
$('#ObservationSaloon, #AC, #Genaral1, #Genaral2, #Genaral3').click(function(){
  var id = $(this).attr('id');
  var radioID = '#category'+id;
  
  console.log('#category'+id);
  $(radioID).prop('checked', true);
  
  $('table div').removeClass('bg-color-dark-orange');
  $(this).addClass('bg-color-dark-orange');
  
  $('table div').css('background-color', '#fc9904');
  
  
})
</script>
</html>