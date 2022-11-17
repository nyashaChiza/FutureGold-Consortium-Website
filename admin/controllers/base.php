<?php

error_reporting(E_ERROR | E_PARSE);
include_once('../../../db/connection.php');
include_once('../../db/connection.php');

class Base{
    
    public $date;
    public $db;
    public $conn;

    public function __construct(){
        $this->db = getConnection();
        $this->date = date("Y-m-d H:i:s");
    }

    public function run_query(string $query){
          	
        $result = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));
        
        if(!$result){

            $result = null;
            
        }

        return $result;

    }

    public function safe_input($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
      }

}

?>