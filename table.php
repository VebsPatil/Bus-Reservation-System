
<html>
<head>
	<title>Bus Ticket Book</title>
	<?php require 'head.php';?>
</head>
<body>

<?php require 'main-header.php';?>
<table class="table">
	<tr>
		<td>Bus No.</td>
		<td>Bus Name</td>
		<td>From</td>
		<td>To</td>
		<td>Ticket Price</td>
		<td>Total Seats</td>
		<td>Arrival Time</td>
		<td>Reached Time</td>

	</tr>


<?php
$q=mysqli_query($con,"select * from addbus where bus_from='".$_SESSION['from']."' and bus_to='".$_SESSION['to']."'");
while ($r=mysqli_fetch_array($q)) {
	?>
	<Tr>
		<td>
	<?php echo $r["bus_no"];?>
</td>
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
	<?php echo $r["total_seats"];?>
</td>
<td>
	<?php echo $r["arrival_time"];?>
</td>
<td>
	<?php echo $r["reach_time"];?>
</td>
<td>
	<?php if($r['total_seats']>0){ ?>
		<a href="viewdetails.php?id=<?php echo $r['bus_no'];?>">
	<?php }?>	
        <button type="button" class="btn btn-primary">Book</button>
      </a>
	</td>
</Tr>
<?php
}

?>
</table>
<?php require 'footer.php';?>
</body>
</html>