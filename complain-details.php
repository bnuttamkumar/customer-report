<?php
  require('./middlewares/session.php');
  require('./middlewares/auth.php'); 
  require('./middlewares/no-cache.php');
  require('./templates/html.php');
  require('./templates/header.php');
?>
<section>
  <div class="row">
    <div class="col-lg-2">
      
        <?php require('./templates/main-menus.php');?>
    </div>
    <div class="col-lg-10">
      <h1>Complain Details</h1>
      <p>
        Company complain details
      </p>
    </div>
</section>

<?
  require('./templates/footer.php');
?>



<?php
// require('connection.php');

//if(isset($_POST['phone_number']) && !empty($_POST['phone_number']))
// {
//    $phone_number = $_POST['phone_number'];
//    // $phone_number = "7260002299";
//     $res = mysqli_query($con,"SELECT * FROM client_master WHERE client_phone='$phone_number'");
//     $result = mysqli_fetch_assoc($res);
//     print_r($result);

//     echo "<br>";
//     echo "<br>";
//     echo $result['client_name'];
    

// }else{
//         echo "<script>alert('empty filed')</script>";
//         echo "<script>window.location.href='fetch_client_details.php'</script>";
// }
?>