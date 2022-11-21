<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
error_reporting(E_ERROR | E_PARSE);
include_once('../../../db/connection.php');
include_once('../../db/connection.php');

class Base{
    
    public $date;
    public $db;
    public $conn;
    public int $user_id;

    public function __construct(){
        $this->db = getConnection();
        $this->date = date("Y-m-d H:i:s");
        $this->user_id = $_SESSION['current_user']['id'];
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
    public function get_base_url($url){
        $base = sprintf(
          "%s://%s:9000",
          isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
          $_SERVER['SERVER_NAME'],
          $_SERVER['REQUEST_URI']
        );
        return $base .'/'. $url;
      }

}

?>