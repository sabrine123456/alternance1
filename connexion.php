<?php

    include('db-connect.php'); 

// la page login
    if (isset(($_POST['email'])))
    {
        $email = $_POST['email'];  
        $password = $_POST['pass'];  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from inscription where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){  
            include 'deconnexion.html';
            echo "<h2><center> Bienvenue ".$row['firstName']."</center></h2>";  
            echo "<a href=accueil.php> Afficher les produits </a><br>";
            echo "<a href=creer.php> Créer un nouveau produit </a>";
        }  
        else{  
            include 'connexion.html';
            echo "<h2><center> Vérifier votre email ou mot de passe .</center></h2>";  
        } 
    }
 
?>

    
