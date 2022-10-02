<?php
include_once('base.php');
class Contact extends Base{
  public string $name;

  public string $subject;
  public string $heading;
  public string $body;
  public string $email;
  public function __construct($name, $subject, $body, $email)
  {
    $this->name = $this->safe_input($name);
    $this->subject = $this->safe_input($subject);

    $this->body = $this->safe_input($body);  
    $this->email = $this->safe_input($email);
    parent::__construct();
  }

  public function save(){
    $sql = "INSERT INTO `contacts`(`name`,`email`, `subject`,`body`,`created_at`,`other`) VALUES ('$this->name','$this->email','$this->subject','$this->body','$this->date','tunnel vision')";
    $this->db->run_query($sql);
    $this->url='../views/contact.php?status=1';

  }
  public function url()
  {
    return $this->url;
  }

}


#---------------------------------Main Start--------------------------------

if (1) {
  if ($_POST["submit"] == 'contact') {
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $body = $_POST["body"];
    $email = $_POST["email"];

    $contact = new Contact($name, $subject, $body, $email);
    $contact->save();

    header("Location: ".$contact->url());

  }

}
#---------------------------------Main End--------------------------------
?>
