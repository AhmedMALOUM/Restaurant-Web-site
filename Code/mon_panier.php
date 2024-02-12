<?php
  if(!isset($_SESSION)) { 
    session_start(); } 
 $conn = new mysqli("localhost", "root", '', "chachnaq") or die(mysqli_error($conn)) ;
// initialisation du panier      
 if (isset($_POST['Ajouter_au_panier'])){
            if (isset($_POST['panier'])){
                $session_array_id =array_column($_SESSION['panier'],'id');
                if (!in_array($_GET['id'] , $session_array_id)){
                    
                    $session_array = array(
                        'id' => $_GET['id'], 
                        "quantity" => $_POST['quantity'],
                        "nom" => $_POST['nom'],
                        "prix" => $_POST['prix']
                    );
                $_SESSION['panier'][] = $session_array;
                }
        
            }else{
                $session_array = array(
                    'id' => $_GET['id'], 
                    "quantity" => $_POST['quantity'],
                    "nom" => $_POST['nom'],
                    "prix" => $_POST['prix']
                );
                $_SESSION['panier'][] = $session_array;
            }
        
          }
// supprimer du panier 
if (isset($_GET['action']) == 'supp'){
    foreach ($_SESSION['panier'] as $key=>$row) {
        if ($key == $_GET['key']){
            unset($_SESSION['panier'][$key]);
        }
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./css/mon_panier.css">
    <link type="text/css" rel="stylesheet" href="./css/header.css">

    <title>Espace Admin</title>
</head>

<body>
    <!-- _______________________Header_______________________________________-->
    <?php require 'header.php'?>
    <div class="pages">
      
        
        <div class="admin">
        
            <div class="espace3">
                <?php
                    $conn = new mysqli("localhost", "root", '', "chachnaq") or die(mysqli_error($conn)) ;
                    $result =   $conn -> query( "SELECT * FROM produits")or die(mysqli_error($conn)) ;
                    $total = 0;
                    ?>
                    <h1 class='titre'> Mon Panier</h1>
                    <div class="tableux">
                        <table class="tcategorie">
                            
                            <!-- ________header de tableux____________ -->
                        <tread class="tread">
                            <td>Nom du produit</td>
                            <td>Quantite</td>
                            <td>Prix Unitaire</td>
                            <td>Action</td>
                            
                        </tread>
                            <!--_____ Afficher le contenue de la table client________ -->
                        <?php foreach ($_SESSION['panier'] as $key=>$row): ?>
                        <tr>
                            <td>
                                <?php echo $row['nom'] ;?>
                            </td>
                            <td>
                                <?php echo $row['quantity'] ;?>
                            </td>
                            <td>
                                 <?php echo number_format($row['prix'],2) ;?>
                                </td>
                            <td> 
                                <div class="ajouter_cont">
                                <a href="mon_panier.php?key=<?php echo  $key ;?>&action=supp"> <input type="submit"  value='Supprimer' class="modifier"></a>
                            </div> 
                        </td>
                        
                        </tr>
                        <?php //$total =( number_format($row['prix'],3) * number_format($row['quantity'],3)) + number_format($total,3) ; 
                         $total = floatval( $row['prix']) * floatval($row['quantity']) + floatval($total) ; ?> 

                        <?php endforeach;?>
                        <tr>
                        <td></td>
                        <td> Prix total(DA) :</td>
                            <td>
                                <?php echo $total ;?>
                            </td>
                        <td><div class="ajouter_cont">
                                <a href="#commander"> <input type="submit"  value='Commander' class="modifier" style="background-color: green;"></a>
                            </div></td>
                        </tr>
                        

            <!-- _________________________________________________________________________________ -->
                    </table>
                   


                </div>
            </div>
            <!--______________ Supress