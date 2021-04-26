<?php

    require '../includes/includeModels.php';
    $reponse = array();
    $reponse['type_data'] = "batiment";

    if(isset($_POST['nomBatiment'])){
        $added;

        $nomBat = $_POST['nomBatiment'];
        $emplacement = $_POST['emplacement'];
        $nbEtage = $_POST['nbEtage'];
        $nbAppart = $_POST['nbAppart'];
        $idPro = $_POST['idPro'];
        $nomGardien = $_POST['nomGardien'];
        $prenomGardien = $_POST['prenomGardien'];
        $telGardien = $_POST['telGardien'];
        $salaireGardien = $_POST['salaireGardien'];

        /*** [x] IMPORTANT [x]
         * Gère le cas des valeurs de gardien
         * Voit si tu dois ajouter les donnees du batiment à l'ajout du proprio
         *  
         */
        /* if(addBatiment(/*Matbat, $nomBat, $emplacement, $nbEtage, $nbAppart, $nomGardien) == 1){ */
        if(addBatiment(/*Matbat,*/ $nomBat, $emplacement, $nbEtage, $nbAppart, $idPro) == 1){
            if(!empty($nomGardien) || !empty($prenomGardien) || !empty($telGardien) || !empty($salaireGardien)) {
                $idImm = getLastIdBat();
                addGardien($nomGardien, $prenomGardien, $telGardien, $salaireGardien, $idImm[0]);
                $added = true;
            }else{
                $added = true;
            }
        }else{
            $reponse['statut'] = "error";
            $reponse['message'] = "Une erreur s'est produite lors de l'ajout du batiment";   
        }

        if($added)$reponse['statut'] = "success"; $reponse['message'] = "Batiment ajouté avec succès";  
        echo json_encode($reponse);
    }

    if(isset($_POST['dataUpdate'])){

        $reponse['statut'] = "succes";
        $reponse['message'] = "Modification effectuée avec succès";

        echo json_encode($reponse);
    }

    if(isset($_POST['id'])){

        $batiment = findBatById($_POST['id']);
        $reponse['data'] = $batiment;

        echo json_encode($reponse);
    }

    if(isset($_POST['delete'])){

        $locataire = deleteBat($_POST['delete']);
        $reponse['message'] = "Batiment supprimé avec succès";
        $reponse['status'] = "success";

        echo json_encode($reponse);
    }