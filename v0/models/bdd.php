<?php 


$serveur = "localhost"; 
$nomdb = "id14499369_building21";  
$user = 'id14499369_rootbuilding21';  
$mdp = '%|d_$5\TJyO5}w8k';  

/*$serveur = "localhost"; 
$nomdb = "building";  
$user = 'root';  
$mdp = '';*/  
 
try{  
    $db = new PDO('mysql:host='.$serveur.';dbname='.$nomdb,$user,$mdp, [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]); 
 
    }catch (PDOException $e){ 
    echo 'Erreur lors de la connexion à la BD :( : '.$e->getMessage();  
}  
?>