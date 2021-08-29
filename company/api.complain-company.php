<?php
require('../lib/connection.php');
require('../middlewares/session.php');
require('../middlewares/auth.php');

if(isset($_POST['client_id']) && !empty($_POST['client_id']))
{
   $client_id = $_POST['client_id'];
   $work_details = $_POST['work'];
   $remarks = $_POST['remarks'];
   $status = $_POST['status'];
   $entry_date = date("Y/m/d");
   $user_id = $_SESSION['IS_LOGIN'];

$user_rec = mysqli_query($con,"SELECT user_phone FROM user_data WHERE id='$user_id'");
if($user_rec){
    $user = mysqli_fetch_assoc($user_rec);
    $user_phone = $user['user_phone'];
    $qry= "INSERT INTO complain_details(`client_id`,`work_details`,`remarks`,`status`,`entry_date`,`user_phone`) values('$client_id','$work_details','$remarks','$status','$entry_date','$user_phone')";
    $res = mysqli_query($con,$qry);
    if($res){
        echo "<script>alert('Your complain has been registered successfully')</script>";
        echo "<script>window.location.href='../complain-details.php'</script>";
    }else{
         echo $msg="Please Enter valid details";
    }

}else{
    header('location:../login');
}
 

}else{
        echo "<script>alert('empty filed')</script>";
        echo "<script>window.location.href='fetch_client_details.php'</script>";
}
?>