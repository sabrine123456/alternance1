<?php
include 'db-connect.php';
    $email = $_POST['email'];  
    $password = $_POST['pass'];  
    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $email = mysqli_real_escape_string($con, $email);  
    $password = mysqli_real_escape_string($con, $password);  
    $nom= $_POST["firstname"];
    $prenom=$_POST["lastname"];
    $email1=$_POST["email"];
    $password=$_POST['pass'];
    $sql = "select * from inscription where email = '$email' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 
    if($count == 0){  
        if (($row) && ($email == ''))
        { 
            echo '<p> utilisateur existant </p>';
        }
        $req = $con->prepare("INSERT INTO `inscription`(`firstName`, `lastName`, `email`, `password`) VALUES ('$nom', '$prenom', '$email1', '$password')");
        $req->execute();
        header('Location: connexion.html');
    }  
    else{  
        header("Location: formulaire.html");
        echo "<h1> Vérifier votre email ou mot de passe .</h1>";  
    } 
  
include 'formulaire.html';
?>