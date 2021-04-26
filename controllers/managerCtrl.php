<?php

    require_once '../models/managerBD.php';

    /**
     * @param $reponse permet de creer le tableau de retour pour ajax 
     */
    $reponse = array();

    if(isset($_POST['connect'])){
        //extract($_POST);

        $login = $_POST['connect'][0];
        $password = $_POST['connect'][1];
        $user = Connexion($login, $password);

        if($user != null){
            session_start();
            #Les sessions
            #$_SESSION['auth']['connected'] = "Connection reussie avec succes! ";
            $_SESSION['connected'] = "Connection reussie avec succes! ";
            $_SESSION['auth'] = $user;
            $_SESSION['auth']['site'] = getSiteData();
            $reponse['result'] = true;
            $reponse['success'] = " Connexion reussie ";
            
        // header("Location: /Admin_Gest/acceuil.php?page=ohayo");
        }else{
            // header("Location: /Admin_Gest/?error");
            
            $reponse['result'] = false;
            $reponse['error'] = " Erreur lors de la connexion! ";
        }
        echo json_encode($reponse);
    }

    if(!empty($_FILES)) {
        $folder_name = '../public/Ui_Our/images/';  

        $temp_file = $_FILES['file']['tmp_name'];
        $location = $folder_name . $_FILES['file']['name'];
        move_uploaded_file($temp_file, $location);
        $profil = $_FILES['file']['name'];
        $res = editPhoto($profil);
        session_start();
        unset($_SESSION['auth']);
        $_SESSION['auth'] = reloadUserData();
    }

    /**
     *  -> Add manager (he should confirm his account by mail)
     */

    if(isset($_POST['ch_username'])){

        //$dataProfil = explode(',', $_POST['ch_username']);

        $username = $_POST['ch_username'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $phone = $_POST['phone'];
        $mail = $_POST['Email'];

        if(editProfil($username, $nom, $prenom, $adresse, $phone, $mail) == 1){
            session_start();
            unset($_SESSION['auth']);
            $_SESSION['auth'] = reloadUserData();

            //var_dump($_SESSION['auth']);

            $reponse['status'] = 'success';
            $reponse['message'] = 'Recharger la page pour voir les modifications';
        }else{
            $reponse['status'] = 'error';
            $reponse['message'] = 'Activer votre connexion por modifier votre profil';
        }

        echo json_encode($reponse);

    }

    if(isset($_GET['Deconnexion'])){
        session_start();
        //var_dump($_SESSION['auth']); die();
        unset($_SESSION['auth']);
        header("Location: /Admin_Gest/");
    }