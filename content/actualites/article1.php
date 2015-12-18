<?php

$_GET=secure($_GET);
$titre ="création du site";
$num=1;

// <!-- ----------- titre ------------------ -->
echo "<h4> $titre </h4>";

// <!-- ----------- image descriptive ------------------ -->
echo "<img alt='img' title='logo' src='media/img/logo.bmp' class='img-article' /><break>";

if(isset($_GET['article'])){
    echo <<<CHAINE_DE_FIN
    <break>
    <!-- ----------- longue description de l'article ------------------ -->
    <p>
    Le site du concours vient d'être créé! Vous y trouverez des informations, l'actualité du concours et de quoi nous contacter. 
    N'hésitez pas à venir y jeter un coup d'oeil!
    </p>
CHAINE_DE_FIN;
} else {
    echo <<<CHAINE_DE_FIN
    <break>
    <!-- ----------- brève description de l'article ------------------ -->
    <p>
    Le site du concours vient d'être créé!
    </p>
    <p><a href='index.php?todo=lire&article=$num&titre=$titre' class='link-actualites'>Lire la suite</a>
CHAINE_DE_FIN;
}
