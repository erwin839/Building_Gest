<?php
    require_once '../includes/includeModels.php';
    $reponse = array();
    $reponse['type_data'] = "locataire";

    /**
     * Permet d'ajouter un locataire
     */
    if(isset($_POST['nom'])) {

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $cni = $_POST['cni'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $profession = $_POST['profession'];
        $mtnLoyer = $_POST['mtnLoyer'];

        if(count(getBatiment()) > 1) {
            if(addLocataire($nom, $prenom, $email, $phone, $age, $cni, $profession, 1) == 1){
                if(addBail($mtnLoyer)) {
                    $reponse['status'] = "success";
                    $reponse['message'] = "le client ' $prenom $nom ' à été ajouté avec succès";
                }
    
            }else{
                $reponse['status'] = "error";
                $reponse['message'] = "Erreur lors de l'ajout du locataire ";
            }
        }else {
            $reponse['status'] = "warning";
            $reponse['message'] = "Vous devez avoir au minimum un (1) batiment pour ajouter un locataire!";
        }

        echo json_encode($reponse);
    }

    /**
     * Permet de rechercher un locataire
     */
    if(isset($_POST['id'])) {

        $locataire = findLocById($_POST['id']);
        $reponse['data'] = $locataire;

        echo json_encode($reponse);
    }

    /**
     * Permet de supprimer un locataire
     */
    if(isset($_POST['delete'])) {
        

        if(deleteLoc($_POST['delete'])) {
            $reponse['message'] = "Locataire supprimé avec succès";
            $reponse['status'] = "success";
        }else {
            $reponse['message'] = "Une erreur s'est produite lors de la suppression";
            $reponse['status'] = "error";
        }

        echo json_encode($reponse);
    }

    /**
     * Permet de modifier un locataire
     */

     if(isset($_POST['dataUpdate'])) {

        $id = $_POST['dataUpdate'][0];
        $nom = $_POST['dataUpdate'][1];
        $prenom = $_POST['dataUpdate'][2];
        $email = $_POST['dataUpdate'][3];
        $cni = $_POST['dataUpdate'][4];
        $phone = $_POST['dataUpdate'][5];
        $age = $_POST['dataUpdate'][6];
        $profession = $_POST['dataUpdate'][7];
        $mtnLoyer = $_POST['dataUpdate'][8];

        if(updateLoc($id, $nom, $prenom, $email, $cni, $phone, $age, $profession, $mtnLoyer)) {
            $reponse['message'] = "Locataire modifié avec succès :)";
            $reponse['status'] = "success";
        }else {
            $reponse['message'] = "Une erreur s'est produite lors de la modification :(";
            $reponse['status'] = "error";
        }

        echo json_encode($reponse);

     }