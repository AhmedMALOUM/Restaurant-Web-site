
<?php
 $nom ='';
    $prenom ='';
    $date_naiss = '';
    $tel = '';
    $mail ='';
    $mdp ='';
    $mdpc = '';
  $conn = new mysqli("localhost", "root", '', "chachnaq") or die( mysqli_error($conn)) ;
  if (isset($_POST['submit'])){
    $nom =$_POST['nom'];
    $prenom =$_POST['prenom'];
    $date_naiss = $_POST[ 'Dnaiss'  ];
    $tel = $_POST[ 'telephone' ];
    $mail =$_POST['mail'];
    $mdp =$_POST['passeword'];
    $mdpc = $_POST[ 'passewordconf'];
    if ($mdp == $mdpc){
        $conn -> query( "INSERT INTO clients VALUES (NULL, '$nom' ,'$prenom' ,'$date_naiss','$tel', '$mail' , '$mdp')");
        echo "<div class='alert alert-success' role='alert'>
            inscription avec succes 
        </div>";
        $nom ='';
    $prenom ='';
    $date_naiss = '';
    $tel = '';
    $mail ='';
    $mdp ='';
    $mdpc = '';
    header('Location:./index.php');
    }
    else { echo "<div class='alert alert-danger' role='alert'>
        ERREUR : les mots de passe ne sont pas identiques
      </div>";}
}
  
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link type="text/css" rel="stylesheet" href="./css/inscription.css">
    <link type="text/css" rel="stylesheet" href="./css/header.css">
    <link type="text/css" rel="stylesheet" href="./css/alert.css">


</head>

<body>
    <div class="page">

    <div class="heder">


<div class="logo select">
    <a href="./index.php #acceuil"><img src="./images/logo2.png" alt=""> </a>
</div>
<div class="nav_bar">
    <a href="./index.php #acceuil"class="nav3 select"> <ul > Acceuil </ul></a>
    <a href="carte.php"class="nav0 select"><ul >La carte</ul> </a>
    <a href="#"class="nav1 select"><ul >Reserver</ul> </a>
    <a href="./index.php #contact"class="nav2 select"><ul >Contact</ul> </a>

</div>
<div class="co_insc">
    <a href="./connection_user.php" class="se_connecter select"><h1>Se connecter</h1></a>
    <a href="./Inscription.php" class="s_inscrire select"><h1>S'inscrire</h1></a>
</div>
</div>
        <div class="body">
            <!-- formulaire d'insription -->
            <h1 class="titre"> Inscription </h1>
            <div class="formulaire">
                <form method="POST">
                    <div class="np">
                        <div class="nom">

                            <input type="text" name="nom" id="nom" size="30" placeholder="Nom" minlength="2" maxlength="30" required>
                        </div>

                        <div class="p_nom">

                            <input type="text" name="prenom" id="prenom" size="30" placeholder="Prenom" minlength="2" maxlength="30"required> 
                        </div>
                    </div>
                    <div class="date">
                        <label class="d_naiss" for="start">Date de naissance</label>
                        <input class="in_d_naiss" type="date" id="start" name="Dnaiss" value="2003-01-01" max="2004-12-31" min="1950-01-01" required>  
                        <input type="tel" class="number" name="telephone" placeholder ="0559 72 73 28"  pattern="[0-9]{10}" size="13" required> 
                    </div>
                    <div class="mail">

                        <input  type="Email" name="mail" id="mail" placeholder="E-mail" required>
                    </div>
                    <div class="bt">
                        <input type="submit" name="submit" value="S'inscrire" >
                    </div>



                    <div class="mp">
                        <input type="password" name="passeword" name="ps" id="p" placeholder="Mot de passe" required>
                        <input type="password"  name="passewordconf" id="p" placeholder="Confirmer le mot de passe" required>
                    </div>


                </form>

            </div>
        </div>

    </div>
</body>

</html>