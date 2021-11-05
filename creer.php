<?php
include 'db-connect.php';  
include 'creer.html';
if (isset(($_POST['produit'])))
{
    $produit= $_POST['produit'];
    echo $produit;
    $prix=$_POST['prix'];
    echo $prix;
    // $req = $con->prepare("INSERT INTO `produit`(`produit`, `prix`, `id`) VALUES ('$produit', '$prix', ?)");
    // $req->execute(array($produit, $prix));
    
    // $sql = "INSERT INTO `produit`(`nom_produit`, `prix`, `id`) VALUES ('$produit', '$prix', ?)";
    
    // $req = $con->prepare($sql);
    // $req->execute();
    $sql = "INSERT INTO `produit` values('$produit', '$prix', NULL)";
    $req = $con->prepare($sql) ;           
    $req->execute();
    header("Location: accueil.php");
}
