<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link type="text/css" rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/connection.css" media="screen" type="text/css" />
    </head>
    <body>

    <div class="heder" style="position: sticky;">


            <div class="logo select">
                <a href="./index.php #acceuil"><img src="./images/logo2.png" alt=""> </a>
            </div>
            <div class="nav_bar">
                <a href="./index.php #acceuil"class="nav3 select"> <ul > Acceuil </ul></a>
                <a href="carte.php"class="nav0 select"><ul >La carte</ul> </a>
                <a href="reservation.php"class="nav1 select"><ul >Reserver</ul> </a>
                <a href="./index.php #contact"class="nav2 select"><ul >Contact</ul> </a>

            </div>
            <div class="co_insc">
                <a href="./connection_user.php" class="se_connecter select"><h1>Se connecter</h1></a>
                <a href="./Inscription.php" class="s_inscrire select"><h1>S'inscrire</h1></a>
            </div>
        </div>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification_user.php" method="POST">
                <h1>Connexion</h1>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                
                <a href="# Mot de passe oublier" >Mot de passe oublie?</a>
                <input type="submit" id='submit' value='Connexion' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<h3 style='	color: rgb(255, 156, 7);'>Utilisateur ou mot de passe incorrect</h3>"; 
                }
                ?>
            </form>
        </div>
    </body>
</html>