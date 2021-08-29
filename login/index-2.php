<?php
include('../connection.php');
// require('connection.php');

if(isset($_POST['email']) && isset($_POST['password'])){
    if(isset($_POST['email']) && empty($_POST['email'])){
        echo "<script>alert('empty filed')</script>";
        echo "<script>window.location.href='register.php'</script>";
    }else{
        echo $email = mysqli_real_escape_string($con,$_POST['email']);
    }

    if(isset($_POST['password']) && empty($_POST['password'])){
        echo "<script>alert('empty filed')</script>";
        echo "<script>window.location.href='register.php'</script>";
    }else{
        echo $password = mysqli_real_escape_string($con,$_POST['password']);
    }

    
    $status ="yes";
    $res = mysqli_query($con,"insert into user_data(user_name,user_phone,user_email,user_password,is_active) values('$user_name','$phone_number','$user_email','$user_password','$status')");
    if($res){
        
        echo $msg="You Have Registered Successfully";
    }else{
         echo $msg="Please Enter valid details";
    }

}else{
    echo "something error occurs";
}
?>
