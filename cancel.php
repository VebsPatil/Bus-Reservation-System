<?php
require "head.php";

mysqli_query($con,"DELETE from tblbooking where tblbooking.status='1' and tblbooking.user_id=".$_SESSION['user_id']);

header("location:home.php");
?>