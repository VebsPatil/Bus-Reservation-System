<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Now</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <?php require 'head.php';?>
  <link rel="stylesheet" href="css/register.css">
  <style>

  </style>
</head>

<body>

  <?php 
if(isset($_POST['btnlogin'])){
	extract($_POST);
	$q=mysqli_query($con,"select * from user_tb where user_email='$txtemail' and user_password='$txtpass'");
	if(mysqli_num_rows($q)>0){
		$_SESSION["email"]=$txtemail;
		$q1=mysqli_query($con,"select * from user_tb where user_email='".$_SESSION['email']."'");
		$r1=mysqli_fetch_array($q1);
		$_SESSION["user_id"]=$r1["user_id"];
		header("location:home.php");
	}
	else{
		echo "<script>alert('Invalid Credentials');</script>";
	}
}
?>


  <form action="" method="post">
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100" style="position: absolute;top: -30px;">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
              <div class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Login Form</h3>
                <form>
                  <div class="row">
                    <div class="col-mb-12 mb-4">
                      <div class="form-outline">
                        <input type="email" id="emailAddress" name="txtemail" class="form-control form-control-lg"
                          placeholder="Enter you Email" required="required" style="border:none;" />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-mb-12 mb-4">
                      <div class="form-outline">
                        <input type="password" id="password" name="txtpass" class="form-control form-control-lg"
                          placeholder="Enter you Password" required="required" style="border:none;" />
                      </div>
                    </div>
                  </div>
                  <div class="mt-4 pt-2">
                    <input class="btn btn-primary btn-lg" name="btnlogin" type="submit" value="Submit" />
                    <a href="register.php" style="margin-left: 50%;font-size: 1.1rem;  color:black;">Register Here</a>
                  </div>

                  <div class="mt-4 pt-4 ">
                    <a href="index.php" style="font-size:20px; color:black;">Back to Home</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </form> 

  <?php include "footer.php" ?>