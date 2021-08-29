<?php
include('../lib/connection.php');
// require('connection.php');

 if(isset($_POST['phone_number']) && isset($_POST['password'])){
    if(isset($_POST['phone_number']) && empty($_POST['phone_number'])){
        echo "<script>alert('empty filed')</script>";
        echo "<script>window.location.href='register.php'</script>";
    }else{
        echo $phone_number = mysqli_real_escape_string($con,$_POST['phone_number']);
        
    }

    if(isset($_POST['password']) && empty($_POST['password'])){
        echo "<script>alert('empty filed')</script>";
        echo "<script>window.location.href='register.php'</script>";
    }else{
          echo $password = mysqli_real_escape_string($con,$_POST['password']);
    }

    

    $res = mysqli_query($con,"SELECT * FROM user_data WHERE user_phone='$phone_number' AND user_password='$password'");
    if(mysqli_num_rows($res)){
        $row = mysqli_fetch_assoc($res);
        echo $user_name=$row['user_name'];
        echo $user_id=$row['id'];
        if(session_start()){          
            $_SESSION['user_name']=$user_name;
            $_SESSION['IS_LOGIN']=$user_id;
            header('location:/');
        }
    }else{
        echo "<script>alert('Please Enter valid login details')</script>";
    }

}else{
    echo "Something went wrong";
}
?>
