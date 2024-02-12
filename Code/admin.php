
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./css/alert.css">
    <link type="text/css" rel="stylesheet" href="./css/header.css">
    <link type="text/css" rel="stylesheet" href="./css/admin.css">

    <title>Espace Admin</title>
</head>

<body>
    <!-- _______________________Header_______________________________________-->

<?php require 'header.php'?>
    <div class="pages">
      
        
        <div class="admin">
        
            <div class="side_menu">
                <div class="c_side">

                    <div class="client">Client</div>
                    <div class="produit">Produit</div>
                    <div class="categorie">Categorie</div>
                    <div class="administration">Administration</div>

                </div>
            </div>
            <div class="espace3">
                <!-- _______________Message de confirmation________________ -->
                            <?php require_once './process.php'?>
                        <?php 
                    if (isset($_SESSION['message'] )): ?>

                        <div class="alert alert-<?=$_SESSION['msg_type']?> ">
                            <?php
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                        ?>
                        </div>
                        <?php endif ?>
                <?php  if (isset($_SESSION['message'])) : ?>
                <div class="alert alert-<?=$_SESSION['msg_type']?>">
                    <?php 
                 echo $_SESSION['message'];
                 unset($_SESSION['message']);?>
                </div>
                <?php endif ?>
                <?php
                    $conn = new mysqli("localhost", "root", '', "chachnaq") or die(mysqli_error($conn)) ;
                    $result =   $conn -> query( "SELECT * FROM produits")or die(mysqli_error($conn)) ;
                    
                    ?>

                    <div class="tableux">
                        <table class="tcategorie">
                            
                            <!-- ________header de tableux____________ -->
                        <tread class="tread">
                            <td>Id produit</td>
                            <td>Nom produit</td>
                            <td>Categorie</td>
                            <td>Description</td>
                            <td>Prix</td>
                            <td colspan="2">Action</td>
                        </tread>
                            <!--_____ Afficher le contenue de la table client________ -->
                        <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td>
                                <?php echo $row['idproduit'] ; ?>
                            </td>
                            <td>
                                <?php echo $row['nomProduit'] ;?>
                            </td>
                            
                            <td>
                                <?php echo $row['Categorie'] ;?>
                            </td>
                            <td>
                                <?php echo $row['description'] ;?>
                            </td>
                            <td>
                                <?php echo $row['prix'] ;?>
                            </td>
                            <td>
                                <a href="admin.php?edit=<?php echo $row['idproduit'] ;?>"> <input type="submit" id='submit' value='Modifier' id="midifier"> </a>
                            </td>
                            <td>
                                <a href="admin.php?id=<?php echo $row['idproduit'] ;?>&conf=<?php echo true ;?>"> <input type="submit" id='submit' value='Supprimer'></a>
                            </td>
                        </tr>

                        <?php endwhile ;?>
            <!-- _________________________________________________________________________________ -->
                    </table>
                    <div class="ajouter_cont">
                        <a href="admin.php?ajouter=<?php echo true ;?>"> <input type="submit" id='submit' value='Ajouter' class="ajouter"></a>
                    </div>



                </div>
            </div>
            <!--______________ Supression confirmation ___________________ -->

            <?php if (isset($_GET['conf']) ):?>
                <div class="popup">
                <div class="formulaire" style="height: 180px;">
                    <a href="admin.php" ><div class="close_">+</div> </a>
                    <label for="fname">voulez vous confirmer la suppr </label>
                    <p><br></p>
                <a href="process.php?supp=<?php echo $_GET['id'];?>" ><input  type="submit" value="confirmer" id="modifier" class="button"></a>
                <a href="admin.php" ><input  type="submit"  value="annuler" id="modifier" class="button"></a>
                </div></div>
                <?php endif ?>

                

            <!--____________ Pop-up de modification et d'ajout________________ -->
           
            <?php if ((isset($_GET['edit'])) || (isset($_GET['ajouter'])) ):?>
            <div class="popup">
            
                <div class="formulaire">
                    <a href="admin.php" ><div class="close_">+</div> </a>
                    <form action='process.php' method="POST">
                        <input type="hidden" name="id" value="<?php echo $id ;?>">
                        <div class="modif">
                            <div class="nomProduit">
                                <label for="fname">Nom de produit:</label>
                                <input type="text" name="nomProduit" value="<?php echo $nomproduit_; ?>" id="nom" size="30" placeholder="Nom du produit" minlength="5" required>
                            </div>

                            <div class="Categorie">
                                <label for="fname">Categorie du produit:</label> 
                                <!-- Recuperation des categorie de la base de donner --> 
                                <?php   $conn = new mysqli("localhost", "root", '', "chachnaq") or die(mysqli_error($conn)) ;
                                        $result =   $conn -> query( "SELECT * FROM categorie")or die(mysqli_error($conn)) ;
                                    ?>
                                <select id="categorie" name="Categorie">
                                    <?php while ($row = $result->fetch_assoc()): ?>
                                        <option id='par_def' value="<?php echo $row['nomCategorie']; ?>"><?php echo $row['nomCategorie']; ?></option>
                                    <?php endwhile ;?>
                                </select>  
                            </div>
                            <div class="">
                                <label for="fname">Description du produit:</label>    
                                <input type="text" name="description" value="<?php echo $description_ ; ?>" id="description" size="27" placeholder="Descriprion du produit" >
                            </div>
                
                            <div class="prix">
                                <label for="fname">Prix du produit:</label>
                                <input type="text" name="prix" id="prix" value="<?php echo $prix_; ?>" size="27" placeholder="Prix du produit" required>
                            </div>
                            <div class="image">
                                <label for="fname">Choisir une Image:</label>
                                <input id="prodId" name="image_" type="hidden" value="<?php echo $image_; ?>" >
                                <input type="file" accept="image/*" name="image" id="image" value="<?php echo $image_; ?>" size="27" placeholder="Choisire une image" >
                            </div>
                        </div>


                        <div class="bt">
                            <?php 

                            
                        /* Condition Boutton ajouter / modifier  */
                        
                        
                        if ($update == true ):?>
                            <h1 class="titre_">Modifier</h1>
                            <input type="submit" name="update" value="Modifier" id="modifier" class="button">
                            <?php else: ?>
                            <h1 class="titre_">Ajouter</h1>
                            <input type="submit" name="submit" value="Ajouter" class="button">
                            <?php endif ?>
                        </div>

                    </form>

                </div>
            </div>
            <?php endif ?>

            </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    
</body>

</html>