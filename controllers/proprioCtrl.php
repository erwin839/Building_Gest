<?php
    require '../models/proprioBD.php';

    $reponse = array();
    $reponse['type_data'] = "proprietaire";
    
    if(isset($_POST['nom'])){

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $cni = $_POST['cni'];
        $nbImm = $_POST['nbImm'];
        $profession = $_POST['profession'];

        if(addProprio($nom, $prenom, $adresse, $email, $phone, $cni, $profession) == 1) {
            $reponse['statut'] = "success";
            $reponse['message'] = "Ajout effectuée avec succès";
        }


        echo json_encode($reponse);
    }

    if(isset($_POST['allProprio'])) {
        $proprio = getProprios();
        
        $reponse['data'] = $proprio;
        echo json_encode($reponse);
    }

    /**
     * Permet de rechercher un proprio
     */
    if(isset($_POST['id'])) {

        $proprio = findProById($_POST['id']);
        $reponse['data'] = $proprio;

        echo json_encode($reponse);
    }

    /**
     * Permet de modifier un Proprietaire
     */

    if(isset($_POST['dataUpdate'])) {
        
        $id = $_POST['dataUpdate'][0];
        $nom = $_POST['dataUpdate'][1];
        $prenom = $_POST['dataUpdate'][2];
        $adresse = $_POST['dataUpdate'][3];
        $email = $_POST['dataUpdate'][4];
        $cni = $_POST['dataUpdate'][5];
        $phone = $_POST['dataUpdate'][6];
        $profession = $_POST['dataUpdate'][7];

        if(updateProprio($id, $nom, $prenom, $adresse, $email, $cni, $phone, $profession)) {
            $reponse['message'] = "Proprietaire modifié avec succès :)";
            $reponse['status'] = "success";
        }else {
            $reponse['message'] = "Une erreur s'est produite lors de la modification :(";
            $reponse['status'] = "error";
        }

        echo json_encode($reponse);

     }


    /**
     * Permet de supprimer un locataire
     */
    if(isset($_POST['delete'])) {
        

        if(deleteProprio($_POST['delete'])) {
            $reponse['message'] = "Locataire supprimé avec succès";
            $reponse['status'] = "success";
        }else {
            $reponse['message'] = "Une erreur s'est produite lors de la suppression";
            $reponse['status'] = "error";
        }

        echo json_encode($reponse);
    }