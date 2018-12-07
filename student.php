<?php
    $filepath = realpath(dirname(__File__));
    include_once ($filepath.'/config.php');
    include_once ($filepath.'/database.php');
?>

<?php

class Student{
    private $db;
    
    
    public function _construct(){
        $this->db = new Database();
        
 
    }

    public function getStudents(){
       $query = "SELECT * FROM tbl_student";
        $result = $this->db->select($query);
        return $result;
        
    }
}

?>