<?php
class Database {

    private $servername;
    private $username;
    private $password;
    private $dbName;
    private $conn;

    function __construct($servername, $username, $password, $dbName) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;
      }
    
    public function checkConnection(){
        if($this->conn->connect_error){
            return false;
        }
        else{
            return true;
        }
    }
    private function createConnection() {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbName);
        
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } 
        $this->conn = $conn;
    }
    
    public function run_query($query){
        
        $this->createConnection();
        $result = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));
        
        if(!$result){
            $result = null;
        }
        
        return $result;
    }
}
//Pa$$word@123
function getConnection() {
    $db = new Database('localhost:3306', 'iom_user', '1234', 'crypto_db');    
    return $db;
}
?>