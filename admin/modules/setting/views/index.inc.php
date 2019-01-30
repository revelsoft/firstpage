<?php
require_once('../models/SettingModel.php');

$path = "modules/setting/views/";

$setting_model = new SettingModel;

 

if ($_GET['action'] == 'delete'){ 

}else if($_GET['action'] == 'edit' ){
      
    $data = [];
    $data['setting_tel'] = $_POST['setting_tel']; 
    $data['setting_address'] = $_POST['setting_address']; 
    $data['setting_email'] = $_POST['setting_email'];  
 

     
    $setting = $setting_model->updateSettingByID($_POST['setting_id'],$data);

    if($setting){
        ?> <script>
        window.location="index.php?content=setting"
        </script> <?php
    }else{
        ?>  <script> 
        window.history.back(); 
        </script> <?php
    }
    
     
     
}else {
    $setting = $setting_model->getSettingByID('1');
    require_once($path.'view.inc.php');
}
?>