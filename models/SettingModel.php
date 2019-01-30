<?php


require_once("BaseModel.php");
class SettingModel extends BaseModel{

    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getSettingBy(){
        $sql = "SELECT * 
        FROM tb_setting ";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getSettingByID($id){
        $sql = " SELECT * 
        FROM tb_setting
        WHERE setting_id = '$id' 
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
    
    function updateSettingByID($id,$data = []){
        $sql = " UPDATE tb_setting SET 
        setting_tel = '".$data['setting_tel']."',
        setting_address = '".$data['setting_address']."', 
        setting_email = '".$data['setting_email']."'
        WHERE setting_id = $id "; 

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }

    function insertSetting($data=[]){
        
    }

    function deleteSettingByID($id){
        
    }
}
?>