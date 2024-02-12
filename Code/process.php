<?php
// Admin l'ajout des fonctionnaliter ajouter supp et modif
if(!isset($_SESSION)) { 
  session_start(); } 
      //initialisation des variables 
        $nomproduit_ = '';
        $categorie_ = '';
        $prix_ ='';
        $description_ ='';
        $image_='';
        $description ='';
        $image='';
        $update = false ;
        $id = 0 ;
// connection a la base de donner 
 
$conn = new mysqli("localhost", "root", '', "chachnaq") or die(mysqli_error($conn)) ;
 
// l'Ajout
if (isset($_POST['submit'])){
    
    $nomproduit =$_POST['nomProduit'];
    $categorie =$_POST['Categorie'];
    $prix =$_POST['prix'];
    $description =$_POST['description'];
    $image =$_POST['image'];
    
    
    $conn -> query( "INSERT INTO produits VALUES (NULL, '$nomproduit' ,'$categorie' , '$prix','$description','$image' )");
    $_SESSION['message'] = 'ajout effectue avec succes ';
    $_SESSION['msg_type'] = 'success';
    header("location:admin.php");
  }
  
  // supression
  if (isset($_GET['supp'])){
    $id =$_GET['supp'];

    $conn -> query( "DELETE FROM produits WHERE idproduit=$id") or die(mysqli_error($conn));
    
    $_SESSION['message'] = 'la supression a ete effectue avec succes ';
    $_SESSION['msg_type'] = 'danger';
    header("location:admin.php");

  }
   
  // la Modification
   if ( isset($_GET['edit'])){
    $id =$_GET['edit'];
    $update = true ;
    $resultat = $conn -> query( "SELECT * FROM produits WHERE idproduit=$id") or die(mysqli_error($conn));
 
        $row =$resultat ->fetch_array();
        $nomproduit_ = $row['nomProduit'];
        $categorie_ = $row['Categorie'];
        $prix_ = $row['prix'];
        $description_ =$row['description'];
        $image_ =$row['image'];

   }
   

if ( isset($_POST['update'])){
    $id =$_POST['id'];
    $nomproduit =$_POST['nomProduit'];
    $categorie =$_POST['Categorie'];
    $prix =$_POST['prix'];
    $description =$_POST['description'];
    $image =$_POST['image'];
    $image_ =$_POST['image_'];
    if ( $image == ''){
      $image = $image_;
    }
    
    $resultat = $conn -> query( "UPDATE produits SET  nomProduit='$nomproduit' , Categorie = '$categorie' ,prix = '$prix' , description='$description' , image='$image' WHERE idproduit=$id ") or die(mysqli_error($conn));
    $_SESSION['message'] = 'Le produit a bien ete modifie  ';
    $_SESSION['msg_type'] = 'warning';
      
    header('location:admin.php');

   }
   ?>