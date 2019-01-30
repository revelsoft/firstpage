<?PHP
 
 
if($page=="setting"||$page==""){ 
    require_once("modules/setting/views/index.inc.php"); 
}else if($page=="home_slide"){ 
    require_once("modules/home_slide/views/index.inc.php");   
}else if($page=="trend_product"){ 
    require_once("modules/trend_product/views/index.inc.php");   
}else if($page=="product"){ 
    require_once("modules/product/views/index.inc.php");   
}else if($page=="about"){ 
    require_once("modules/about/views/index.inc.php");   
}else if($page=="contact"){ 
    require_once("modules/contact/views/index.inc.php");   
}


?>