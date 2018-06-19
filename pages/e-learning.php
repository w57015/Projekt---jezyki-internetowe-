<?php
    session_start();
    

    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true))
        {
         header('Location: index.php?page=profil');
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
	
	<title> E-learning | Usługi marketingowe - Karpatia Promotion </title>
	
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
		
							<li> <a href="index.php?page=home"><span class="link">Strona główna</span></a></li>
							<li> <a href="index.php?page=uslugi"><span class="link">Usługi </span></a></li>
							<li> <a href="index.php?page=portfolio"><span class="link">Portfolio </span></a></li>
                                                        <li> <a href="index.php?page=e-learning"><span class="link">E-learning </span></a></li>
							<li> <a href="index.php?page=kontakt"><span class="link">Kontakt </span></a></li>
						</ul>
					</div>	
					<!-- koniec div gorne_menu -->		
				</div>
				<!-- koniec div gorna_czesc_kontenera -->
				<div id="zawartosc">
				<div id="srodkowa_czesc_zawartosci">
				
                                    <div id="logowanie_info">
                                        <br> <br>
                                        <p> Witaj w szkoleniowej części <strong>Karpatia Promotion!</strong> </p>
                                    <p> Zaloguj się na swoje konto, aby uzyskać dostęp do materiałów szkoleniowych. </p>
                                    
                           
                                    </div>
                                    <!-- koniec div logowanie_info -->
                                    <div id="logowanie_form">
                                    <form action="index.php?page=logowanie" method="post">
                                        
                                        <br> <br> <strong>Login:</strong> <br> <input type="text" name="login" /> <br>
                                         <strong>Hasło: </strong><br> <input type="password" name="haslo" /> <br> <br>
                                         <input type="submit" value="Zaloguj się" />           
                                            
                                    </form>
                                    </div>
                                    <!-- koniec div logowanie_form -->
                                   <?php
                                        if(isset($_SESSION['blad'])){
                                            echo $_SESSION['blad'];
                                        }
                                   ?>
                                    
				</div>
				<!-- koniec div srodkowa_czesc_zawartosci -->
				</div>
				<!-- koniec div zawartosc -->
			
				<div id="dolna_czesc_zawartosci">
				
				
				</div>
				<!-- koniec div dolna_czesc_zawartosci -->
					<div id="copyright">
						&copy; 2018 created by <strong> Magdalena Kichman </strong> 
					
					</div>
				<!-- koniec div copyright -->
			</div>
			<!-- koniec div zawartosc -->
				
			</div>
			 <!--koniec div kontener -->
	</body>
	
	
	
	
</html>




