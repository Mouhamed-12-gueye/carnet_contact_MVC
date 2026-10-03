<?php
    $host="tonServeur";
    $login="tonLogin";
    $passwrd="tonMotDePasse";
    try{
        $db=new PDO("mysql:host=$host;dbname=carnet", $login, $passwrd);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e){
        echo"Erreur de connexion: ". $e->getMessage();
        exit();
    }
?>