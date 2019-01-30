<?php 
require_once('../models/HomeSlideModel.php');  

$path = "modules/home_slide/views/";
 
$home_slide_model = new HomeSlideModel;   

date_default_timezone_set("Asia/Bangkok");
$d1=date("d");
$d2=date("m");
$d3=date("Y");
$d4=date("H");
$d5=date("i");
$d6=date("s");
$date="$d1$d2$d3$d4$d5$d6";

$target_dir = "../img_upload/home_slide/";

$home_slide_id = $_GET['id'];
if($_GET['action'] == 'insert'){   
    
    require_once($path.'insert.inc.php');

}else if ($_GET['action'] == 'update'){  

    $home_slide = $home_slide_model->getHomeSlideByID($home_slide_id);  
    require_once($path.'update.inc.php');


}else if ($_GET['action'] == 'delete'){ 

    $home_slide = $home_slide_model->getHomeSlideByID($home_slide_id); 
    if($home_slide['home_slide_img']!=""){
        $target_file = $target_dir .$home_slide['home_slide_img'];
        if (file_exists($target_file)) {
            unlink($target_file);
        } 
    }
    $home_slide_model->deleteHomeSlideByID($home_slide_id); 
    ?>
    <script>window.location="index.php?content=home_slide"</script>
    <?php
    
    
}else if ($_GET['action'] == 'add'){
       
    $check = true;
    $data = [];   

    $input_image = array("home_slide_img");

    for($i = 0;$i<count($input_image);$i++){
        if($_FILES[$input_image[$i]]['name'] == ""){
            $data[$input_image[$i]] = ""; 
        }else {
            $target_file = $target_dir .$date.'-'.strtolower(basename($_FILES[$input_image[$i]]["name"]));
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if file already exists
            if (file_exists($target_file)) {
                $error_msg =  "ขอโทษด้วย. มีไฟล์นี้ในระบบแล้ว";
                $check = false;
            }else if ($_FILES[$input_image[$i]]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES[$input_image[$i]]["tmp_name"], $target_file)) { 
                $data[$input_image[$i]] = $date.'-'.strtolower(basename($_FILES[$input_image[$i]]["name"]));
            } else {
                $error_msg =  "ขอโทษด้วย. ระบบไม่สามารถอัพโหลดไฟล์ได้.";
                $check = false;
            } 
        }
    } 

    if($check == false){
        ?>  <script>  alert('<?php echo $error_msg; ?>'); window.history.back(); </script>  <?php
    }else{
        $check_result = $home_slide_model->insertHomeSlide($data);
        if($check_result!=false){   
            ?>
            <script>window.location="index.php?content=home_slide"</script>
            <?php
        }else{
            ?>  <script> window.history.back(); </script> <?php
        }
    }  

}else if ($_GET['action'] == 'edit'){
        $home_slide_id = $_POST['home_slide_id'];
        $check = true;
        $data = [];       

        $input_image = array("home_slide_img");

        for($i = 0;$i<count($input_image);$i++){
            if($_FILES[$input_image[$i]]['name'] == ""){
                $data[$input_image[$i]] = $_POST[$input_image[$i].'_o'];
            }else {
                $target_file = $target_dir .$date.'-'.strtolower(basename($_FILES[$input_image[$i]]["name"]));
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // Check if file already exists
                if (file_exists($target_file)) {
                    $error_msg =  "ขอโทษด้วย. มีไฟล์นี้ในระบบแล้ว";
                    $check = false;
                }else if ($_FILES[$input_image[$i]]["size"] > 5000000) {
                    $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                    $check = false;
                }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                    $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                    $check = false;
                }else if (move_uploaded_file($_FILES[$input_image[$i]]["tmp_name"], $target_file)) {
                    $data[$input_image[$i]] = $date.'-'.strtolower(basename($_FILES[$input_image[$i]]["name"]));
                    if($_POST[$input_image[$i].'_o']!=""){
                        $target_file = $target_dir . $_POST[$input_image[$i].'_o'];
                        if (file_exists($target_file)&&$_POST[$input_image[$i].'_o']!='') {
                            unlink($target_file);
                        }
                    }
                } else {
                    $error_msg =  "ขอโทษด้วย. ระบบไม่สามารถอัพโหลดไฟล์ได้.";
                    $check = false;
                } 
            }
        } 

        if($check == false){
            ?>  <script>  alert('<?php echo $error_msg; ?>'); window.history.back(); </script>  <?php
        }else{
            $check_result = $home_slide_model->updateHomeSlideByID($home_slide_id,$data);
            if($check_result!=false){
                ?>
                <script>window.location="index.php?content=home_slide&action=update&id=<?PHP echo $home_slide_id;?>"</script>
                <?php
            }else{
                ?>  <script> window.history.back(); </script> <?php
            }
        } 
     
}else {
    $home_slide = $home_slide_model->getHomeSlideBy(); 
    require_once($path.'view.inc.php');
}
?>