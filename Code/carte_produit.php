<?php while ($row = $result->fetch_assoc()): ?>
                    <div class="cont">
                        <div class="carte">
                            <div class="image"> <img src="img/<?php echo $row['image'] ;?>"></div>
                            <div class="nom"><?php echo $row['nomProduit'] ;?></div>
                            <div class="description"><?php echo $row['description'] ;?></div>
                            <div class="prix"><?php echo $row['prix'] ;?></div>
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
