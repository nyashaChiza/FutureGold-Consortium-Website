<?php
    include_once('base.php');

    class Application extends Base{
        public string $name;
        public string $email;
        public string $contact;
        public string $course;
        public function __construct($name, $contact, $email, $course)
        {
          $this->name = $this->safe_input($name);
          $this->email = $this->safe_input($email);
      
          $this->contact = $this->safe_input($contact);  
          $this->course = $this->safe_input($course);
          parent::__construct();
        }
        public function save(){
            $sql = "INSERT INTO `application`(`name`, `contact`, `course`, `email`, `created_at`) VALUES ('$this->name','$this->contact','$this->course','$this->email','$this->date')";
            $status = $this->db->run_query($sql);
            if($status){
              $this->url = '../views/apply.php?status=1';
            }
            else{
              $this->url = '../views/apply.php?status=0';
            }
          }

        public function url(){
            return $this->url;
        }
    }
    function get_all_applications(){
      $db = getConnection();
      $sql = "SELECT * FROM `application` ORDER BY `application`.`id` DESC";  
      $data = $db->run_query($sql);
      
      return $data;

  }
    
    //-----------------------------------main start-----------------------------
    if ($_POST["submit"] == 'application') {
        $name = $_POST["name"];
        $course = $_POST["course"];
        $email= $_POST["email"];
        $contact = $_POST["contact"];

        $app = new Application($name, $contact, $email, $course);
        $app->save();
        
        header('Location: ' . $app->url()); 


    }