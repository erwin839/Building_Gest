<?php

    require 'bdd.php';

    function addProprio($nomP, $prenomP, $adresseP, $emailP, $phoneP, $cniP, $professionP) {
        global $db;

        $req = $db->prepare("INSERT INTO proprietaire(nomP, prenomP, adresseP, emailP, phoneP, cniP, professionP, etat) VALUES(:nom, :prenom, :adresse, :email, :phone, :cni, :profession, :etat)");

        return $req->execute(array(
            ':nom' => $nomP,
            'prenom' => $prenomP,
            ':adresse' => $adresseP,
            ':email' => $emailP,
            ':phone' => $phoneP,
            ':cni' => $cniP,
            ':profession' => $professionP,
            ':etat' => 1
        ));
    }

    
    function deleteProprio($idP) {
        global $db;

        return $db->exec("UPDATE proprietaire SET etat = 0 WHERE idP = $idP");
    }

    function getProprios() {
        global $db;

        $req = "SELECT * FROM proprietaire WHERE /* idImF = idIm AND */ etat = 1";
        return $db->query($req)->fetchAll();
    }

    /**
     * @param idProprio Prend l'id du client et retourne ses données
     */
    function findProById($idProprio) {
        global $db;

        return $db->query("SELECT * FROM proprietaire WHERE /* idP = idPF AND */ idP = $idProprio")->fetch();
    }

    /**
     * Permet de modifier un proprietaire
     */
    function updateProprio($id, $nom, $prenom, $adresse, $email, $cni, $phone, $profession) {
        global $db;

        $req = $db->prepare("UPDATE proprietaire SET nomP = ?, prenomP = ?, adresseP = ?, emailP = ?, cniP = ?, phoneP = ?, professionP = ? WHERE idP = ?");

        return $req->execute(array(
            $nom, $prenom, $adresse, $email, $cni, $phone, $profession, $id
        ));
    }

?>