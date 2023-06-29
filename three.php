<?php

if (!isset($_POST['des']) or !isset($_POST['arr'])) {
	header('Location: main7.php');
	exit();
}

$key = $_POST['des'];
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

		<a href="two.php">
			<button class="back">Back</button>
		</a>
		<h3>Applicant Personal Information</h3>


		<div class="hori"></div>
		<p>
		<div class="rsv">Select the Train to Reserve Ticket</div>
		</p>
		<form action="main7.php" method="POST">
			<div class="container">

				<table>
					<thead>
						<tr>
							<th>Select</th>
							<th>Train Name</th>
							<th>Date</th>
							<th>Time</th>
							<th>From</th>
							<th>To</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td class="thr" colspan="6"></td>
						</tr>
						<?php
						include 'connect.php';
						$key = $_POST['des'];
						$key2 = $_POST['arr'];
						$sql = "SELECT * fROM train where start_loc = '$key' AND destinantion ='$key2' ";
						$result = $connection->query($sql);
						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
						?>
								<tr>
									<td>
										<input type="radio" name="train" value="<?php echo $row["train_id"]; ?>">
									</td>
									<td><?php echo $row["train_name"]; ?></td>
									<td><?php echo $row["tr_date"]; ?></td>
									<td><?php echo $row["arrive_time"]; ?></td>
									<td><?php echo $row["destinantion"]; ?></td>
									<td><?php echo $row["start_loc"]; ?></td>
								</tr>
						<?php
							}
						} else {
							echo "no tarain";
						}
						?>
					</tbody>
				</table>


			</div>


			<div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Next" name="Next">
			</div>
		</form>

	</section>
</body>

</html>