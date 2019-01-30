<?php 
require_once('../models/ContactModel.php');  

$path = "modules/contact/views/";
 
$contact_model = new ContactModel;   
 
if($_GET['action'] == 'insert'){   
    
}else if ($_GET['action'] == 'update'){  
    
}else if ($_GET['action'] == 'delete'){ 
    
}else if ($_GET['action'] == 'add'){
        
}else if ($_GET['action'] == 'edit'){
         
}else {

    $contact = $contact_model->getContactBy();
    require_once($path.'view.inc.php');

}
?>