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
      <h1>Customer Master</h1>
      <p>
        Enter mobile number
      </p>
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
</section>

<?
  require('./templates/footer.php');
?>