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
            <div class="nav_bar" style="margin-left:10%">
                <a href="./index.php #acceuil"class="nav3 select"> <ul > Acceuil </ul></a>
                <a href="carte.php"class="nav0 select"><ul >La carte</ul> </a>
                <a href="reservation.php"class="nav1 select"><ul >Reserver</ul> </a>
                <a href="./index.php #contact"class="nav2 select"><ul >Contact</ul> </a>

            </div>
            
        </div>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                
                <a href="mp_oublier.php" >Mot de passe oublier?</a>
                <input type="submit" id='submit' value='Connexion' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<h3 style='color:	#B22222'> Nom Utilisateur ou mot de passe incorrect</h3>"; 
                }
                ?>
            </form>
        </div>
    </body>
</html>