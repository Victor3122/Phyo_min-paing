<?php
require_once 'model/passwordmodel.php';

class PasswordController {
    private $model;

    public function __construct() {
        $this->model = new PasswordModel();
    }

    public function generatePassword() {
        $generatedPassword = $this->model->generateRandomPassword($_POST['length'], isset($_POST['includeSpecialChars']));
        include 'view/view3.php';
    }

    public function savePassword() {
        $passwordToSave = $_POST['passwordToSave'];
        $this->model->savePassword($passwordToSave);
        $usedPasswords = $this->model->getUsedPasswords();
        include 'view/view1.php';
    }

    public function deletePassword($id) {
        $this->model->deletePassword($id);
        $usedPasswords = $this->model->getUsedPasswords();
        include 'view/view2.php';
    }

    public function displayUsedPasswords() {
        $usedPasswords = $this->model->getUsedPasswords();
        include 'view/view2.php';
    }
}
?>