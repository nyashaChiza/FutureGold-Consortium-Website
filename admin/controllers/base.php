<?php
class Base{
    
    public $conn;
    public $db = "crypto_db";
    public $server = "localhost:3306";
    public $username = "ewd_user";
    public $password = "MountainFire2022";

    public function __construct($db, $server, $username, $password){
        $this->db = $db;
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;

        $this->conn = new mysqli($this->db, $this->username, $this->password, $this->server);
    }

    public function run_query(string $query){
          	
        $result = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));
        
        if(!$result){
            $result = null;
        }
        
        return $result;
    }

}
?>