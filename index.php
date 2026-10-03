<?php
require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/models/contact_model.php';
require_once __DIR__ . '/controllers/contact_controller.php';

$action = $_GET['action'] ?? 'list';

switch ($action) {
    case 'form':
        showContactsForm();
        break;
    case 'add':
        insertContact($db);
        break;
    case 'delete':
        removeContact($db);
        break;
    case 'edit': 
        modifContact($db);
        break;
    default:
        showContactList($db);
        break;
}