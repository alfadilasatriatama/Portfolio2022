<?php 

@$page = $_GET['page'];
      if($page) {
        switch ($page) {
          case 'about':
            include "page/about.php";
            break;
          
          case 'experience': 
            include "page/experience.php";
            break;
          
          case 'contact': 
            include "page/contact.php";
            break;
          
          case 'mygallery': 
            include "page/mygallery.php";
            break;       
        }
      }elseif($_POST) {
        include "page/send.php";
      }else {
        include "page/about.php";
      }
