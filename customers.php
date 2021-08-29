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
      <div class="container">
        <h1>Customer Master</h1>        
        <form action="company/api.company-register.php" method="post">
           <div class="row">
                 <div class="form-group col-md-6">
                    <label for="cname">Client Name</label>
                    <input type="text" class="form-control" id="cname" name="cname">
                 </div>
                  <div class="form-group col-md-6">
                       <label for="cfirm">Firm Name</label>
                       <input type="text" class="form-control" id="cfirm" name="cfirm">
                  </div>
           </div>

           <div class="row">
                     <div class="form-group col-md-6">
                         <label for="caddress">Client Address</label>
                         <input type="text" class="form-control" id="caddress" name="caddress">
                    </div>
                 <div class="form-group col-md-6">
                     <label for="phone">Client mobile number</label>
                     <input type="number" class="form-control" id="cphone" name="cphone">
                 </div>
           </div>

           <div class="row">
              <div class="form-group col-md-6">
                  <label for="emial">Client Email</label>
                  <input type="email" class="form-control" id="cemail" name="cemail">
              </div>
             <div class="form-group col-md-6">               
                 <label for="clienttype">Client type</label>
                 <select class="form-control" id="clienttype" aria-label="Client type" name="ctype" required>                      
                      <option value="TENNETG">TENNETG</option>
                      <option value="DISTRIBUTIONNETG">DISTRIBUTIONNETG</option>
                      <option value="UNIVERSENETG">UNIVERSENETG</option>
                  </select>
             </div>
           </div>

           <div class="row">
              <div class="form-group col-md-6">
                  <label for="expirydate">Expiry Date</label>
                  <input type="date" class="form-control" id="expirydate" name="expirydate">
              </div>
             <div class="form-group col-md-6">
                 <label for="isCloud">Is Cloud:
                  <div class="checkbox">
                    <label class="checkboxvalue"><input type="radio" name="isCloud" value="yes" checked> Yes</label>
                    <label class="checkboxvalue"><input type="radio" name="isCloud" value="no"> No</label>
                  </div>
             </div>
           </div>
           <div class="py-2">
             <button type="submit" class="btn btn-primary btn-block btn-lg">Button</button>
           </div>
     </form>
      </div>   
    </div>
</section>

<?
  require('./templates/footer.php');
?>