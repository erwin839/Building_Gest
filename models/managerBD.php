<?php

    require_once "bdd.php";

    function Connexion($login, $password) {
        global $db;

        $req = $db->query("SELECT * FROM user, profil WHERE (username = '$login' OR login = '$login') AND password = '$password' AND idProfilF = idProfil");
        return $req->fetch();
    }

    function reloadUserData(){
        $req = "SELECT * FROM user, profil WHERE idProfilF = idProfil";
         global $db;
         return $db->query($req)->fetch();
    }

     /* Ps: Ajputer la photo de profile */
     function editProfil($username, $nomU, $prenomU, $adresseU, $phone, $mailU/* , $profil */){
        global $db;

        $req = $db->prepare("UPDATE user SET username = :username, nom = :nom, prenom = :prenom, adresse = :adresse, phone = :phone, email = :mail/* , imgProfil = :profil */");

        return $req->execute(
            array(
                ':username' => $username,
                ':nom' => $nomU,
                ':prenom' => $prenomU,
                ':adresse' => $adresseU,
                ':phone' => $phone,
                ':mail' => $mailU,
                /* ':profil' => $profil */
            )
        );

    }

    /* Ps: Ajputer la photo de profile */
    function editPhoto(/* $username, $nomU, $prenomU, $adresseU, $profession, $mailU , */ $profil){
        global $db;
        $req = $db->prepare("UPDATE user SET imgProfil = :profil");
        return $req->execute(
            array(
                ':profil' => $profil
            )
        );

    }

    function getSiteData() {
        global $db;

        $req = $db->query("SELECT * FROM siteData");
        return $req->fetch();
    }