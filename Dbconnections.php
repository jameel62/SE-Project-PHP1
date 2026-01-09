<?php
/**
 * @package crc.Database
 */
class Dbconnections {
    private $_connections;

    public function getConnections() {
        $host = "localhost";
        $user = "root";     
        $pass = "";         
        $db = "project_db"; 
        
        $this->_connections = mysqli_connect($host, $user, $pass, $db);
        
        if (!$this->_connections) {
            die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
        }
        return $this->_connections;
    }
}
?>
