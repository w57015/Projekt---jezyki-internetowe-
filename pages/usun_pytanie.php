


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
			
				<div id="zawartosc">
                                    <div id="srodkowa_czesc_zawartosci">
                                       <?php

                            if(!isset($_POST['nr_pytania'])){
                            echo "Prosze wprowadzic numer pytania";
                            }

                             $con = mysqli_connect('localhost', 'id5275700_root', 'vertrigo', 'quiz');
                           if (!$con) {
                           die("Connection failed: " . mysqli_connect_error());}

                           $id = $_POST['nr_pytania'];

                           $usun_odp= "DELETE FROM `odpowiedzi` WHERE `odpowiedzi`.`id` = $id;";
                           $usun_p= "DELETE FROM `pytania` WHERE `pytania`.`id` = $id;";

                           if (mysqli_query($con, $usun_p)) {
                           echo "<h5>Pytanie zostało usuniete<br> <br> </h5>";
                           } else {
                               echo "Error: " . $usun_p . "<br>" . mysqli_error($con);
                           }

                           if (mysqli_query($con, $usun_odp)) {
                           echo "<h5>Odpowiedzi zostały usuniete<br> <br> </h5>";
                           } else {
                               echo "Error: " . $usun_odp . "<br>" . mysqli_error($con);
                           }
     
                        ?>
                             
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

