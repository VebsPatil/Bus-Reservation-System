<html>
<head>
	<title>Admin: Add City</title>
	<?php require 'head.php';?>
</head>
<body>
<?php require 'menu.php';?>
<?php
if(isset($_POST["btnsave"])){
	extract($_POST);
	mysqli_query($con,"insert into city(city_name)values('$txtcname')");
}

?>

<form method="post">

	<table class="table">
		<tr>
			<tD>
				Add City Name
			</tD>
			<td>
				<input type="text" class="form-control" name="txtcname" placeholder="Enter City Name">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" class="btn btn-success" name="btnsave" value="Add City">		
			</td>
		</tr>
	</table>
</form>
	</table>
</body>
</html>