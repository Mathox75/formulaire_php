<?php 
    $user='root';
    $pwd='';


    try{
        $db = new PDO('mysql:host=localhost;dbname=hotel', $user, $pwd);
     
    } catch(PDOexception $e){
        echo 'Erreur de connexion' . $e->getMessage() . '!';
        die();
    }



?>