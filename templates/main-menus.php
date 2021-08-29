<div >
  <p class="px-4">Menus Bar</p>
  <ul class="menu__container p-0 d-flex flex-lg-column flex-sm-row">
      <?php 
          $menus =[
          ["title"=>"Login","href"=>"login"],
          ["title"=>"Customer Master","href"=>"customers.php"],
          ["title"=>"Complain Details","href"=>"complain-details.php"],
          ["title"=>"Report","href"=>"report.php"],
          ];
        
          foreach($menus as $menu){
            
            ?>
              <li class="menu__item px-4 text-nowrap "><a href="<?php echo $menu['href']?>"><?php echo $menu['title']?></a> </li>
            <?php
          }
          ?>
    </ul>
  </div>
