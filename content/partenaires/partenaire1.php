<?php

$_GET=secure($_GET);
$titre ="Bains&co";
$num=1;

// <!-- ----------- titre ------------------ -->
echo "<h4> $titre </h4>";

// <!-- ----------- image descriptive ------------------ -->
echo "<img alt='img' title='logo' src='media/img/Bains.png' class='img-article' /><break>";

if(isset($_GET['partenaire'])){
    echo <<<CHAINE_DE_FIN
    <break>
    <!-- ----------- longue description de l'article ------------------ -->
    <p>La société de conseil Bain&Company soutient le X-WineContest. Découvrez une entreprise leader et fidèle à ses valeurs humaines.</p>
    <p>
    Créé en 1985, le bureau français de Bain&Company aide les dirigeants et leurs équipes de direction à générer des résultats financiers durables, quel que soit leur secteur d’activité. 
    Il est ainsi devenus l’un des cabinets de conseil en stratégie leader en France.
    </p>
    <break>
    <a href= "http://www.bain.com/" class="post-link">site web</a>
CHAINE_DE_FIN;
} else {
    echo <<<CHAINE_DE_FIN
    <break>
    <!-- ----------- brève description de l'article ------------------ -->
    <p>
    La société de conseil Bain&Company soutient le X-WineContest. Découvrez une entreprise leader et fidèle à ses valeurs humaines.
    </p>
    <p><a href='index.php?todo=lire&partenaire=$num&titre=$titre' class='link-partenaires'>Lire la suite</a>
CHAINE_DE_FIN;
}
