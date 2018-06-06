<?php

session_start();

if(!isset($_SESSION['zalogowany']))
{
    header('Location: index.php?page=e-learning');
    exit();
    
    $con = mysqli_connect('localhost', 'id5275700_root', 'vertrigo', 'quiz');
    if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
  
}

   
        for ($i=1; $i<12; $i++){
    $quiz = "SELECT tresc FROM pytania where id= $i";
    $query = mysqli_query($con, $quiz);
    
    while ($r = mysqli_fetch_array($query)) {

            ?>
        <h4> <?php echo $r['tresc'] ?> </h4>
        
        <?php
        
          $quiz = "SELECT odpa FROM pytania where id= $i";
          $query = mysqli_query($con, $quiz);
            
            while ($r = mysqli_fetch_array($query)){
                ?>
        
        <input type="radio" name="quizcheck[<?php echo $r['id'];?>" value="<?php echo $r['odpa']; ?>">
            
        <?php echo $r['odpa']; ?>
        

<?php

            }
        }
    } 
        
    
    
    
    ?>


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
							<li> <a href="index.php?page=materialy"><span class="link">Materiały szkoleniowe </span></a></li>
							<li> <a href="index.php?page=testy"><span class="link">Testy </span></a></li>
                                                        <li> <a href="index.php?page=konto"><span class="link">Profil </span></a></li>
                                                        <li> <a href="index.php?page=logout"><span class="link">Wyloguj </span></a></li>
						</ul>
					</div>	
					<!-- koniec div gorne_menu -->
                                         
				</div>
				<!-- koniec div gorna_czesc_kontenera -->
			
				<div id="dolna_czesc_zawartosci">
                                    
                                    
                                    
                                
                                    
                                    <div id="srodkowa_czesc_zawartosci">
                                                                    
                                    </div>
                                    <!-- koniec div srodkowa czesc zawartosci -->
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
