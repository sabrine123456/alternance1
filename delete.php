<?php 
include 'db-connect.php';
include 'deconnexion.html';

// supprimer un produit
$id=$_GET['id'];
$sql = "DELETE FROM `produit` WHERE id = '$id' ";
$result = $con->prepare($sql);
$result->execute();
header("Location: accueil.php");