<?php
session_start();
require_once './config/config.php';
require_once './includes/auth_validate.php';


//serve POST method, After successful insert, redirect to customers.php page.
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    //Mass Insert Data. Keep "name" attribute in html form same as column name in mysql table.
    
    
//    $products_image = $_POST['products_image'];
//     $data_to_store = array_filter($_POST);
//     if(isset($_POST["submit"]))
//  {
//  $originalName = $_FILES['products_image']['name'];
// $extension = pathinfo($originalName, PATHINFO_EXTENSION);
//  $time = uniqid();
// $newName =  $time.'.'.$extension; // Unique name using timestamp
// $targetDirectory = "uploads/"; // Directory where you want to save the uploaded files
// $targetPath = $targetDirectory . $newName;
// @move_uploaded_file($_FILES['products_image']['tmp_name'], $targetPath);
//  }
$data_to_store = array_filter($_POST);
    $data_to_store['created_at'] = date('Y-m-d H:i:s');
    $db = getDbInstance();
$file_data = array();
    $errors = array();
if ($_FILES['products_image']['error'] !== UPLOAD_ERR_OK) {
    $errors[] = 'Profile image upload failed.';
} else {
    $extension = pathinfo($_FILES['products_image']['name'], PATHINFO_EXTENSION);
    $time = uniqid();
    $newName = $time . '.' . $extension;
    $targetDirectory = "uploads/";
    $targetPath = $targetDirectory . $newName;

    if (!move_uploaded_file($_FILES['products_image']['tmp_name'], $targetPath)) {
        $errors[] = 'Error saving profile image.';
    } else {
        $file_data[] = array(
            'products_image' => $targetPath,
        );
    }
}
$data_to_store = array_merge($data_to_store, ...$file_data);
 $last_id = $db->insert('products', $data_to_store, true);

    if($last_id)
    {
    	$_SESSION['success'] = "Products added successfully!";
    	header('location: products.php');
    	exit();
    }
 else
 {
     echo 'insert failed: ' . $db->getLastError();
     exit();
 }
}
//We are using same form for adding and editing. This is a create form so declare $edit = false.
$edit = false;

require_once 'includes/header.php'; 
?>
<div id="page-wrapper">
<div class="row">
     <div class="col-lg-12">
            <h2 class="page-header">Add Products</h2>
        </div>
        
</div>
    <form class="form" action="" method="post"  id="products_form" enctype="multipart/form-data">
       <?php  include_once('./forms/products_form.php'); ?>
    </form>
</div>


<script type="text/javascript">
$(document).ready(function(){
   $("#products_form").validate({
       rules: {
            products_name: {
                required: true,
                minlength: 3
            },
             
        }
    });
});
</script>

<?php include_once 'includes/footer.php'; ?>