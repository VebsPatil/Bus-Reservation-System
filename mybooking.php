<html>
<head>
	<title>Bookings</title>
	<?php require 'head.php';?>
</head>
<body>

<?php require 'main-header.php';?>
<table class="table">
	<tr>
		<td>Bus Name</td>
		<td>From</td>
		<td>To</td>
		<td>Ticket Price</td>
		<td>Booked Seat</td>
		<td>Arrival Time</td>
		<td>Reached Time</td>
		<td>Ticket Status</td>
		<td>Cancel</td>
	</tr>


<?php
$q=mysqli_query($con,"select * from tblbooking,addbus where addbus.bus_no=tblbooking.bus_no and tblbooking.status='1' and tblbooking.user_id=".$_SESSION['user_id']);
while ($r=mysqli_fetch_array($q)) {
	?>
	<Tr>
		<td>
	<?php echo $r["bus_name"];?>
</td>
<td>
	<?php echo $r["bus_from"];?>
</td>
<td>
	<?php echo $r["bus_to"];?>
</td>
<td>
	<?php echo $r["bus_price"];?>
</td>
<td>
	<?php echo $r["bookedseats"];?>
</td>
<td>
	<?php echo $r["arrival_time"];?>
</td>
<td>
	<?php echo $r["reach_time"];?>
</td>
<td>
	<?php echo $r["ticketstatus"];?>
</td>
	<Td>
		<a href="cancel.php"><input type="button" class="btn btn-success" value="Cancel" name=""> </a>
	</Td>
    <?php
}
?>
</table>
<?php require 'footer.php';?>
</body>
</html>