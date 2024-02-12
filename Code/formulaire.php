
<?php // ajouter le contacte a la base de donnee 
// connection a la base de donner 
$conn = new mysqli("localhost", "root", '', "chachnaq") or die(mysqli_error($conn)) ;

if ( isset($_POST['envoyer'])){
	//recuperation de valeur
	$Nom=$_POST['nom'];
	$Prenom=$_POST['prenom'];
	$Adresse=$_POST['mail'];
	$Option=$_POST['objet'];
	$Message=$_POST['message'];
	

	// ajout a la base
	$conn -> query( "INSERT INTO contact VALUES (NULL,'$Nom','$Prenom','$Adresse','$Option','$Message')");
       

    header("location:index.php?succ=1#contact");

   }
   ?>
