<?php
require_once('../models/AboutModel.php');

$path = "modules/about/views/";

$about_model = new AboutModel; 

if ($_GET['action'] == 'delete'){ 

}else if($_GET['action'] == 'edit' ){
      
    $data = [];
    $data['about_detail'] = $_POST['about_detail'];   
     
    $about = $about_model->updateAboutByID($_POST['about_id'],$data);

    if($about){
        ?> <script>
        window.location="index.php?content=about"
        </script> <?php
    }else{
        ?>  <script> 
        window.history.back(); 
        </script> <?php
    }
    
     
     
}else {
    $about = $about_model->getAboutByID('1'); 
    require_once($path.'view.inc.php');
}
?>