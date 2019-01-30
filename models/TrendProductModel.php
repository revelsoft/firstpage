<?php

require_once("BaseModel.php");
class TrendProductModel extends BaseModel{

    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        }
    }

    function getTrendProductBy(){
        $sql = "SELECT * 
        FROM tb_trend_product 
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
   
    function getTrendProductByID($id){
        $sql = " SELECT * 
        FROM tb_trend_product
        WHERE trend_product_id = '$id' 
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
    
    function updateTrendProductByID($id,$data = []){
        
        $sql = " UPDATE tb_trend_product SET  
        trend_product_img = '".$data['trend_product_img']."',
        trend_product_title='".$data['trend_product_title']."', 
        trend_product_detail='".$data['trend_product_detail']."' 
        WHERE trend_product_id = $id "; 

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return true;
        }else {
            return false;
        }
    }

    function insertTrendProduct($data=[]){
        $sql = " INSERT INTO tb_trend_product( 
        trend_product_img,
        trend_product_title, 
        trend_product_detail 
        ) 
        VALUES ('". 
        $data['trend_product_img']."','".
        $data['trend_product_title']."','". 
        $data['trend_product_detail']."' 
        )";
    if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
        return mysqli_insert_id(static::$db);
   }else {
        return false;
    }
}


function deleteTrendProductByID($id){
    $sql = "DELETE FROM tb_trend_product WHERE trend_product_id = '$id' ";
    mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT); 
}




}
?>