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
        <h1>Report</h1>
        <div class="py-4">
          <?php
            $from="";
            $to="";
            $status="";

            if(isset($_POST)){
              extract($_POST);
        
              $qry= " SELECT * FROM `complain_details`
                      LEFT JOIN `client_master` ON `complain_details`.`client_id`=`client_master`.`client_id`
                      WHERE (`entry_date` BETWEEN '$from' AND '$to') AND `status`='$status'
                    ";

              $res = mysqli_query($con,$qry);            
              $complains = mysqli_fetch_all($res,MYSQLI_ASSOC);     
            }            

          ?>

          <form action="report.php" method="POST">
            <div class="d-flex flex-lg-row flex-column">
              <div class="mb-3 px-2">
                <label for="from">From</label>
                  <input type="date" class="form-control" aria-label="from" id="from" name="from" value="<?php echo $from?>" required/>                                      
              </div>
              <div class="mb-3 px-2">
                <label for="to">To</label>
                  <input type="date" class="form-control" aria-label="to" id="to" name="to" value="<?php echo $to?>" required/>                                      
              </div>
              <div class="mb-3 px-2">
                <label for="status">Status</label>
                  <select class="form-control" aria-label="Status" id="status" name="status"  value="<?php echo $status?>" required>                      
                    <option value="DONE">Done</option>
                    <option value="PENDING">Pending</option>
                    <option value="REFERRED">Referred</option>
                  </select>
              </div>            
            </div>
            <div class="mb-3 px-2" >
                <button type="submit" class="btn btn-primary">Get report</button>
              </div>
          </form>
        </div>
        <div class="py-4">
          <?php
            if(!$complains){
              ?>

            <?php
            } else{
                ?>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Client ID</th>
                        <th scope="col">Work details</th>
                        <th scope="col">Remarks</th>
                        <th scope="col">Date</th>
                        <th scope="col">User Phone</th>
                        <th scope="col">Client Name</th>
                        <th scope="col">Firm Name</th>
                        <th scope="col">Client Address</th>
                        <th scope="col">Client Phone</th>
                        <th scope="col">Client Email</th>
                        <th scope="col">Client Type</th>
                        <th scope="col">Expiry Date</th>
                        <th scope="col">Is Cloud</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php  
                      foreach($complains as $complain){
                        ?>
                        <tr>
                          <th scope="row"><?php echo $complain['complain_id'] ?></th>
                          <th scope="row"><?php echo $complain['client_id'] ?></th>
                          <td><?php echo $complain['work_details'] ?></td>
                          <td><?php echo $complain['remarks'] ?></td>
                          <td><?php echo $complain['entry_date'] ?></td>
                          <td><?php echo $complain['user_phone'] ?></td>
                          <td><?php echo $complain['client_name'] ?></td>
                          <td><?php echo $complain['firm_name'] ?></td>
                          <td><?php echo $complain['client_address'] ?></td>
                          <td><?php echo $complain['client_phone'] ?></td>
                          <td><?php echo $complain['client_email'] ?></td>
                          <td><?php echo $complain['client_type'] ?></td>
                          <td><?php echo $complain['expiry_date'] ?></td>
                          <td><?php echo $complain['Is_cloud'] ?></td>
                        </tr>
                    <?php
                      }                  
                    ?>
                    </tbody>
                  </table>
                </div>
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