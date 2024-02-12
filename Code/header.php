
<div class="heder">

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
                    <h1> <?php echo 'Logout';?> </h1></a>
                <a href="#monprofile" class="s_inscrire select">
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