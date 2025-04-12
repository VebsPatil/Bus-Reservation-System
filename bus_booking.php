<html>

<head>
        <?php require 'head.php';?>
        <title>Book Ticket</title>
        <!--Navigation bar and footer-->
        <?php require 'main-header.php';?>        

</head>
<body style="background-color:white;">
    <?php 
if(isset($_POST['btnaddbus'])){
    extract($_POST);
    echo "SELECT * from addbus where bus_from='$busfrom'and bus_to='$busto'";
    $q=mysqli_query($con,"select * from addbus where bus_from='$busfrom'and bus_to='$busto'");
    if(mysqli_num_rows($q)>0){
        $_SESSION['from']=$busfrom;
        $_SESSION['to']=$busto;
        header("location:table.php");
    }
    else{
        echo "<script>alert('Bus Not Available');</script>";
    }
}
?>

       <div class="row" style="width: 100%;">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<form method="post">
    <h2 style="align-content: center;color:green;">Book Your Ticket </h2><br>
    <table class="table">
        <tR>
        <td>
                From
            </td>
            <td>
                <select name="busfrom" class="form-control">
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
        </tR>
          <tR>
        <td>
                To
            </td>
            <td>
                <select name="busto" class="form-control">
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
        </tR>
        <tr>
            <tD>
                Date:
            </tD>
            <td>
                <input type="Date" name="$txtdate" class="form-control">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" class="btn btn-warning" name="btnaddbus" value="Search Buses">      
            </td>
        </tr>
    </table>
</form>
</div>
<?php include 'footer.php';?>
  </body>
  </html>