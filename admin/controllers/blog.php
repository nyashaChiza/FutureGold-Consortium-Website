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
  public string $status;
  public function __construct($name, $location,$category, $sub_heading, $heading, $body, $email, $status)
  {
    $this->name = $this->safe_input($name);
    $this->location = $this->safe_input($location);
    $this->sub_heading = $this->safe_input($sub_heading);
    $this->heading = $this->safe_input($heading);
    $this->category = $this->safe_input($category);       
    $this->body = $this->safe_input($body);  
    $this->email = $this->safe_input($email);
    $this->status = $this->safe_input($status);
    parent::__construct();
  }

  public function save(){
    $sql = "INSERT INTO `blog`(`name`, `location`,`category`, `sub_heading`, `heading`, `body`, `email`,`status`, `created_at`) VALUES ('$this->name','$this->location','$this->category','$this->sub_heading','$this->heading','$this->body','$this->email','$this->status', '$this->date')";
    $status = $this->db->run_query($sql);
    if($status){
      $this->url = '../../admin/views/articles/index.php?status=1';
    }
    else{
      $this->url = '../../admin/views/articles/index.php?status=0';
    }
  }

  public function update($id){
    $sql = "UPDATE `blog` SET `name`='$this->name',`location`='$this->location',`sub_heading`='$this->sub_heading',`heading`='$this->heading',`category`='$this->category',`body`='$this->body',`email`='$this->email',`status`='$this->status',`created_at`='$this->date' WHERE `id`='$id' ";
  
    $status = $this->db->run_query($sql);
    if($status){
      $this->url = '../../admin/views/articles/index.php?update-status=1';
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

  function get_stats(){
    $db = getConnection();
    $sql_blogs = "SELECT id FROM `blog`;";
    $sql_applications = "SELECT id FROM `application`;";
    $sql_courses = "SELECT id FROM `blog`;";

    $blogs = $db->run_query($sql_blogs);
    $applications = $db->run_query($sql_applications);
    #$courses = $db->run_query($sql_courses);

    return array('blogs' => mysqli_num_rows($blogs), 'courses' => 4, 'applications' => mysqli_num_rows($applications));

  }

  function get_post_stats(){
    $db = getConnection();
    $sql_all = "SELECT * FROM `blog`";
    $sql_pending = "SELECT * FROM `blog` WHERE status = 'pending';";
    $sql_trash = "SELECT * FROM `blog` WHERE status = 'trash';";
    $sql_draft = "SELECT * FROM `blog` WHERE status = 'draft';";
    $sql_posted = "SELECT * FROM `blog` WHERE status = 'posted';";
    
    $all = $db->run_query($sql_all);
    $pending = $db->run_query($sql_pending);
    $trash = $db->run_query($sql_trash);
    $drafts = $db->run_query($sql_draft);
    $posted = $db->run_query($sql_posted);

    return array('all' => mysqli_num_rows($all), 'pending' => mysqli_num_rows($pending), 'trash' => mysqli_num_rows($trash), 'drafts'=>mysqli_num_rows($drafts), 'posted'=>mysqli_num_rows($posted));

  }

  function delete_blog($id){
    $db = getConnection();
    $sql = "DELETE FROM `blog` WHERE `id`='$id'";
    $db->run_query($sql);

    return '../views/articles/index.php?delete-status=1';

  }





#---------------------------------Main Start--------------------------------


  if (isset($_POST['submit'])){
    if ($_POST["submit"] == 'blog') {
      echo 'mu codoition';
      $name = $_POST["name"];
      $location = $_POST["location"];
      $sub_heading = $_POST["sub_heading"];
      $heading = $_POST["heading"];
      $status = $_POST["status"];
      $body = $_POST["area2"];
      $email = $_POST["email"];
      $category = $_POST["category"];

      $blog = new Blog($name,$location,$category ,$sub_heading, $heading, $body, $email, $status);
      $blog->save();
      
      header("Location: ".$blog->url());
    }
    if ($_POST["submit"] == 'update') {
      $id = $_POST["id"];
      $name = $_POST["name"];
      $location = $_POST["location"];
      $sub_heading = $_POST["sub_heading"];
      $status = $_POST["status"];
      $heading = $_POST["heading"];
      $body = $_POST["body"];
      $email = $_POST["email"];
      $category = $_POST["category"];

      $blog = new Blog($name,$location,$category, $sub_heading, $heading, $body, $email, $status);
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