<?php
  if(!isset($_SESSION)) { 
    session_start();
    
     } ?>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link type="text/css" rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/reservation.css" media="screen" type="text/css" />
    </head>
    <body>

    <div class="heder" style="position: sticky;">

<div class="logo select">
                <a href="./index.php #acceuil"><img src="./images/logo2.png" alt=""> </a>
            </div>
            <div class="nav_bar">
                <a href="./index.php #acceuil" class="nav3 select">
                    <ul> Acceuil </ul>
                </a>
                <a href="carte.php" class="nav0 select">
                    <ul>La carte</ul>
                </a>
                <a href="reservation.php" class="nav1 select">
                    <ul>Reserver</ul>
                </a>
                <a href="./index.php #contact" class="nav2 select">
                    <ul>Contact</ul>
                </a>
                


            </div>
            
            <?php  if (isset($_SESSION['username'])) : ?>
                <a href="./mon_panier.php" class="nav select">
                    <img src="images/icon/icon_panier.png" alt="" class='panier'>
                </a>
                <div class="co_insc" >
                <a href="deconnection.php?deconnect=<?php echo 1;?>&action=supp" class="s_inscrire select">
                <h1> <?php echo $_SESSION['username'];?> </h1></a>
                <a href="#monprofile" class="s_inscrire select">
                        <img src="images/admin/img_avatar.png" alt="image" style= " border-radius:50px; width:55px;height:55px;margin :-5px 0 0 0px;">
                    </a>
            </div>
                
            <?php else: ?>
                <div class="co_insc" >
                    <a href="./connection_user.php" class="se_connecter select">
                        <h1>Se connecter</h1>
                    </a>
                    <a href="./Inscription.php" class="s_inscrire select">
                        <h1>S'inscrire</h1>
                    </a>
                </div>
                <?php endif ?>
        </div>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="reserver_form.php" method="POST">
                <h1  style='	color: rgb(255, 156, 7);'>Reservation</h1>
                
                <div class="champ">
                    <input type="date" placeholder="Date de reservation" name="date" required>
                    <input type="time" placeholder="Heure" name="heure" required>
                    <select class="nbpersonne" name='nombre_personnes'>
                        <option value="1">Pour 1 Personne</option>
                        <option value="4" selected>Pour 4 Personne</option>
                    </select>
                    <select class="Table" name='table_id'>
                        <option value="2">Table Pour 2 Personne</option>
                        <option value="4" selected>Table Pour 4 Personne</option>
                    </select>
                </div>
                <div class="btns">
                    <input type="submit" id='submit' name='submit_table_reservation_form' value='Confirmer' class="confirmer">
                    <input type="submit" id='submit' value='Annuler'>
                </div>
            </form>
        </div>
    </body>
</html>