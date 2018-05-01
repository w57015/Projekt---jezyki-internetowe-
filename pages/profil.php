<?php

session_start();

if(!isset($_SESSION['zalogowany']))
{
    header('Location: index.php?page=e-learning');
    exit();
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
							<li> <a href="index.php?page=uslugi"><span class="link">Materiały szkoleniowe </span></a></li>
							<li> <a href="index.php?page=portfolio"><span class="link">Testy </span></a></li>
                                                        <li> <a href="index.php?page=e-learning"><span class="link">Profil </span></a></li>
                                                        <li> <a href="index.php?page=logout"><span class="link">Wyloguj </span></a></li>
						</ul>
					</div>	
					<!-- koniec div gorne_menu -->
                                            <div id="powitanie">
                                    <?php


                                    echo "<br><br>Witaj <em><strong>".$_SESSION['username']."</strong></em>!<br>";
                                    
                                 
                                     
                                    ?>
                                        </div>	
                                    <!-- koniec div powitanie -->
				</div>
				<!-- koniec div gorna_czesc_kontenera -->
			
				<div id="dolna_czesc_zawartosci">
                                
                                    
                                    <div id="srodkowa_czesc_zawartosci">
                                    <div id="powitanie_info">
                                        <p>W zakładce <strong>Materiały szkoleniowe</strong> odnajdziesz wszelkie udostępnione Ci prezentacje oraz artykuły.</p>  <p>Jeżeli uważasz, że wiesz już wszystko, przejdź od razu do zakładki <strong>Testy</strong>.</p>
                                        <p>W profilu, będziesz mógł ustawić sobie kotka na avatara.</p> <p>Wyloguj to wyloguj. </p> 
                                    </div>
                                        <!-- koniec div powitanie.info -->                                     
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
