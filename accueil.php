<?php
include 'db-connect.php';
include 'deconnexion.html';


$sql = "SELECT * FROM `produit`";  
 //$result = mysqli_query($con, $sql);  
 //$rows = mysqli_fetch_array($result, MYSQLI_ASSOC);  
 //$count = mysqli_num_rows($result); 
// $req = mysqli_query($con,$sql);
// $data = mysqli_fetch_array($req);

$req = $con->query($sql);
$rows = $req->fetch_all(MYSQLI_ASSOC);


echo $rows['prix'];

include('accueil.phtml'); 