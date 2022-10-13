<?php
include_once('base.php');
class Blog extends Base{
  public string $name;
  public string $location;
  public string $sub_heading;
  public string $heading;
  public string $category;
  public string $body;
  public string $email;
  public function __construct($name, $location,$category, $sub_heading, $heading, $body, $email)
  {
    $this->name = $this->safe_input($name);
    $this->location = $this->safe_input($location);
    $this->sub_heading = $this->safe_input($sub_heading);
    $this->heading = $this->safe_input($heading);
    $this->category = $this->safe_input($category);       
    $this->body = $this->safe_input($body);  
    $this->email = $this->safe_input($email);
    parent::__construct();
  }

  public function save(){
    $sql = "INSERT INTO `blog`(`name`, `location`,`category`, `sub_heading`, `heading`, `body`, `email`, `created_at`) VALUES ('$this->name','$this->location','$this->category','$this->sub_heading','$this->heading','$this->body','$this->email','$this->date')";
    $status = $this->db->run_query($sql);
    if($status){
      $this->url = '../views/write.php?status=1';
    }
    else{
      $this->url = '../views/write.php?status=0';
    }
  }

  public function update($id){
    $sql = "UPDATE `blog` SET `name`='$this->name',`location`='$this->location',`sub_heading`='$this->sub_heading',`heading`='$this->heading',`category`='$this->category',`body`='$this->body',`email`='$this->email',`created_at`='$this->date' WHERE `id`='$id' ";
  
    $status = $this->db->run_query($sql);
    if($status){
      $this->url = '../views/admin-articles.php?update-status=1';
    }
    else{
      $this->url = '../views/admin-articles.php?status=0';
    }
  }
  public function url(){
    return $this->url;
}

}
function _get_blog($category){
  
  $db = getConnection();
  $sql = "SELECT * FROM `blog` WHERE blog.category= '$category' ORDER BY `blog`.`id` DESC LIMIT 1;";
  $blog_data = $db->run_query($sql);

  foreach($blog_data as $value) {

    return $value;

  }
}
function get_blog($id){
  
  $db = getConnection();
  $sql = "SELECT * FROM `blog` WHERE blog.id ='$id'";
  $blog_data = $db->run_query($sql);

  foreach($blog_data as $value) {

    return $value;

  }
}

  function get_blogs($category){
    $db = getConnection();
    $sql = "SELECT * FROM `blog` WHERE blog.category= '$category' ORDER BY `blog`.`id` DESC LIMIT 5;";
    $blogs = $db->run_query($sql);
    return $blogs;

  }

  function get_all_blogs(){
    $db = getConnection();
    $sql = "SELECT * FROM `blog` ORDER BY `blog`.`id` DESC";
    $blogs = $db->run_query($sql);

    return $blogs;

  }

  function delete_blog($id){
    $db = getConnection();
    $sql = "DELETE FROM `blog` WHERE `id`='$id'";
    echo $sql;
    $db->run_query($sql);

    return '../views/admin-articles.php?delete-status=1';

  }





#---------------------------------Main Start--------------------------------

  if (isset($_POST['submit'])){
    if ($_POST["submit"] == 'blog') {
      
      $name = $_POST["name"];
      $location = $_POST["location"];
      $sub_heading = $_POST["sub_heading"];
      $heading = $_POST["heading"];
      $body = $_POST["body"];
      $email = $_POST["email"];
      $category = $_POST["category"];

      $blog = new Blog($name,$location,$category ,$sub_heading, $heading, $body, $email);
      $blog->save();
      
      header("Location: ".$blog->url());
    }
    if ($_POST["submit"] == 'update') {
      $id = $_POST["id"];
      $name = $_POST["name"];
      $location = $_POST["location"];
      $sub_heading = $_POST["sub_heading"];
      $heading = $_POST["heading"];
      $body = $_POST["body"];
      $email = $_POST["email"];
      $category = $_POST["category"];

      $blog = new Blog($name,$location,$category, $sub_heading, $heading, $body, $email);
      $blog->update($id);

      header("Location: ".$blog->url());
      $id = $_GET["id"];
      
      header("Location: ".$blog->url());
      
      
    }
    
  }
  if(isset($_GET["action"])){
  if($_GET["action"] == 'delete'){
    $id = $_GET["id"];
    $url = delete_blog($id);
    header("Location: ".$url);

  }
}


#---------------------------------Main End--------------------------------
?>