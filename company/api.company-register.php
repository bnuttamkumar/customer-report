<?php
require('../lib/connection.php');
require('../middlewares/session.php');
require('../middlewares/auth.php');

   $client_name = $_POST['cname'];
   $firm_name = $_POST['cfirm'];
   $client_address = $_POST['caddress'];
   $client_phone = $_POST['cphone'];
   $client_email = $_POST['cemail'];
   $client_type = $_POST['ctype'];
   $expiry_date = $_POST['expirydate'];
   $Is_cloud = $_POST['isCloud'];
  
    $qry= "INSERT INTO client_master(`client_name`,`firm_name`,`client_address`,`client_phone`,`client_email`,`client_type`,`expiry_date`,`Is_cloud`) values('$client_name','$firm_name','$client_address','$client_phone','$client_email','$client_type','$expiry_date','$Is_cloud')";   
    $res = mysqli_query($con,$qry);
    if($res){
        echo "<script>alert('Customer has been registered successfully')</script>";
        echo "<script>window.location.href='../customers.php'</script>";
    }else{
         echo $msg="Please Enter valid details";
    }
?>