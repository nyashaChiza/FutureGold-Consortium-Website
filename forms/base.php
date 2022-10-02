<?php
include_once('../db/connection.php');

class Base{

    public $db;
    public $date;
    public String $url;
    public function __construct(){  
        $this->url = '';
        $this->db = getConnection();
        $this->date = date("Y-m-d H:i:s");
    }

    public function safe_input($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
      }
}

?>