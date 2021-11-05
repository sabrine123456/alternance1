<?php
include 'db-connect.php';  
include 'creer.html';

// créer un nouveau produit
if (isset(($_POST['produit'])))
{
    $produit= $_POST['produit'];
    echo $produit;
    $prix=$_POST['prix'];
    echo $prix;
    $sql = "INSERT INTO `produit` values('$produit', '$prix', NULL)";
    $req = $con->prepare($sql) ;           
    $req->execute();
    header("Location: accueil.php");
}
