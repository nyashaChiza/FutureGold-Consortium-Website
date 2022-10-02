<?php
include_once('base.php');
class Blog extends Base{
  public string $name;
  public string $location;
  public string $sub_heading;
  public string $heading;
  public string $body;
  public string $email;
  public function __construct($name, $location, $sub_heading, $heading, $body, $email)
  {
    $this->name = $this->safe_input($name);
    $this->location = $this->safe_input($location);
    $this->sub_heading = $this->safe_input($sub_heading);
    $this->heading = $this->safe_input($heading);
    $this->body = $this->safe_input($body);  
    $this->email = $this->safe_input($email);
    parent::__construct();
  }

  public function save(){
    $sql = "INSERT INTO `blog`(`name`, `location`, `sub_heading`, `heading`, `body`, `email`, `created_at`) VALUES ('$this->name','$this->location','$this->sub_heading','$this->heading','$this->body','$this->email','$this->date')";
    $status = $this->db->run_query($sql);
    if($status){
      $this->url = '../views/write.php?status=1';
    }
    else{
      $this->url = '../views/write.php?status=0';
    }
  }

  function url(){
    return $this->url;
}

}
function get_blog($id){
  $db = getConnection();

  $sql = "SELECT * FROM `blog` WHERE blog.id ='$id'";
  $blog_data = $db->run_query($sql);
  return $blog_data;

}

#---------------------------------Main Start--------------------------------

if (1) {
  if ($_POST["submit"] == 'blog') {
    $name = $_POST["name"];
    $location = $_POST["location"];
    $sub_heading = $_POST["sub_heading"];
    $heading = $_POST["heading"];
    $body = $_POST["body"];
    $email = $_POST["email"];

    $blog = new Blog($name,$location, $sub_heading, $heading, $body, $email);
    $blog->save();
    
    header("Location: ".$blog->url());
  }
  elseif ($_GET["id"]){
    $id = $_GET["id"];
     

  }

}
#---------------------------------Main End--------------------------------
?>
