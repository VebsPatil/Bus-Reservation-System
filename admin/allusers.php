<html>

<head>
	<title>Admin: All Users</title>
	<?php require 'head.php';?>
</head>

<body>

	<?php require 'menu.php';?>
	<center><h3>All Users</h3></center>
	<table class="table" style="border: 10px;">
		<tr>
			<td>Name</td>
			<td>Email</td>
			<td>Gender</td>
			<td>Phone</td>
            <td>City</td>
		</tr>


		<?php
$q=mysqli_query($con,"select * from user_tb");
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
				<?php echo $r["user_gender"];?>
			</td>
			<td>
				<?php echo $r["user_phone"];?>
			</td>
			<td>
				<?php echo $r["user_city"];?>
			</td>
		</tr>
		<?php
}

?>
	</table>
</body>

</html>