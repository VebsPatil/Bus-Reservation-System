<html lang="en">
<head>
<title>Header</title>
<?php require 'head.php';?>
<style>
   .nav-item{
    margin-right: 20px;
   } 

   .nav-link:active{
    color:red;
   }

</style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><span style="color:red; font-size:1.8rem;" class="logo-name">MAKE</span><span
          style="font-size: 1.5rem;" class="logo-name">TRIP</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="nav justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size:1.2rem">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact us</a>
          </li>
          <div class="d-flex">
      <a href="register.php" class="nav-item">
        <button type="button" class="btn btn-primary">Register</button>
      </a>
      <a href="login.php" class="nav-item">
        <button type="button" class="btn btn-primary" >Login</button>
      </a>
      </div>
        </ul>

      </div>
    </div>
  </nav>
  </body>
</html>

