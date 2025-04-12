<html>
<head>
	<title>Book Ticket</title>
	<?php require 'head.php';?>
	<?php require 'main-header.php';?>
</head>
<body>
<?php
if(isset($_POST["btnaddcart"])){
extract($_POST);

$q=mysqli_query($con,"select * from addbus where bus_no=".$_GET['id']);
$r=mysqli_fetch_array($q);
$oldstock=$r['total_seats'];
$newstock=$oldstock-$bookedseats;
if($newstock>=0){
	mysqli_query($con,"update addbus set total_seats='$newstock' where bus_no=".$_GET['id']);
	$year=date('Y');
	$month=date('m');
mysqli_query($con,"insert into tblbooking(user_id,bus_no,bookedseats,status,ticketstatus,month,year)values('".$_SESSION["user_id"]."','".$_GET['id']."','$bookedseats','0','Not Booked','$month','$year')");
header("location:myorder.php");
}
else{
	?>
	<script type="text/javascript">
		alert("OUT OF STOCK");
	</script>
	<?php
}
}
?>
<div class="row" style="width:100%">
<?php
$q=mysqli_query($con,"select * from addbus where bus_no=".$_GET['id']);
while ($r=mysqli_fetch_array($q)) {
	?>
	<div class="col-md-6" style="width: 400px;margin-top: 30px; margin-left: 550px;">
	<div class="card">
  <div class="card-body">
    <h5 class="card-title">Bus Name: <?php
	echo $r["bus_name"];?></h5>
    <p class="card-text">
    	<form method="post">
    	<table class="table">
    		<tR>
    			<td>
    				<h6>From:</h6>
    				<?php echo $r['bus_from'];?>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<h6>To:</h6>
    				<?php echo $r['bus_to'];?>
    			</td>
    		</tR>
    			<td>
    				<h6>Ticket Price:</h6>
    				₹<?php echo $r['bus_price'];?>/-
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<h6>Arrival Time</h6>
    				<?php echo $r['arrival_time'];?>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<h6>Reached Time:</h6>
    				<?php echo $r['reach_time'];?>
    			</td>
    		</tR>
    		<Tr>
    			<td>
    				<h6>Seat Book:</h6>
    				<input type="number" name="bookedseats" placeholder="Book Seats" min="1" max="6" required>
    			</td>
    		</Tr>
    		<tr>
    			<Td>
    				<a href="myorder.php"><input type="submit" name="btnaddcart" value="Continue To Book" class="btn btn-success"></a>
    			</Td>
    		</tr>
    	</table>
    </form>


    </p>
    
  </div>
</div>
</div>
<?php
}

?>
</div>
</body>
<?php require 'footer.php';?>
</html>