<?php
include 'db-connect.php';
include 'deconnexion.html';

// afficher les produit et prix avec un id 
$id=$_GET['id'];
  $sql = "SELECT * FROM `produit` where id= '$id'";  
  $req = $con->query($sql);
  $rows = $req->fetch_all(MYSQLI_ASSOC);
  $prod=$rows[0]["nom_produit"];
  $price=$rows[0]["prix"];

// modifier un produit
if(isset($_POST['produit'])){
    $id=$_POST['id'];
    $produit= $_POST["produit"];
    $prix=$_POST["prix"];

    $sql1= "UPDATE `produit` SET `nom_produit`= '$produit' ,`prix`= '$prix'  WHERE id = '$id'";   
    $result = $con->prepare($sql1);
    $result->execute();
    header("Location: accueil.php");
}
  

include 'edit.phtml';
