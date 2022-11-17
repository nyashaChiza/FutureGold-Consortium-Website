<?php
session_start();
    include_once('base.php');

    class Auth extends Base{
        private String $email;
        private String $password;



        public String $sql;

        public function __construct($email, $password)
        {
            $this->email = $this->safe_input($email);
            $this->password = $this->safe_input($password);
     
            $this->sql = '';
             
            parent::__construct();
        }

        function login(){
            $this->sql = "SELECT * FROM `users` WHERE `email`='$this->email' AND `password`='$this->password'";
            $auth = $this->db->run_query($this->sql);
          
            if($auth->num_rows >0){
                
                $this->url = '../admin/views/index.php';
                $_SESSION['is_authenticated'] = true;
            }
            else{
                
                $this->url = '../admin/index.php?status=0.php';
            }
        }

        function url(){
            return $this->url;
        }
    }

    //-----------------------------------main start-----------------------------
    if($_POST['submit'] == 'auth'){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $auth = new Auth($email, $password);
        $auth->login();
        // echo $auth->sql;
        header('Location: ' . $auth->url());
        
    }
    
    //-----------------------------------main end-------------------------------

?>