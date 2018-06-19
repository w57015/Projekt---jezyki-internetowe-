<?php

session_start();

if(!isset($_SESSION['zalogowany']))
{
    header('Location: index.php?page=e-learning');
    exit();
    
    

}?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml-transitionsl.dtd">
<html xmins="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="pl" />
	
	<meta name="author" content="Magdalena Kichman" />
	<meta name="robots" content="index, follow" />
	
	<title> Usługi marketingowe - Karpatia Promotion </title>
	
	<meta name="description" content ="Usługi marketingowe w zakresie pozycjonowania stron internetowych w wyszukiwarce Google - SEO" />
	<meta name="keywords" content="pozycjonowanie, SEO, google, strony internetowe, marketing" />
		<link rel="stylesheet" href="style.css" type="text/css"/>
		
	</head>
      <body>
          <!--<div align="center">   NIE DZIALA PRZEZ TO LOGO-->
			<div id="kontener">
				<div id="gorna_czesc_kontenera">
                                    
					<div id="gorne_menu">
						<ul id="wlasciwe_gorne_menu">
		
							<li> <a href="index.php?page=home"><span class="link">Strona Główna</span></a></li>
							<li> <a href="index.php?page=testy"><span class="link">Testy </span></a></li>
                                                        <li> <a href="index.php?page=profil"><span class="link">Profil </span></a></li>
                                                        <li> <a href="index.php?page=logout"><span class="link">Wyloguj </span></a></li>
						</ul>
					</div>	
					<!-- koniec div gorne_menu -->
                                         
				</div>
				<!-- koniec div gorna_czesc_kontenera -->
			            
                                    <div id="srodkowa_czesc_zawartosci">

<?php
    //include'testy.php';
    $con = mysqli_connect('localhost', 'id5275700_root', 'vertrigo', 'quiz');
    if (!$con) {
    die("Connection failed: " . mysqli_connect_error());}
    
  
         $counter = 0;
         $Resultans = 0;
            if(isset($_POST['submit'])){
                                
            $selected = $_POST['quizcheck'];
            
            $q1= " select * from odpowiedzi ";
            $ansresults = mysqli_query($con,$q1);
            $i = 1;
          
            while($rows = mysqli_fetch_array($ansresults)) {
           
                        
                    if($selected[$i] == $rows['odp_praw']){
                                         $counter++;
            				$Resultans++;
                                        ?>
                                        <h5>  <?php echo "Dobra robota! Twoja ". $counter ." odpowiedź jest prawidłowa <br>"; ?> </h5>
            			<?php }else{
            				$counter++;
                                        ?>
                                        <h5> <?php echo "Niestety! Twoja ". $counter ." odpowiedź jest nieprawidłowa <br>";?> </h5>
            			<?php }					
                    $i++;
                }             
            }
            ?> <h6> <?php echo " <br> <br> Twój wynik: ". $Resultans.".";?> </h6>
	          
            

                                        </div>
                                    <!-- koniec div srodkowa czesc zawartosci -->
                                    <div id="dolna_czesc_zawartosci">
                                    <div id="copyright">
						&copy; 2018 created by <strong> Magdalena Kichman </strong> 
					
					</div>
				<!-- koniec div copyright -->
				</div>
				<!-- koniec div dolna_czesc_zawartosci -->
                                
                               
					
			
				 </div>
			<!-- koniec div zawartosc -->
			</div>
			 <!--koniec div kontener -->
          
          
                
</body>
</html>


