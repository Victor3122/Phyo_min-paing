<?php

class PasswordModel {
    private $servername = "localhost";
    private $username = "password_user";
    private $password = "P@ssw0rd!";
    private $dbname = "passwordf";

    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function generateRandomPassword($length, $includeSpecialChars = false) {
        // Generate a random password logic here
    }

    public function savePassword($passwordToSave) {
        $sql = "INSERT INTO passwords (password) VALUES ('$passwordToSave')";
        $this->conn->query($sql);
    }

    public function deletePassword($id) {
        $sql = "DELETE FROM passwords WHERE id = $id";
        $this->conn->query($sql);
    }

    public function getUsedPasswords() {
        $usedPasswords = [];

        $sql = "SELECT id, passwords FROM passwordf";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $usedPasswords[] = $row;
            }
        }

        return $usedPasswords;
    }
}

?>
