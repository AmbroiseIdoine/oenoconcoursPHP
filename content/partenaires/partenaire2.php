<?php

$_GET=secure($_GET);
$titre ="Château Figeac";
$num=2;

// <!-- ----------- titre ------------------ -->
echo "<h4> $titre </h4>";

// <!-- ----------- image descriptive ------------------ -->
echo "<img alt='img' title='logo' src='media/img/figeac.bmp' class='img-article' /><break>";

if(isset($_GET['partenaire'])){
    echo <<<CHAINE_DE_FIN
    <break>
    <!-- ----------- longue description de l'article ------------------ -->
    <p>Château Figeac, hôte du X WineContest</p>
    <p>
    Chateau Figeac, 1er Grand Cru Classé de Saint Emilion, offre l’élégance et le raffinement des plus grands vins de Bordeaux.
    Le domaine est remarquable par son site, son terroir exceptionnel et son histoire qui est étroitement liée à celle de Saint-Emilion.
    Son origine remonte au IIème siècle avec la famille FIGEACUS, qui lui donna son nom. La famille Manoncourt, propriétaire du domaine depuis plus de 120 ans, a façonné la personnalité unique du CHATEAU-FIGEAC d’aujourd’hui.
    </p>
    <break>
    <a href= "http://www.chateau-figeac.com/" class="post-link">site web</a>
CHAINE_DE_FIN;
} else {
    echo <<<CHAINE_DE_FIN
    <break>
    <!-- ----------- brève description de l'article ------------------ -->
    <p>
    Château Figeac, hôte du X WineContest
    </p>
    <p><a href='index.php?todo=lire&partenaire=$num&titre=$titre' class='link-partenaires'>Lire la suite</a>
CHAINE_DE_FIN;
}

