<?php

function generateHTMLHeader($titre) {
    echo <<<CHAINE_DE_FIN

<!DOCTYPE html>

<html lang="fr">    
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="icon" href="logo.ico" />
        <title>$titre</title>

        <!-- CSS Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- CSS Perso -->
        <link href="css/style.css" rel="stylesheet">
        
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/perso.js"></script>
        
            
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
            
    <body>
      <div class='all'>
        <div class='all-container'>
          <header>
              <img alt="bandeau" title="bandeau" src="static/img/bandeauXBis.png" class='bandeauImage'/>
              <nav id='navigation'>
                 <div>
                      <a class='nav-link' id='nav-link1' href='index.php?todo=accueil'>Accueil</a>
                      <a class='nav-link' id='nav-link2' href='index.php?todo=actualites'>Actualités</a>
                      <a class='nav-link' id='nav-link3' href='index.php?todo=partenaires'>Nos partenaires</a>
                      <a class='nav-link' id='nav-link4' href='index.php?todo=equipe'>L'équipe</a>
                      <a class='nav-link' id='nav-link5' href='index.php?todo=contact'>Contact</a>             
                 </div>
             </nav>
    <!--          <div class='titre'>
               <h1>X-WineContest</h1>
             </div> -->
          </header>
CHAINE_DE_FIN;
}

function generateMenu($askedPage) {
    echo "<nav class='nav'>" . PHP_EOL;
    generateMenuItem('accueil', $askedPage);
    generateMenuItem('carte', $askedPage);
    generateMenuItem('checkpoint', $askedPage);
    generateMenuItem('classement', $askedPage);
    generateMenuItem('participants', $askedPage);
    echo "</nav>" . PHP_EOL;
}


function generateHTMLFooter($askedPage) {

    echo <<<CHAINE_DE_FIN
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>

    <footer style='color:black; font-size:12px'>&copy; BinetŒno 2013</footer>
CHAINE_DE_FIN;

    if ($askedPage == "accueil") {
        echo "<p>Site réalisé par <a href = 'mailto:geoffrey.negiar@polytechnique.edu'>Geoffrey Negiar</a>"
        . " et <a href = 'mailto:ambroise.idoine@polytechnique.edu'>Ambroise Idoine</a>, X2013</p>";
    }
    echo "</body>";
}

//function checkPage($askedPage) {
//    $xml = simplexml_load_file("pages.xml");
//    $pagesExistantes = $xml->page;
//    foreach ($pagesExistantes as $page) {
//        $nomsExistants = $page->name;
//        foreach ($nomsExistants as $name) {
//            if ($name == $askedPage) {
//                return TRUE;
//            }
//        }
//    }
//    return FALSE;
//}

//function getPageTitle($askedPage) {
//    $xml = simplexml_load_file("pages.xml");
//    $pagesExistantes = $xml->page;
//
//    foreach ($pagesExistantes as $page) {
//        if ($page->name == $askedPage) {
//            return $page->menutitle;
//        }
//    }
//    return $page;
//}

function secure($tab) {
    foreach ($tab as $cle => $valeur) {
        $tab[$cle] = htmlspecialchars($valeur);
    }
    return $tab;
}


