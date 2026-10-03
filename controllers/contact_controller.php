<?php

function showContactsForm(){
    require __DIR__ . '/../view/contact/form.php';
}

function insertContact($db){
    $nom   = trim($_POST['nom'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    
    $errors = validateContact($nom, $email, $phone);

    if (!empty($errors)){
        require __DIR__ . '/../view/contact/form.php';
        return;
    }

    addContact($db, $nom, $email, $phone);

    header("location: index.php?action=list");
    exit;
}

function showContactList($db){
    $contacts=getAllContacts($db);
    require __DIR__ . '/../view/contact/list.php';
}

function removeContact($db){
    $id= $_GET['id'] ?? null;

    if($id){
        delContact($db, $id );
    }

    header("location: index.php?action=list");
    exit;
}

function modifContact($db){
    $id=$_GET['id'] ?? null;
    $contact = getContactById($db, $id);
    if(!$contact){
        header("location: index.php?action=list");
    }
    require __DIR__ . '/../view/contact/edit.php';
    return;
}
?>