




<?php
   
    $url = $_GET['page'];
    $file = "pages/".$url.".php";
    
    
    
    if(file_exists($file)) {
        include($file);
    } else {
        include("pages/error.php");
    }


?>
