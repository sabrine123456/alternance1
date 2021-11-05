<?php
include 'db-connect.php';
include 'deconnexion.html';

// afficher tout les produit dans la page accueil
$sql = "SELECT * FROM `produit`";  
$req = $con->query($sql);
$rows = $req->fetch_all(MYSQLI_ASSOC);

include('accueil.phtml'); 