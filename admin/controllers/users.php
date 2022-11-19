<?php
include_once('base.php');
class Users extends Base {
    public string $name;
    public string $email;
    public string $password;
    public $status;
    public string $msg;
    public string $role;

    public $user_data;
    public function __construct($name, $email, $password, $role)
    {
      $this->name = $this->safe_input($name);
      $this->email = $this->safe_input($email);
      $this->role = $this->safe_input($role);
      $this->password = password_hash($this->safe_input($password), PASSWORD_DEFAULT);
      parent::__construct();
    }
  
    public function save(){
      $sql = "INSERT INTO `users`( `email`, `password`, `name`, `last_log_in`)  VALUES ('$this->email','$this->password','$this->name','$this->date')";
      $status = $this->db->run_query($sql);
      if($status){
        $this->url = '../views/users/index.php?status=1';
      }
      else{
        $this->url = '../views/users/index.php?status=0';
      }
    }
  
    public function url(){
      return $this->url;
  }
  
}

function login($email, $password)
{
    $db = getConnection();
    $sql = "SELECT * FROM `users` WHERE users.email= '" . $email."'";
    $result = $db->run_query($sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $sql = "SELECT * FROM `users` WHERE email='$email'";

        $_result = $db->run_query($sql);

        if ($_result->num_rows > 0) {
            $password_data = $_result->fetch_all(MYSQLI_ASSOC);
            $password_hash = $password_data[0]['password'];
            $name = $password_data[0]['name'];
            $role = $password_data[0]['role'];
            $id = $password_data[0]['id'];

            if(password_verify($password, $password_hash)){
                $date = date("Y-m-d H:i:s");
                $sql = "UPDATE `users` SET `last_log_in`='$date' WHERE `email`='$email'";
                $db->run_query($sql);
                return array('id'=>$id,'status'=>true, 'name'=>$name,'role'=>$role);
            }
            else {
                return array('status'=>false);
            }    
        }

    } else {
       false;
    }
}
function get_all_users(){
    $db = getConnection();
    $sql = "SELECT * FROM `users` ORDER BY `users`.`id` DESC";
    $users = $db->run_query($sql);

    return $users;

  }
  function delete_user($id){
    $db = getConnection();
    $sql = "DELETE FROM `users` WHERE `id`='$id'";
  
    $db->run_query($sql);

    return '../views/users/index.php?delete-status=1';

  }

  #---------------------------------Main Start--------------------------------
  
    if (isset($_POST['submit'])){
        if ($_POST["submit"] == 'auth') {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $auth = login($email, $password);

            if($auth['status']){
                
                $url = '../views/index.php';
                $_SESSION['is_authenticated'] = true;
                $_SESSION['current_user'] = $auth;
            }
            else{     
                $_SESSION['is_authenticated'] = false;        
                $url = '../index.php?status=0.php';
            }

            header("Location: ".$url);


  
        }    
        if ($_POST["submit"] == 'users') {
        
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $role = $_POST["role"];
  
        $user = new Users($name,$email,$password ,$role);
        $user->save();
        
        header("Location: ".$user->url());
      }
      
    }
    if(isset($_GET["action"])){
    if($_GET["action"] == 'delete'){
      $id = $_GET["id"];
      $url = delete_user($id);
      header("Location: ".$url);
  
    }
  }

  if(isset($_GET["logout"])){
    
      unset($_SESSION['current_user']);
      header("Location: ../index.php");
  

}
  
  
  #---------------------------------Main End--------------------------------

?>