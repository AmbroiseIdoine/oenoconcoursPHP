<?php $_GET=secure($_GET);?>

<div class='background'>
    <?php
    if(isset($_GET['genre'])&&$_GET['genre']=='actualite'){
        echo"<img alt='Veraison' title='Veraison' src='static/img/Veraison.png' class='backgroundImage' id='backgroundImage'/>";
    }else{
        echo"<img alt='Figeac' title='Figeac' src='static/img/Figeac.png' class='backgroundImage' id='backgroundImage'/>";
    }              
    ?>
    <div class='text'>
        <div class='text-partenaires'>
            <h3> <?php
                if(isset($_GET['genre'])&&$_GET['genre']=='actualite'){
                    echo 'Actualités';
                }else{
                    echo 'Nos Partenaires';
                }
                ?>
            </h3>
            
            
            <break>

            <div class="partenaires">
                <?php
                if(isset($_GET['genre'])&&$_GET['genre']=='actualite'){
                    echo'<div class="article">';
                    require("content/partenaires/article1.php");
                    echo'</div>';  
                } else {
                    echo'<div class="article">';
                    require("content/partenaires/partenaire1.php");
                    echo'</div>';  
                    echo'<div class="article">';
                    require("content/partenaires/partenaire2.php");
                    echo'</div>';   
                }
                ?>
            </div>
        </div>
    </div>
</div>
