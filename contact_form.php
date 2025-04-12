<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require "head.php"?>
</head>

<body>
    
<?php

if(isset($_POST['btnContactUs'])){
	extract($_POST);
	mysqli_query($con,"insert into contact_us(c_name,c_email,c_message)values('$cname','$cemail','$cmessage')");
}

?>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="cname" placeholder="Enter name" pattern="[a-zA-Z][a-zA-Z ]{3,30}$" required="required" />
                </div>
                <div class="form-group">
                    <div class="input-group" style="margin-top: 2rem;">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input type="email" class="form-control" id="email" name="cemail" placeholder="Enter email" pattern="[a-z]+[0-9]*@[a-z]+[0-9]*\.[a-z]{2,3}" required="require" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="cmessage" id="message" class="form-control" rows="9" cols="25" required="required"
                        placeholder="Message"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary pull-right" name="btnContactUs" id="btnContactUs">
                    Send Message</button>
            </div>
        </div>
    </form>
</body>

</html>