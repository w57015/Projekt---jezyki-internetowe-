<?php

    session_start();
    
    if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
    {
        header('Location: index.php?page=e-learning');
        exit();
    }
    
    require_once "connect.php";
    
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if($polaczenie->connect_errno!=0)
    {
        echo "Error".$polaczenie->connect_errno;
    } else {
       $login = $_POST['login'];
       $haslo = $_POST['haslo'];
       
       $sql = "SELECT * FROM users where username='$login' AND pass='$haslo'";
       if($rezultat = @$polaczenie->query($sql))
       {
           $ilu_userow = $rezultat->num_rows;
           if($ilu_userow>0)
           {
               $_SESSION['zalogowany'] = true;
               
               $wiersz = $rezultat->fetch_assoc();
               $_SESSION['id'] = $wiersz['id'];
               $_SESSION['username'] = $wiersz['username'];
               $_SESSION['email'] = $wiersz['email'];
               
               unset($_SESSION['blad']);
               $rezultat->close();
               header('Location: index.php?page=profil');
               
                     
           }else {
               
               $_SESSION['blad'] = '<span style="color:red"> Nieprawidłowy login lub hasło! </span>';
               header('Location: index.php?page=e-learning');
           }
       }
       
       $polaczenie->close();
    }
    
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    
    


?>

