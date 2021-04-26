<?php

    require 'bdd.php';


    function getLastIdBat() {
        global $db;

        return $db->query("SELECT MAX(idIm) FROM immeuble")->fetch();
    }

    function addBatiment($nomBat, $emplacement, $nbEtage, $nbAppart, $idPro) {
        global $db;

        $req = $db->prepare("INSERT INTO immeuble(nomBat, emplacement, nbEtage, nbAppart, etat, idPF) VALUES(:nomB, :emplB, :etage, :appart, :idPro, :etat)");

        return $req->execute(array(
            ':nomB' => $nomBat,
            ':emplB' => $emplacement,
            ':etage' => $nbEtage,
            ':appart' => $nbAppart,
            ':idPro' => $idPro,
            ':etat' => 1
        ));
    }

    function addEtage($numEtage, $nbAppart, $idImm) {
        global $db;

        $req = $db->prepare("INSERT INTO etage(numEtage, nbAppart, idImm, etat) VALUES(numE, :nbAppart, :idImm, :etat)");

        return $req->execute(array(
            ':numE' => $numEtage,
            ':nbAppart' => $nbAppart,
            ':idImm' => $idImm,
            ':etat' => 1
        ));
    }

    function addAppart($superficieAppart, $nbPieces, $idEtageF, $idContratF) {
        global $db;

        $req = $db->prepare("INSERT INTO appartement(superficie, nbPieces, idEtageF, idContratF) VALUES(:superficie, :pieces, :idEtage, :idContrat, :etat)");

        return $req->execute(array(
            ':superficie' => $superficieAppart,
            ':pieces' => $nbPieces,
            ':idEtage' => $idEtageF,
            ':idContrat' => $idContratF,
            ':etat' => 1
        ));
    }

    /**
     * Recupere toutes les infos des appartements
     */
    function getApparts(){
        global $db;

        $req = "SELECT * FROM appartement, contratbail, etage WHERE idEtageF = idEtage AND idContratF = idBail AND appartement.etat = 1 AND etage.etat = 1";
        return $db->query($req)->fetchAll();
    }
    
    /**
     * @param idBat Prend l'id du batiment et retourne ses données
     */
    function findBatById($idBat) {
        global $db;

        return $db->query("SELECT * FROM immeuble, proprietaire WHERE idPF = idP AND immeuble.etat = 1 AND proprietaire.etat = 1 AND idIm = $idBat")->fetch();
    }

    /**
     * Recupere tous les batiments et les données du proprietaire
     */
    function getBatiment() {
        global $db;

        $req = "SELECT * FROM immeuble, proprietaire, gardien WHERE idPF = idP AND idImm = idIm AND immeuble.etat = 1 AND proprietaire.etat = 1";
        return $db->query($req)->fetchAll();
    }

    function deleteBat($idBat) {
        global $db;

        return $db->exec("UPDATE immeuble SET etat = 0 WHERE idIm = $idBat");
    }

    /**
     * Partie correspondante au gardien
     */

    function addGardien($nomGardien, $prenomGardien, $telGardien, $salaireGardien, $idImm) {
        global $db;

        $req = $db->prepare("INSERT INTO gardien(nomGardien, prenomGardien, telGardien, salaireGardien, idImm, etat) VALUES(:nom, :prenom, :tel, :salaire, :idImm, :etat)");

        return $req->execute(array(
            ':nom' => $nomGardien,
            ':prenom' => $prenomGardien,
            ':tel' => $telGardien,
            ':salaire' => $salaireGardien,
            ':idImm' => $idImm,
            ':etat' => 1
        ));
    }

?>