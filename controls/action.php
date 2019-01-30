<?PHP 
require_once('../models/ContactModel.php');

$contact_model = new ContactModel;

if($_GET['action'] == 'signup'){
    if(isset($_POST['name'])){
        $data = [];
        $data['contact_name'] = trim($_POST['name']);
        $data['contact_email'] = trim($_POST['email']);

        $result = $contact_model->insertContact($data);

        ?>
        <script> 
            alert("sign up for free complete"); 
            window.location = "../";
        </script>
        <?PHP
    }else{
        ?>  
        <script> 
            alert("sign up for free failed");
            window.history.back(); 
        </script> 
        <?PHP
    }
}else{
    ?>  <script> window.history.back(); </script> <?PHP
}
?>