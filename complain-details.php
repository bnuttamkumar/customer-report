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