<?php

require_once("BaseModel.php");
class HomeModel extends BaseModel{

    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        }
    }

    function getHomeBy(){
        $sql = "SELECT * 
        FROM tb_home ";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getHomeByID($id){
        $sql = " SELECT * 
        FROM tb_home
        WHERE home_id = '$id' 
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
    
    function updateHomeByID($id,$data = []){
        $sql = " UPDATE tb_home SET  
        home_img = '".$data['home_img']."',
        home_content_1_title = '".$data['home_content_1_title']."',
        home_content_1_detail='".$data['home_content_1_detail']."',  
        home_content_2_detail='".$data['home_content_2_detail']."', 
        home_content_3_title = '".$data['home_content_3_title']."', 
        home_content_3_detail = '".$data['home_content_3_detail']."',  
        updateby = '".$data['updateby']."',        
        lastupdate = NOW() 
        WHERE home_id = $id "; 
        // echo $sql;
        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }

    function insertHome($data=[]){
        
    }

    function deleteHomeByID($id){
        $sql = "DELETE FROM tb_home WHERE home_id = '$id' ";
        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }
}
?>