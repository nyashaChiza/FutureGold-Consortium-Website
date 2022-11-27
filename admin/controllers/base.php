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

    public int $user_id;

    public function __construct(){
        $this->db = getConnection();
        $this->date = date("Y-m-d H:i:s");
        $this->user_id = $_SESSION['current_user']['id'];
    }

    public function safe_input(string $input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
      }
    public function get_base_url(string $return_url){
        $base = sprintf(
          "%s://%s:9000",
          isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
          $_SERVER['SERVER_NAME'],
          $_SERVER['REQUEST_URI']
        );
        return $base .'/'. $return_url;
      }

}

?>