<?php 

@$i = $_GET['page'];
          if(!empty($i)){
            if($i == 'about'){
              echo "A.Satriatama";
            }else if($i == 'experience') {
              echo "Experience";
            }else if($i == 'mygallery') {
              echo "My Gallery";
            }else {
              echo "Contact";
            }
          }else{
            echo"A.Satriatama";
          }