<?php
  require('./middlewares/session.php');
  require('./middlewares/auth.php'); 
  require('./middlewares/no-cache.php');
  require('./templates/html.php');
  require('./templates/header.php');
  require('./lib/connection.php');
?>
<section>
  <div class="row">
    <div class="col-lg-2">      
        <?php require('./templates/main-menus.php');?>
    </div>
    <div class="col-lg-10">
      <div class="container">
      <h1>Complain Details</h1> 
      <?php 
          $phone_number = "";
          if(isset($_POST['phone_number']) && !empty($_POST['phone_number'])) {
          $phone_number=$_POST['phone_number'];             
        }
      ?>   
      <form  class="py-4" action="complain-details.php" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="phone_number" placeholder="Company phone number" value="<?php echo $phone_number ?>" aria-label="Company's phone number" aria-describedby="button-addon2">
          <button class="btn btn-primary" type="submit" id="button-addon2">Search company</button>
        </div>
      </form>

      <div>
        <?php
            if(!$phone_number) return;
            $res = mysqli_query($con,"SELECT * FROM client_master WHERE client_phone LIKE '%$phone_number%'");
            $company = mysqli_fetch_assoc($res);               
        ?>
            <div class="d-flex flex-column align-items-center justify-content-center py-2">
              <?php 
               if(!$company){               
              ?>
                <p>No company detail found<p>
              <?php
               }
                else{
              ?>   
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Firm Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Phone number</th>
                      <th scope="col">Type</th>
                    </tr>
                  </thead>
                  <tbody>                   
                    <tr>
                      <th scope="row"><?php echo $company['firm_name'] ?></th>
                      <td><?php echo $company['client_address'] ?></td>
                      <td><?php echo $company['client_phone'] ?></td>
                      <td><?php echo $company['client_type'] ?></td>
                    </tr>                   
                  </tbody>
                </table>              
            </div>    
        <?php
            }
        ?>
      <div>

      <div>
            <?php
             if($phone_number && $company) {
              ?>
              <form class="py-4" method="POST" action="company/api.complain-company.php">
                  <div class="mb-3">
                    <label for="work" class="form-label">Work</label>
                    <textarea class="form-control" id="work" rows="3"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="remark" class="form-label">Remark</label>
                    <textarea class="form-control" id="remark" rows="3"></textarea>
                  </div>
                  <div class="mb-3">
                    <select class="form-select" aria-label="Status">
                      <option selected >Status</option>
                      <option value="DONE">Done</option>
                      <option value="PENDING">Pending</option>
                      <option value="REFERRED">Referred</option>
                    </select>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary">Save complain</button>
                  </div>
              </form>
            <?php 
             }             
            ?>
      </div>
      </div>
    </div>
</section>

<?
  require('./templates/footer.php');
?>
