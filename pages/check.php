<?php
    include'testy.php';
    $con = mysqli_connect('localhost', 'id5275700_root', 'vertrigo', 'quiz');
    if (!$con) {
    die("Connection failed: " . mysqli_connect_error());}
    
  
         $counter = 0;
         $Resultans = 0;
            if(isset($_POST['submit'])){
                /*$checked_count = 0;
                for($i=0; $i<=$r['id']; $i++) {
                if(!empty($_POST['quizcheck.$r["id"]'])){
                    
                    $checked_count++; 
                } 
                else if ($checked_count == $r['id']+1) {
                    
                
                echo "Uzupelniles ".$checked_count."pola";*/
                                    
          	
          
            // Loop to store and display values of individual checked checkbox.
            $selected = $_POST['quizcheck'];
            
            $q1= " select * from odpowiedzi ";
            $ansresults = mysqli_query($con,$q1);
            $i = 1;
            while($rows = mysqli_fetch_array($ansresults)) {
            	$flag = $rows['id'] == $selected[$i];
            	
            			if($flag){
            								
            				$counter++;
            				$Resultans++;
            				echo "Well Done! your ". $counter ." answer is correct <br><br>";
            			}else{
            				$counter++;
            				echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
            			}					
            		$i++;		
            	}
            	
            	
    		
    		
	    	
	            echo " Your score is ". $Resultans.".";
	            }
	            /*else{
	            echo "<b>Please Select Atleast One Option.</b>";
	            }
	            }
            }*/
	       
            
            
/*            
            $name = $_SESSION['username'];
            $finalresult = " insert into usersession(username,u_q_id, u_a_id) values ('$name','5','$Resultans') ";
            $queryresult= mysqli_query($con,$finalresult); 
            // if($queryresult){
            // 	echo "successssss";
            // }*/
            ?>

