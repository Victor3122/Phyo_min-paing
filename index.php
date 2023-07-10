<?php

require_once 'controller/passwordcontroller.php';

$action = $_GET['action'] ?? '';

$controller = new PasswordController();

switch ($action) {
    case 'generate':
        $controller->generatePassword();
        break;
    case 'save':
        $controller->savePassword();
        break;
    case 'delete':
        $id = $_GET['id'] ?? '';
        $controller->deletePassword($id);
        break;
    default:
        $controller->displayUsedPasswords();
        break;
}

?>
