<html>

<head>
	<title>Admin: Booking Details</title>
	<?php require 'head.php';?>
</head>

<body>

	<?php require 'menu.php';?>
	<center><h3>Booking Details</h3></center>
	<table class="table" style="border: 10px;">
		<tr>
			<td>Name</td>
			<td>Email</td>
			<td>From</td>
			<td>To</td>
			<td>Bus Name</td>
			<td>Phone</td>
		</tr>


		<?php
$q=mysqli_query($con,"select * from tblbooking,user_tb,addbus where user_tb.user_id=tblbooking.user_id and addbus.bus_no=tblbooking.bus_no and tblbooking.status='1'");
while ($r=mysqli_fetch_array($q)) {
	?>
		<tr>
			<td>
				<?php echo $r["user_name"];?>
			</td>
			<td>
				<?php echo $r["user_email"];?>
			</td>
			<td>
				<?php echo $r["bus_from"];?>
			</td>
			<td>
				<?php echo $r["bus_to"];?>
			</td>
			<td>
				<?php echo $r["bus_name"];?>
			</td>
			<td>
				<?php echo $r["user_phone"];?>
			</td>
		</tr>
		<?php
}

?>
	</table>
</body>

</html>