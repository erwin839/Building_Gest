<?php 

$serveur = "localhost"; 
$nomdb = "building";  
$user = 'root';  
$mdp = '';  
 
try{  
    $db = new PDO('mysql:host='.$serveur.';dbname='.$nomdb,$user,$mdp, [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]); 
 
    }catch (PDOException $e){ 
    echo 'Erreur lors de la connexion à la BD :( : '.$e->getMessage();  
}  
?>