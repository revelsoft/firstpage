<?php

require_once("BaseModel.php");
class ContactModel extends BaseModel{

    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getContactBy(){
        $sql = "SELECT * 
        FROM tb_contact ";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getContactByID($id){
        $sql = " SELECT * 
        FROM tb_contact
        WHERE contact_id = '$id' 
        ";

        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data;
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data = $row;
            }
            $result->close();
            return $data;
        }
    }
    
    function updateContactByID($id,$data = []){
       
    }

    function insertContact($data=[]){
        $sql = " INSERT INTO tb_contact(  
        contact_name,  
        contact_email 
        ) 
        VALUES ('". 
        $data['contact_name']."','".
        $data['contact_email']."' 
        )";
        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return mysqli_insert_id(static::$db);
        }else {
            return false;
        }
    }

    function deleteContactByID($id){
        $sql = "DELETE FROM tb_contact WHERE contact_id = '$id' ";
        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }
}
?>