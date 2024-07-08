<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';
require_once BASE_PATH . '/lib/MysqliDb/MysqliDb.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
	$company_name = filter_input(INPUT_POST, 'company_name');
	$company_logo = filter_input(INPUT_POST, 'company_logo');
	$company_address = filter_input(INPUT_POST, 'company_address');
    $gst_number = filter_input(INPUT_POST, 'gst_number');
	$email = filter_input(INPUT_POST, 'email');
	$phone_number = filter_input(INPUT_POST, 'phone_number');
    $phone_number1 = filter_input(INPUT_POST, 'phone_number1');
	$user_id = filter_input(INPUT_POST, 'user_id');
	$password = filter_input(INPUT_POST, 'password');

     $db = getDbInstance('localhost', 'root', '', 'corephpadmin');
     $db->get('users');
     if(isset($_POST["submit"]))
     {

     $originalName = $_FILES['company_logo']['name'];
     $extension = pathinfo($originalName, PATHINFO_EXTENSION);
     $time = uniqid();
     $newName =  $time.'.'.$extension; // Unique name using timestamp
     $targetDirectory = "uploads/"; // Directory where you want to save the uploaded files
     $targetPath = $targetDirectory . $newName;
     @move_uploaded_file($_FILES['company_logo']['tmp_name'], $targetPath);


     $sql = "INSERT INTO users (company_name, company_logo, company_address, gst_number, email, phone_number, phone_number1, user_id, password) 
     VALUES ('$company_name', '$targetPath', '$company_address', '$gst_number', '$email', '$phone_number', '$phone_number1', '$user_id', '$password')";

     
     if ($db->query($sql) === TRUE) 
       {
        header('Location:index.php');
    
        }
	
     }
}
require_once 'includes/header.php'; 
?>

<div id="page-wrapper">
<div class="row">
     <div class="col-lg-12">
            <h2 class="page-header">User Profile</h2>
        </div>
        
</div>
    <form class="form" action="" method="post"  id="users_form" enctype="multipart/form-data">
       <?php  include_once('./forms/users_form.php'); ?>
    </form>
</div>

<?php include_once 'includes/footer.php'; ?>



