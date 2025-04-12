
<html>
<head>
	<title>Pay Bill</title>
	<?php require 'head.php';?>
</head>
<body>

<?php require 'main-header.php';?>

<?php
if(isset($_POST['btnpay'])){
	extract($_POST);
	mysqli_query($con,"update tblbooking set status='1',ticketstatus='Booked' where user_id=".$_SESSION['user_id']);
	header("location:paid.php");
}

?>
<input type="button" class="btn btn-primary" value="Print" onclick="print()" name=""><br><br>

<table class="table">
	<?php
$q=mysqli_query($con,"select * from tblbooking,user_tb where user_tb.user_id=tblbooking.user_id and tblbooking.user_id=".$_SESSION['user_id']);
while ($r=mysqli_fetch_array($q)) {
	?>
	<Tr>
		<TD>
			Passenger name
		</TD>
		<td>
			<?php echo $r['user_name'];?>
		</td>
	</Tr>
	<Tr>
		<td>
			City
		</td>
		<td>
			<?php echo $r['user_city'];?>
		</td>
	</Tr>
	<Tr>
		<td>
			Phone
		</td>
		<td>
			<?php echo $r['user_phone'];?>
		</td>
	</Tr>
	<?php
}

?>
</table>

<table class="table">
	<tr>
		<td>Bus Name</td>
		<td>From</td>
		<td>To</td>
		<td>Date</td>
		<td>Arrival Time</td>
		<td>Reached Time</td>
		<td>Total Seats Booked</td>
		<td>Ticket Price</td>
	</tr>


<?php
$q=mysqli_query($con,"select * from tblbooking,addbus where addbus.bus_no=tblbooking.bus_no and tblbooking.user_id=".$_SESSION['user_id']);
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
	<?php echo $r["bus_date"];?>
</td>
<td>
	<?php echo $r["arrival_time"];?>
</td>
<td>
	<?php echo $r["reach_time"];?>
</td>
<td>
	<?php echo $r["bookedseats"];?>
</td>
<td>
	<?php echo $total= $r["bookedseats"]*$r["bus_price"];$ftotal+=$total;?>
</td>

</Tr>
<?php
}

?>
<Tr>
	<td>
		Total Bill
	</td>
	<td>
		<?php echo $ftotal;?>
	</td>
</Tr>
</table>
<form method="post">
<center>
<table style="tex">
<tr>
	<Td >
		<input type="submit" class="btn btn-success" name="btnpay" value="  Pay  ">
	</Td>
</tr>
</table>
</center>
</form>
<?php require 'footer.php';?>
</body>
</html>