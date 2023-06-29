
<?php 
include 'connect.php';
if (!isset($_POST['des']) or !isset($_POST['arr'])){
	header('Location: one.php');
	exit();
}

$key= $_POST['des'];
$key2 = $_POST['arr'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="main">
	<img src="image/logo-main.png">
	<h1>Sri Lanka Railways</h1>
	<p>Reservation Support Hotline<br>
	011 2 240 222<br>
	011 2 240 333</p>	
	</p>
</div>

<header>
	Ticket Reservation Form 
</header>

<section>	
	
		<a href="one.php">
			<button class="back">Back</button>
		</a><h3>Applicant Personal Information</h3>

	
	

	<div class="hori"></div>


<form action="" method="POST">





<p><div class="rsv">Available Train Schedule</div></p>
<div class="container">
	<table>
		<thead>
			<tr>

				<th>Date</th>
				<th>Time</th>
				<th>From</th>
				<th>To</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td class="thr" colspan="4" ></td>
			</tr>
<?php
$sql = "SELECT * fROM train where start_loc = '$key' AND destinantion ='$key2' ";
$result = $connection ->query($sql);
if ($result -> num_rows> 0){
	while ($row = $result -> fetch_assoc ()){
?> 
			<tr>
				<td><?php  echo $row["tr_date"]; ?></td>
				<td><?php  echo $row["arrive_time"]; ?></td>
				<td><?php  echo $row["destinantion"]; ?></td>
				<td><?php  echo $row["start_loc"]; ?></td>
			</tr>
<?php
		}
	}else{
 echo "no tarain";
}
?> 
			</tbody>
	</table>

</div>


</form>
<form action="three.php" method="POST">
<input type="hidden" name="des" value="<?php echo $key; ?>">
<input type="hidden" name="arr" value="<?php echo $key2; ?>">
<div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Next" name="Next" action="u.php">
</div>







</form>
</section>
</body>
</html>