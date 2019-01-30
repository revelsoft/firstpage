<?php

require_once("BaseModel.php");
class HomeSlideModel extends BaseModel{

    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        }
    }

    function getHomeSlideBy(){
        $sql = "SELECT * 
        FROM tb_home_slide 
        ";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }
   
    function getHomeSlideByID($id){
        $sql = " SELECT * 
        FROM tb_home_slide
        WHERE home_slide_id = '$id' 
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
    
    function updateHomeSlideByID($id,$data = []){
        
        $sql = " UPDATE tb_home_slide SET  
        home_slide_img = '".$data['home_slide_img']."' 
        WHERE home_slide_id = $id "; 

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return true;
        }else {
            return false;
        }
    }

    function insertHomeSlide($data=[]){
        $sql = " INSERT INTO tb_home_slide( 
        home_slide_img 
        ) 
        VALUES ('". 
        $data['home_slide_img']."' 
        )";
    if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
        return mysqli_insert_id(static::$db);
   }else {
        return false;
    }
}


function deleteHomeSlideByID($id){
    $sql = "DELETE FROM tb_home_slide WHERE home_slide_id = '$id' ";
    mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT); 
}




}
?>