<?php
include 'db-connect.php';
include 'deconnexion.html';


//   $sql = "SELECT * FROM `produit`";  
//   $req = $con->query($sql);
//   $rows = $req->fetch(MYSQLI_ASSOC);
// $count = mysqli_num_rows($result); 
// // $req = mysqli_query($con,$sql);
// // $data = mysqli_fetch_array($req);
//echo $post['prix'];

    $id=$_GET['id'];
    $produit= $_POST["produit"];
    $prix=$_POST["prix"];
    $sql = "UPDATE `produit` SET `nom_produit` = '$produit', `prix` = '$prix' WHERE id = '$id' ";
    $result = $con->prepare($sql);
    $result->execute();


include 'edit.phtml';
