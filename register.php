<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <?php require 'head.php';?>
  <link rel="stylesheet" href="css/register.css">
</head>

<body>

<!-- PHP Code -->

<?php

if(isset($_POST['btnregister'])){
	extract($_POST);
	mysqli_query($con,"insert into user_tb(user_name,user_birth,user_gender,user_email,user_phone,user_city,user_password)values('$txtname','$dob','$gender','$email','$phone','$city','$password')");
  header("location:login.php");
  echo "<script>alert('Registration Successful');</script>";
}

?>






<form action="" method="post">
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100" style="position: absolute;top: -30px;left: 13%;">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
              <div class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                <form>

                  <div class="row">
                    <div class="col-mb-12 mb-4">

                      <div class="form-outline">
                        <input type="text" id="fname" name="txtname" class="form-control form-control-lg" placeholder="Full Name" pattern="[a-zA-Z][a-zA-Z ]{3,30}$" required="require" style="border:none;"/>
                        <!-- <label class="form-label" for="Name">Name</label> -->
                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 align-items-center">
                    <h6 class="mb-2 pb-1">Birthday: </h6>

                      <div class="form-outline datepicker w-100">
                        <input type="date" class="form-control form-control-lg"  name="dob" id="birthdayDate" placeholder="Birthday" required="require" style="border:none;"/>
                        <!-- <label for="birthdayDate" class="form-label">Birthday</label> -->
                      </div>

                    </div>
                    <div class="col-md-6 mb-4">

                      <h6 class="mb-2 pb-1">Gender: </h6>

                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="maleGender"
                          value="Male" checked required="required"/>
                        <label class="form-check-label" for="maleGender">Male</label>
                      </div>

                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                          value="Female" />
                        <label class="form-check-label" for="femaleGender">Female</label>
                      </div>

                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="otherGender"
                          value="other" />
                        <label class="form-check-label" for="otherGender">Other</label>
                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="email" id="emailAddress" name="email" pattern="[a-z]+[0-9]*@[a-z]+[0-9]*\.[a-z]{2,3}" class="form-control form-control-lg" placeholder="Email"  required="require" style="border:none;"/>
                        <!-- <label class="form-label" for="emailAddress">Email</label> -->
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="tel" id="phoneNumber" name="phone" pattern="[0-9]{10}" class="form-control form-control-lg" placeholder="Phone Number"  required="require" style="border:none;"/>
                        <!-- <label class="form-label" for="phoneNumber">Phone Number</label> -->
                      </div>

                    </div>
                  </div>
                  <div class="row">

                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="city" name="city" class="form-control form-control-lg" placeholder="City" pattern="[a-zA-Z][a-zA-Z ]*" required="require" style="border:none;"/>
                        <!-- <label class="form-label" for="city">City</label> -->
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" pattern="^(?=.*[A-Z])(?=.*\d)([A-Za-z\d@$!%*?&]{8,}$" required="require" style="border:none;"/>
                        <!-- <label class="form-label" for="password">Password</label> -->
                      </div>
                      <p style="font-size:12px; color:red; word-spacing:3px" disable>min one A-Z, a-z, 0-9 and @$!%*?&</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      <input class="btn btn-primary btn-lg" name="btnregister" type="submit" value="Submit"/>
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                    <a href="login.php" style="font-size:20px; color:black;">Back to Login</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </form>



  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>