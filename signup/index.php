<?php
include('../lib/connection.php');
// require('connection.php');

if(isset($_POST['submit']) && $_POST['submit']==='register'){
    if(isset($_POST['phone_number']) && empty($_POST['phone_number'])){
        echo "<script>alert('empty filed')</script>";
        echo "<script>window.location.href='register.php'</script>";
    }else{
        echo $phone_number = mysqli_real_escape_string($con,$_POST['phone_number']);
    }

    if(isset($_POST['user_name']) && empty($_POST['user_name'])){
        echo "<script>alert('empty filed')</script>";
        echo "<script>window.location.href='register.php'</script>";
    }else{
        echo $user_name = mysqli_real_escape_string($con,$_POST['user_name']);
    }

    if(isset($_POST['user_email']) && empty($_POST['user_email'])){
        echo "<script>alert('empty filed')</script>";
        echo "<script>window.location.href='register.php'</script>";
    }else{
        echo $user_email = mysqli_real_escape_string($con,$_POST['user_email']);
    }

    if(isset($_POST['user_password']) && empty($_POST['user_password'])){
        echo "<script>alert('empty filed')</script>";
        echo "<script>window.location.href='register.php'</script>";
    }else{
        echo $user_password = mysqli_real_escape_string($con,$_POST['user_password']);
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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
 <center>
   <div class="row">
    <form action="register.php" method="post">
    <div class="col-md-4 offset-4">
      <div class="form-group">
        <label for="user">User Name:</label>
         <input type="text" class="form-control" id="email" name="user_name">
       </div>
      <div class="form-group">
         <label for="phone">Phone Number:</label>
         <input type="number" class="form-control" id="pwd" name="phone_number">
     </div>
     </div>
     <div class="col-md-4 offset-4">
      <div class="form-group">
        <label for="email">Email address:</label>
         <input type="email" class="form-control" id="email" name="user_email">
       </div>
      <div class="form-group">
         <label for="pwd">Password:</label>
         <input type="password" class="form-control" id="pwd" name="user_password">
     </div>
     </div>
     <div class="checkbox col-md-8 offset-2">
         <label><input type="radio" name="remember" value="yes" checked> Remember me</label>
         <label><input type="radio" name="remember" value="no"> Not Remember me</label>
     </div>
     <div class="col-md-8 offset-2">
         <input type="submit" class="btn btn-success btn-block btn-lg" name="submit" value="register">
     </div>
    </form>
    </div>
</center>
</body>
</html>