<?php 
    function getAllContacts($db){
        $all=$db->query("SELECT * FROM contacts ORDER BY nom ASC");
        return $all->fetchAll(PDO::FETCH_ASSOC); 
    }

    function getContactById($db, $id){
        $stmt=$db->prepare("SELECT * FROM contacts WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function addContact($db, $nom, $email, $phone){
        $add=$db->prepare("INSERT INTO contacts (nom, email, phone) VALUES (?, ? ,?)");
        return $add->execute([$nom, $email, $phone]);
    }

    function delContact($db, $id){
        $del=$db->prepare("DELETE FROM contacts WHERE id =?");
        return $del->execute([$id]);
    }

    function updateContact($db, $id ,$nom, $email, $phone){
        $up=$db->prepare("UPDATE contacts SET nom=?, email=?, phone=? WHERE id =?");
        return $up->execute([$nom, $email, $phone, $id]);
    }
    function validateContact($nom, $email, $phone){
        $errors=[];
        if(empty($nom)){
        $errors[]="Le nom est obligatoire";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[]="Email invalide";
        }
        if(!preg_match('/^[0-9+\-\s]{6,20}$/', $phone)){
            $errors[]="Numéro de téléphone invalide";
        }
        return $errors;
    }

?>