<?php
require_once('Dbconnections.php');
require_once('ValidationEngine.php');

class AccountManager {
    private $db;
    private $valid;

    public function __construct() {
        $this->db = new Dbconnections();
        $this->valid = new ValidationEngine();
    }

    public function login($username, $password) {
        $conn = $this->db->getConnections();
        $user = $this->valid->validate($conn, $username);
        $pass = $this->valid->validate($conn, $password);

        $sql = "SELECT * FROM app_user WHERE username='$user' AND password='$pass'";
        return mysqli_query($conn, $sql);
    }

    public function register($username, $password) {
        $conn = $this->db->getConnections();
        $user = $this->valid->validate($conn, $username);
        $pass = $this->valid->validate($conn, $password);

        $sql = "INSERT INTO app_user (username, password) VALUES ('$user', '$pass')";
        return mysqli_query($conn, $sql);
    }
}
?>