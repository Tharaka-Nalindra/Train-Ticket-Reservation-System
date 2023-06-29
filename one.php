<?php
session_start();
if (!isset($_POST['category'])) {
	//header('Location: main4.php');
} else {
	$_SESSION['category'] = $_POST['category'];
}

?>
<?php

include 'connect.php';
#include 'conn.php';
$key = '';
$key2 = '';

if (isset($_POST['des']) and isset($_POST['arr'])) {
	$key = $_POST['arr'];
	$key2 = $_POST['des'];
}
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
		</a>
		<h3>Applicant Personal Information</h3>




		<div class="hori"></div>


		<form action="one.php" method="POST">
			<div style="display: flex;">
				<div style="width: 50%;">
					<h4>The Beginning of Journeyemsp
						<?php
						$arrListQuery = "SELECT start_loc FROM train GROUP BY start_loc";
						$arrListQueryResult = mysqli_query($connection, $arrListQuery);
						$arrList = mysqli_fetch_all($arrListQueryResult);
						//echo '<pre>';
						//print_r($arrList);
						?>
						<select name="arr" style="width: 150px;padding: 7px; margin-left: 15px;">
							<?php

							foreach ($arrList as $location) {
								if ($key == $location[0]) {
									echo "<option  value='" . $location[0] . "' selected>" . $location[0] . "</option>";
								} else {
									echo "<option  value='" . $location[0] . "'>" . $location[0] . "</option>";
								}
							}
							?>

						</select>
						<!--<input type="text" name="arr" value="<?php echo $key; ?>" style="width: 150px;">-->
					</h4>
				</div>

				<div style="width: 50%;">
					<h4>
						Destination
						<?php
						$arrListQuery = "SELECT destinantion FROM train GROUP BY destinantion";
						$arrListQueryResult = mysqli_query($connection, $arrListQuery);
						$arrList = mysqli_fetch_all($arrListQueryResult);
						//echo '<pre>';
						//print_r($arrList);
						?>
						<select name="des" style="width: 150px;padding: 7px; margin-left: 15px;">
							<?php

							foreach ($arrList as $location) {
								if ($key2 ==  $location[0]) {
									echo "<option value='" . $location[0] . "' selected>" . $location[0] . "</option>";
								} else {
									echo "<option value='" . $location[0] . "'>" . $location[0] . "</option>";
								}
							}
							?>
						</select>
						<!--<input type="text" name="des" value="<?php echo $key2; ?>" style="width: 150px;">-->
					</h4>
				</div>

				<div style="width: 50%;">
					<input type="submit" name="search" style="margin-top: 25px;" style="width: 150px;">
				</div>
			</div>

			<p>
			<div class="rsv">Select the Train to Reserve Ticket</div>
			</p>
			<div class="container">
				<!--	<table>
		<thead>
			<tr>
				<th>Time</th>
				<th>From</th>
				<th>To</th>
				</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td class="thr" colspan="5" ></td>
			</tr>    -->
				<?php
				$sql = "SELECT * fROM train where start_loc like '%$key%' AND destinantion like '%$key2%' ";
				$result = $connection->query($sql);
				if ($result->num_rows > 0) {

					/*
	while ($row = $result -> fetch_assoc ()){
?>
			<tr>
				<td><?php  echo $row["arrive_time"]; ?> </td>
				<td><?php  echo $row["destinantion"]; ?></td>
				<td><?php  echo $row["start_loc"]; ?></td>
			</tr>
<?php
		}
		*/
				?>
					<p>
					<h3 style="color:#006600; align-items: center;">Trains are available</h3>
					</p>
				<?php

					//echo " tarain is available";

				} else {
				?>
					<p>
					<h3 style="color:#ff0000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trains are not available</h3>
					</p>



				<?php

					//echo "No tarain";

				}
				?>
				</tbody>
				</table>

			</div>
		</form>

		<form action="two.php" method="POST">
			<div>
				<input type="hidden" name="des" value="<?php echo $key; ?>">
				<input type="hidden" name="arr" value="<?php echo $key2; ?>">

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Next" name="Next">


			</div>
		</form>






	</section>
</body>

</html>