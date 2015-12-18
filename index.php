<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    require('database.php');
    require('utilities/utils.php');
   
    $_GET = secure($_GET);
    $_POST = secure($_POST);
    
    
    if (isset($_GET['todo'])) {
//        echo $_GET['todo'];
        
        if ($_GET['todo'] == 'accueil') {
            generateHTMLHeader('accueil');
            echo "<section id='content'>" . PHP_EOL;
            require("content/accueil.php");
            echo "</section>" . PHP_EOL;
        } elseif ($_GET['todo'] == 'actualites') {
            generateHTMLHeader('actualites');
            echo "<section id='content'>" . PHP_EOL;
            require("content/actualites.php");
            echo "</section>" . PHP_EOL;
        } elseif ($_GET['todo'] == 'allArticles') {
            generateHTMLHeader('allArticles');
            echo "<section id='content'>" . PHP_EOL;
            require("content/allArticles.php");
            echo "</section>" . PHP_EOL;
        } elseif ($_GET['todo'] == 'contact') {
            generateHTMLHeader('contact');
            echo "<section id='content'>" . PHP_EOL;
            require("content/contact.php");
            echo "</section>" . PHP_EOL;
        } elseif ($_GET['todo'] == 'equipe') {
            generateHTMLHeader('equipe');
            echo "<section id='content'>" . PHP_EOL;
            require("content/equipe.php");
            echo "</section>" . PHP_EOL;
        }elseif ($_GET['todo'] == 'infos') {
            generateHTMLHeader('infos');
            echo "<section id='content'>" . PHP_EOL;
            require("content/infos.php");
            echo "</section>" . PHP_EOL;
        }elseif ($_GET['todo'] == 'format') {
            generateHTMLHeader('format');
            echo "<section id='content'>" . PHP_EOL;
            require("content/infos/format.php");
            echo "</section>" . PHP_EOL;
        }elseif ($_GET['todo'] == 'deroulement') {
            generateHTMLHeader('déroulement');
            echo "<section id='content'>" . PHP_EOL;
            require("content/infos/deroulement.php");
            echo "</section>" . PHP_EOL;
        } elseif ($_GET['todo'] == 'lire') {
            generateHTMLHeader('lire');
            echo "<section id='content'>" . PHP_EOL;
            require("content/lire.php");
            echo "</section>" . PHP_EOL;
        } elseif ($_GET['todo'] == 'partenaires') {
            generateHTMLHeader('partenaires');
            echo "<section id='content'>" . PHP_EOL;
            require("content/partenaires.php");
            echo "</section>" . PHP_EOL;
        } 
    } else {
            generateHTMLHeader('accueil');
            echo "<section id='content'>" . PHP_EOL;
            require("content/accueil.php");
            echo "</section>" . PHP_EOL;
    }
    ?>
</html>
