<?php
  if(!isset($_SESSION)) { 
    session_start();
    
     } ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Chacnaq</title>
    <link type="text/css" rel="stylesheet" href="./css/acceuil/page_1.css">
    <link type="text/css" rel="stylesheet" href="./css/acceuil/page_2.css">
    <link type="text/css" rel="stylesheet" href="./css/acceuil/page_3.css">
    <link type="text/css" rel="stylesheet" href="./css/acceuil/footer.css">
    <link type="text/css" rel="stylesheet" href="./css/header.css">
    <link type="text/css" rel="stylesheet" href="./css/alert.css">
</head>

<!--_____________Fin Du header_______________________-->
<body>
    <div class="page_1" id="acceuil">
        <!--_____________berre de tache_______________________-->
       
<?php require 'header.php'?>

        <!--_____________corp _____________________-->
        <div class="corp">
            <div class="floue">
                <div class="logo_"><img src="./images/logo.png" alt=""></div>
                <div class="text">
                    <h2>" La cuisine est le coeur d'un restaurant ,<br> le client est son âme. "</h2>
                </div>
            </div>


        </div>
    </div>

    <div class="page_2">
        <!--_____________Aller a la carte_____________________-->
         <a href="carte.php"><button class="button"><span>Consulter Le carte</span></button></a>
    </div>
    <div class="page_3" id="contact">
        <div class="contact_text">
           
            </h1>
        </div>

        <!--_________________formulaire de contacte__________________-->
        <div class="formulaire">
        
            <form action="formulaire.php" method="POST">
            <?php  if (isset($_GET['succ'])) : ?>
                <?php  if ($_GET['succ'] == 1) : ?>
                <div class="alert alert-success">
                    <?php 
                    echo  'Votre message a bien ete soumis merci ';
                    ?>
                    <?php endif ?>
                </div>
                <?php endif ?>
            <div class="info">
                <div class="n_p">
                    <div class="nom">
                        <input type="text" id="fname" name="nom" placeholder="Nom">
                    </div>
                    <div class="prenom">
                        <input type="text" id="lname" name="prenom" placeholder="Prenom">
                    </div>

                </div>
                <div class="objet">
                    <select id="objet" name="objet">
                    <option id='par_def' value="defaut">Select your option</option>
                    <option value="info">Demande d'information</option>
                    <option value="condidature">Demande de Condidature</option>
                    <option value="autre">Autre</option>
                  </select>
                </div>
                <div class="mail">
                    <input type="email" name="mail" id="mail" placeholder="Adresse e-mail">
                </div>
                <div class="message">
                    <textarea name="message" id="msg" cols="20" rows="7" placeholder="Redigez votre message"></textarea>
                </div>
                <div class="bt_envoyer">
                    <input type="submit" name="envoyer" value="ENVOYER">
                </div>
            </div>
            </form>
                   
        </div>

    </div>
    
    <!--________________Footter___________________-->
    <div class="logo_f">
        <div class="footer_"><div class="footer">
        
        </div>
       <!-- <div class="contact_info">
            <div class="call">
                
                </div>
                <div class="find">
                    
                    </div>
                    <div class="mail_us">
                        
                        </div>
                    </div>
                    <div class="r_sociaux">
                        <div class="fb">
                            
                            </div>
                            <di class="twitter">
                                
                                </di>
                                <div class="insta">

            </div>
        </div>-->
    </div>

    </div>
</body>

</html>