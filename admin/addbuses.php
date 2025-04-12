
<html>
<head>
	<title>Admin: Add Buses</title>
	<?php require 'head.php';?>
</head>
<body>
<?php require 'menu.php';?>
<?php
if(isset($_POST["btnsave"])){
	extract($_POST);
	mysqli_query($con,"insert into addbus(bus_name,bus_from,bus_to,total_seats,bus_price,bus_date,arrival_time,reach_time)values('$busname','$bus_from','$bus_to','$total_seats','$busprice','$bus_date','$arrival_time','$reach_time')");
}

?>
<form method="post">
	<table class="table">
		<tr>
			<td>
				Bus Name
			</td>
			<td>
				<input type="text" class="form-control" name="busname" placeholder="Enter Bus Name">
			</td>
		</tr>
		<tr>
			<tD>
				Bus From
			</tD>
			<td>
				<!-- <input type="text" class="form-control" name="bus_from"> -->
				<select name="bus_from" class="form-control">
                <option value="#">Select City</option>
                    <?php
                        $q=mysqli_query($con,"select * from city");
                        while ($r=mysqli_fetch_array($q)) {
                            ?>
                            <option value="<?php echo $r['city_name'];?>"><?php echo $r["city_name"];?></option>
                            <?php
                        }
                    ?>
                </select>
			</td>
		</tr>
		<tr>
			<tD>
				Bus To
			</tD>
			<td>
				<!-- <input type="text" class="form-control" name="bus_to"> -->
				<select name="bus_to" class="form-control">
                <option value="#">Select City</option>
                    <?php
                        $q=mysqli_query($con,"select * from city");
                        while ($r=mysqli_fetch_array($q)) {
                            ?>
                            <option value="<?php echo $r['city_name'];?>"><?php echo $r["city_name"];?></option>
                            <?php
                        }
                    ?>
                </select>
			</td>
		</tr>
		<tr>
			<tD>
				Total Seats
			</tD>
			<td>
				<input type="number" class="form-control" name="total_seats" placeholder="Enter Total Bus Seats">
			</td>
		</tr>
			<tD>
				Price
			</tD>
			<td>
				<input type="text" name="busprice" class="form-control" placeholder="Enter Ticket Prices">
			</td>
		</tr>
		<tr>
		<tr>
			<tD>
				Date
			</tD>
			<td>
				<input type="Date" name="bus_date" class="form-control">
			</td>
		</tr>
		<tr>
			<tD>
				Arrival Time
			</tD>
			<td>
				<input type="time" name="arrival_time" class="form-control">
			</td>
		</tr>
		<tr>
			<tD>
				Reach Time
			</tD>
			<td>
				<input type="time" name="reach_time" class="form-control">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" class="btn btn-success" name="btnsave" value="Add Bus">		
			</td>
		</tr>
	</table>
</form>
	</table>

</body>
</html>