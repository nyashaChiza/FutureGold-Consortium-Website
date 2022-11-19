<?php
include_once('base.php');
class Applications extends Base {

}
function get_all_applications(){
    $db = getConnection();
    $sql = "SELECT * FROM `application` ORDER BY `application`.`id` DESC";  
    $data = $db->run_query($sql);
    return $data;

}

function get_application($id){
    $db = getConnection();
    $output = array();
    $sql = "SELECT * FROM `application` WHERE `id`= $id";  
    $data = $db->run_query($sql);
    foreach($data as $key=>$value){
        $output[$key] = $value;
    }
    return $output;

}

#---------------------------------Main Start--------------------------------

#---------------------------------Main End---------------------------------

?>