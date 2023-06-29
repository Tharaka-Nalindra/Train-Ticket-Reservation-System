<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/main5.css">
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
  <a href="main4.php">&lt;&nbsp;&nbsp;&nbsp;Back</a>
  <p>Train Information</p>
<div id="hori"></div><br>
  <article>
    <form action="one.php" method="post">
      <p>Select Your Sleepets Type</p><br>

      <table>
        <tr>
          <td colspan="2"><div id="first"><div></div><br>Cabin<br>1<sup>st</sup>Class</div><input   type="radio" name="category" id="categoryfirst" value="6"></td>
        </tr>

        <tr>
          <td><div id="Seat1"><div></div><br>Seat<br>2<sup>nd</sup>Class</div><input   type="radio" name="category" id="categorySeat1" value="7"></td>
          <td><div id="Seat2"><div></div><br>Seat<br>1<sup>rd</sup>Class</div><input   type="radio" name="category" id="categorySeat2" value="8"></td>
        </tr>
        

      </table>
      <input type="submit" value="Next">
    </form>
  </article>
</section>

</body>
<script>
  $('#first, #Seat1, #Seat2').click(function(){
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