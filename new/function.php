<?php
session_start();
class Connection{
    public $dbh;
    function __construct(){
        $this->dbh = new mysqli("localhost","root","","enjay");
       
    }
    public function insert_data($name,$email,$msg) {
        $return = $this->dbh->query("INSERT INTO `tb1`(name,email,message) VALUES('$name','$email','$msg')");
        return $return;
    }
    public function display_data() {
        $return = $this->dbh->query("SELECT * FROM `tb1`");
        return $return;
    }

    public function delete_data($id){
        $return = $this->dbh->query("DELETE FROM `tb1` WHERE `id`= $id");
        return $return;
    }
    public function update_data($name,$email,$msg,$id) {
        $return = $this->dbh->query("UPDATE `tb1` SET `name`='$name',`email`='$email',`message`='$msg' WHERE `id` = '$id'");
        return $return;
    }
  
}   


?>