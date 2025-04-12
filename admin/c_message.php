<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin: Customers Messages</title>
    <?php require "head.php"?>
</head>
<body>
    <?php require "menu.php"?>
    <?php
        $sql = "SELECT * FROM contact_us";
        $result = $con->query($sql);

if(mysqli_num_rows($result) > 0){  ?>
<center><div><h2>Customer's Messages</h2></div>
    <table border=1 style="width:100%">  
        <tr style="border:2px solid black">
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Customer Message</th>
        </tr>
    <?php  while($row = mysqli_fetch_array($result)){ ?>
    
    <tr>
        <td><?php echo $row['c_name']; ?></td>
        <td><?php echo $row['c_email']; ?></td>
        <td><?php echo $row['c_message'] ?></td>  
  </tr>
 <?php   } ?>
    </table>
    </center>
    <?php }?>
</body>
</html>