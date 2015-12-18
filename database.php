<?php


class Database {

    public static function connect() {
        $dsn = 'mysql:dbname=oenoconcours;host=127.0.0.1';
        $user = 'root';
        $password = 'modal';
//        $dsn = 'mysql:dbname=raid;host=localhost';
//        $user = 'raid';
//        $password = '@VenTuR3';
        $dbh = null;
        try {
            $dbh = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
            exit(0);
        }
        return $dbh;
    }

}

class Organisateurs {

    public $pseudo;
    public $mdp;
    public $tel;
    public $statut;

    function insererOrganisateur($pseudo, $mdp, $tel) {
        $dbh = Database::connect();
        $sth = $dbh->prepare("INSERT INTO `organisateurs`(`pseudo`, `mdp`, `tel`)  VALUES(?,?,?)");
        $sth->execute(array($pseudo, SHA1($mdp), $tel));
        $dbh = null;
    }

    function supprimerOrganisateur($pseudo) {
        $dbh = Database::connect();
        $sth = $dbh->prepare("DELETE FROM `organisateurs` WHERE `pseudo`=?");
        $sth->execute(array($pseudo));
        $dbh = null;
    }

    function getOrganisateur($pseudo) {
        $dbh = Database::connect();
        $sth = $dbh->prepare("SELECT * FROM `organisateurs` WHERE `pseudo` = ?");
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Organisateurs');
        if ($sth->execute(array($pseudo))) {
            $orga = $sth->fetch();
            $sth->closeCursor();
            return $orga;
        }
        return null;
    }

    function testerMdp($orga, $mdp) {
        return ($orga->mdp == SHA1($mdp));
    }

    function changePassword($mdp, $pseudo) {
        $dbh = Database::connect();
        $sth = $dbh->prepare("UPDATE `organisateurs` SET `mdp`=? WHERE `pseudo`=?");
        $sth->execute(array(SHA1($mdp), $pseudo));
    }

    function getAdmin() {
        $dbh = Database::connect();
        $sth = $dbh->prepare("SELECT * FROM `organisateurs` WHERE `statut`='administrateur'");
        if ($sth->execute()) {
            $ans = $sth->fetchAll();
            $sth->closeCursor();
            return $ans;
        } else {
            return null;
        }
    }

    function supprimerAdmin($pseudo) {
        $dbh = Database::connect();
        $sth = $dbh->prepare("UPDATE `organisateurs` SET `statut`='organisateur' WHERE `pseudo`=?");
        $sth->execute(array($pseudo));
    }

    function ajouterAdmin($pseudo) {
        if (Organisateurs::getOrganisateur($pseudo) == null) {
            return false;
        }
        $dbh = Database::connect();
        $sth = $dbh->prepare("UPDATE `organisateurs` SET `statut`='administrateur' WHERE `pseudo`=?");
        $sth->execute(array($pseudo));
        return true;
    }

}