<?php $_GET=secure($_GET);?>

<div class='background'>
    <?php 
    if(isset($_GET['article'])){
        echo"<img alt='Veraison' title='Veraison' src='static/img/Veraison.png' class='backgroundImage' id='backgroundImage'/>";
    }else{
        echo"<img alt='Figeac' title='Figeac' src='static/img/Figeac.jpg' class='backgroundImage' id='backgroundImage'/>";
    }
    ?>
    
    <div class='text'>
        <div class='text-lire'>
            <h3>      
                <?php if(isset($_GET['titre'])){
                    echo $_GET['titre'];
                } else {
                    echo"Article"; 
                };
                ?>
            </h3>
            <break>
            <break>

            <div class="article">
                <?php
                if(isset($_GET['article'])){
                try{
                    require("content/actualites/article".$_GET['article'].".php");
                } catch(Exception $e){
                    echo"<p>Excusez nous, nous n'avons pas trouvé l'article désiré</p>"; 
                    echo"<break><break>";
                    echo"<a href='index.php'>retour à l'acceuil</a>";
                }
                }elseif(isset($_GET['partenaire'])){
                try{
                    require("content/partenaires/partenaire".$_GET['partenaire'].".php");
                } catch(Exception $e){
                    echo"<p>Excusez nous, nous n'avons pas trouvé l'article désiré</p>"; 
                    echo"<break><break>";
                    echo"<a href='index.php'>retour à l'acceuil</a>";
                }
                } else {
                    echo"<p>Excusez nous, nous n'avons pas trouvé l'article désiré</p>"; 
                    echo"<break><break>";
                    echo"<a href='index.php'>retour à l'acceuil</a>";
                };
                ?>
            </div>
        </div>
    </div>
</div>
