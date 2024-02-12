<?php
  if(!isset($_SESSION)) { 
    session_start();
    
     } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./css/carte.css">
    <link type="text/css" rel="stylesheet" href="./css/header.css">

    <title>Espace Admin</title>
</head>

<body>
    <!-- _______________________Header_______________________________________-->
    <?php require 'header.php'?>    <!--___________connection a la bdd____________________-->

    <?php
        $conn = new mysqli("localhost", "root", '', "chachnaq") or die(mysqli_error($conn)) ;                       
     ?>

    <!--___________corp____________________-->
   
    <div class="contenue">
        <div class="corp">

            <!--___________composant du menu____________________-->


            <!--___________Plat__________________-->
            <!--___________requette a la base de donner__________________-->
            <?php
                    $result =   $conn -> query( "SELECT * FROM produits WHERE Categorie = 'plat'")or die(mysqli_error($conn)) ;                          
                ?>
            <div class="plat">
                <div class="text">NOS <br> Produit</div>
                <div class="composant">

                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="cont">
                        <div class="carte">
                            <div class="image"> <img src="img/<?php echo $row['image'] ;?>"></div>
                            <div class="nom"><?php echo $row['nomProduit'] ;?></div>
                            <div class="description"><?php echo $row['description'];?></div>
                            <div class="prix"><?php echo $row['prix'].' DA'  ;?></div>
                        </div>
                        <div class="arrier"> 
                        <form method="POST" action='mon_panier.php?id=<?php echo $row['idproduit'] ;?>' >
                            <input type="number" name="quantity" value="1" >
                            <input type="hidden" name="nom" value="<?php echo $row['nomProduit'] ;?>" >
                            <input type="hidden" name="prix" value="<?php echo $row['prix'] ;?>" >
                            <input type="submit" name="Ajouter_au_panier" value="Ajouter au panier" class="button">

                       </form>
                        <a class='arrier' href=''></a></div>
                    </div>
                    <?php endwhile ;?>

                </div>

            </div>
            <!--___________Dessert__________________-->

            <!--___________requette a la base de donner__________________-->
            <?php
                    $result =   $conn -> query( "SELECT * FROM produits WHERE Categorie = 'dessert'")or die(mysqli_error($conn)) ;                          
                ?>
            <div class="dessert">
                <div class="text">NOS <br> Dessert</div>
                <div class="composant">

                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="cont">
                        <div class="carte">
                            <div class="image"> <img src="img/<?php echo $row['image'] ;?>"></div>
                            <div class="nom"><?php echo $row['nomProduit'] ;?></div>
                            <div class="description"><?php echo $row['description'] ;?></div>
                            <div class="prix"><?php echo $row['prix'].' DA' ;?></div>
                        </div>
                        <div class="arrier"> 
                        <form method="POST" action='mon_panier.php?id=<?php echo $row['idproduit'] ;?>' >
                            <input type="number" name="quantity" value="1" >
                            <input type="hidden" name="nom" value="<?php echo $row['nomProduit'] ;?>" >
                            <input type="hidden" name="prix" value="<?php echo $row['prix'] ;?>" >
                            <input type="submit" name="Ajouter_au_panier" value="Ajouter au panier" class="button">

                       </form>
                        <a class='arrier' href=''></a></div>
                    </div>
                    <?php endwhile ;?>

                </div>
            </div>
            <!--___________Boissons__________________-->

            <!--___________requette a la base de donner__________________-->
            <?php
                    $result =   $conn -> query( "SELECT * FROM produits WHERE Categorie = 'boisson'")or die(mysqli_error($conn)) ;                          
                ?>
            <div class="boissons">
                <div class="text">NOS <br> Boissons</div>
                <div class="composant">

                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="cont">
                        <div class="carte">
                            <div class="image"> <img src="img/<?php echo $row['image'] ;?>"></div>
                            <div class="nom"><?php echo $row['nomProduit'] ;?></div>
                            <div class="description"><?php echo $row['description'] ;?></div>
                            <div class="prix"><?php echo $row['prix'].' DA' ;?></div>
                        </div>
                        <div class="arrier"> 
                        <form method="POST" action='mon_panier.php?id=<?php echo $row['idproduit'] ;?>' >
                            <input type="number" name="quantity" value="1" >
                            <input type="hidden" name="nom" value="<?php echo $row['nomProduit'] ;?>" >
                            <input type="hidden" name="prix" value="<?php echo $row['prix'] ;?>" >
                            <input type="submit" name="Ajouter_au_panier" value="Ajouter au panier" class="button">

                       </form>
                        <a class='arrier' href=''></a></div>
                    </div>
                    <?php endwhile ;?>

                </div>                </div>
        </div>
    </div>

</body>

</html>