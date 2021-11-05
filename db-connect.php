<?php

// la page connexion avec la base de données
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "alternance";  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

?>