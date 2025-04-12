<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <?php require 'head.php';?>
  <style>
    .vh-100 {
      background: url('img/bg.jpg');
      background-position: center;
      background-size: cover;
      height: 100vh !important;
      margin-bottom: -1rem;
    }

    .form-outline {
      border-bottom: 2px solid #353568;
    }
  </style>

<body>

  <?php 
if(isset($_POST['btnlogin'])){
	extract($_POST);
	$q=mysqli_query($con,"select * from admin where admin_name='$txtemail' and admin_password='$txtpass'");
	if(mysqli_num_rows($q)>0){
		$_SESSION["email"]=$txtemail;
		$q1=mysqli_query($con,"select * from admin where admin_name='".$_SESSION['email']."'");
		$r1=mysqli_fetch_array($q1);
		$_SESSION["admin_name"]=$r1["admin_name"];
		header("location:allusers.php");
	}
	else{
		echo "Invalid Credentials";
	}
}
?>


  <form action="" method="post">
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100" style="position: absolute;top: -30px;left: 13%;">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
              <div class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Admin Panel</h3>
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
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>