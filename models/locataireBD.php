<?php

    require_once 'bdd.php';

    function getLastIdLoc() {
        global $db;

        return $db->query("SELECT MAX(idLoc) FROM locataires")->fetch();
    }

    function addLocataire($nomLoc, $prenomLoc, $emailLoc, $phoneLoc, $age, $cniLoc, $professionLoc, $idUserF) {
        global $db;
        $i = 0;

        $req = $db->prepare("INSERT INTO locataires(nomLoc, prenomLoc, emailLoc, ageLoc, phoneLoc, cniLoc, professionLoc, etat, idUserF)
                                    VALUES(:nom, :prenom, :email, :age, :phone, :cni, :profession, :etat, :idU)
                            ");
        
        return $req->execute(array(
            ':nom' => $nomLoc,      
            ':prenom' => $prenomLoc,            
            ':email' => $emailLoc,
            ':age' => $age,
            ':phone' => $phoneLoc,            
            ':cni' => $cniLoc,
            ':profession' => $professionLoc,
            ':etat' => 1,      
            ':idU' => $idUserF           
        ));
    }

    function addBail($mtnLoyer){
        global $db;

        $id = getLastIdLoc();

        $req = $db->prepare("INSERT INTO contratbail SET montantBail = ?, idLocF = ?");

        return $req->execute(array($mtnLoyer, $id[0]));
    }

    /**
     * @param idLoc Prend l'id du client et retourne ses données
     */
    function findLocById($idLoc) {
        global $db;

        return $db->query("SELECT * FROM locataires, contratbail, appartement, immeuble WHERE idLocF = idLoc AND idIm = idImF  AND idBail = idContratF AND idLoc = $idLoc")->fetch();
    }

    /**
     * Recupere tous les locataires
     */
    function getLocataires() {
        global $db;

        $req = "SELECT * FROM locataires, contratbail, appartement WHERE idLocF = idLoc AND idBail = idContratF AND appartement.etat = 1 AND locataires.etat = 1";
        return $db->query($req)->fetchAll();
    }

    function deleteLoc($idLoc) {
        global $db;

        return $db->exec("UPDATE locataires SET etat = 0 WHERE idLoc = $idLoc");
    }

    /**
     * Permet de modifier un locataire
     */
    function updateLoc($id, $nom, $prenom, $email, $cni, $phone, $age, $profession, $mtnLoyer) {
        global $db;

        $req = $db->prepare("UPDATE locataires SET nomLoc = ?, prenomLoc = ?, emailLoc = ?, cniLoc = ?, phoneLoc = ?, ageLoc = ?, professionLoc = ? WHERE idLoc = ?");

        return $req->execute(array(
            $nom, $prenom, $email, $cni, $phone, $age,   $profession, $id
        ));
    }

?>