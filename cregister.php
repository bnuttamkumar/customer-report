<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Ten</title>
</head>
<body>
    <div class="row">
<div class="header col-md-12">
  <center><h1>This is the Main Header Area..!</h1></center>
</div>
<hr>
<div class="menu col-md-3">
  <ul>
      <h2>Menu Bar</h2>
    <li> <a href="cregister.php">Registeration</a> </li>
    <li><a href="clientmaster.php">Client Master</a> </li>
    <li><a href="complaindetails.php">complain Details</a> </li>
    <li><a href="clientreport.php">Client Report</a> </li>
  </ul>
</div>

<div class="main col-md-9">
    <center> <h2>Main content part Area</h2></center>

 <!-- login page div -->

    <div class="col-md-10 offset-1" id="loginpage">
<br>
    <center> <h3>client registration</h3></center>

     <form action="login-2.php" method="post">
         <div class="row">
               <div class="form-group col-md-6">
                  <label for="cname">client name:</label>
                  <input type="text" class="form-control" id="cname" name="cname">
               </div>
                <div class="form-group col-md-6">
                     <label for="cfirm">client firm Nmae:</label>
                     <input type="text" class="form-control" id="cfirm" name="cfirm">
                </div>
         </div>

       <div class="row">
                 <div class="form-group col-md-6">
                     <label for="caddress">client address:</label>
                     <input type="text" class="form-control" id="caddress" name="caddress">
                </div>
             <div class="form-group col-md-6">
                 <label for="phone">client mobile number:</label>
                 <input type="number" class="form-control" id="cphone" name="cphone">
             </div>
       </div>

       <div class="row">
          <div class="form-group col-md-6">
              <label for="emial">Client Eamil:</label>
              <input type="email" class="form-control" id="cemail" name="cemail">
          </div>
         <div class="form-group col-md-6">
             <label for="clienttype">client type:</label>
             <input type="text" class="form-control" id="ctype" name="ctype">
         </div>
       </div>

       <div class="row">
          <div class="form-group col-md-6">
              <label for="pwd">Password:</label>
              <input type="date" class="form-control" id="expirydate" name="expirydate">
          </div>
         <div class="form-group col-md-6">
             <label for="pwd">Is Cloud:
                <div class="checkbox">
         <label class="checkboxvalue"><input type="radio" name="remember" value="yes" checked> Yes</label>
         <label class="checkboxvalue"><input type="radio" name="remember" value="no"> No</label>
       </div>
         </div>
       </div>



       <div>
         <input type="submit" class="btn btn-success btn-block btn-lg" name="submit" value="register">
       </div>

     </form>

    </div>

</div>
</div>
</body>
</html>