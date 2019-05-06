<?php


require_once("BaseModel.php");
class AboutModel extends BaseModel{

    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getAboutBy(){
        $sql = "SELECT * 
        FROM tb_about ";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getAboutByID($id){
        $sql = " SELECT * 
        FROM tb_about
        WHERE about_id = '$id' 
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
    
    function updateAboutByID($id,$data = []){
        $sql = " UPDATE tb_about SET  
        about_detail = '".$data['about_detail']."' 
        WHERE about_id = $id "; 

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }

    function insertAbout($data=[]){
        
    }

    function deleteAboutByID($id){
        
    }
}
?>