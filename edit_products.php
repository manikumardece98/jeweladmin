<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';


// Sanitize if you want
$products_id = filter_input(INPUT_GET, 'products_id', FILTER_VALIDATE_INT);
$operation = filter_input(INPUT_GET, 'operation', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
($operation == 'edit') ? $edit = true : $edit = false;
 $db = getDbInstance();

//Handle update request. As the form's action attribute is set to the same script, but 'POST' method, 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    //Get customer id form query string parameter.
    $products_id = filter_input(INPUT_GET, 'products_id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //Get input data
    $data_to_update = filter_input_array(INPUT_POST);
    
    $data_to_update['updated_at'] = date('Y-m-d H:i:s');
    $db = getDbInstance();
    $db->where('id',$products_id);


    $originalName = $_FILES['products_image']['name'];
    if ($_FILES['products_image']['error'] === UPLOAD_ERR_OK) {
        $extension = pathinfo($originalName, PATHINFO_EXTENSION);
        $time = uniqid();
        $newName = $time . '.' . $extension;
        $targetDirectory = "uploads/";
        $targetPath = $targetDirectory . $newName;

        if (move_uploaded_file($_FILES['products_image']['tmp_name'], $targetPath)) {
            $file_data['products_image'] = $targetPath;
        } else {
            echo 'File upload failed for ' . $originalName;
        }
    }

    $data_to_update += $file_data;
    $stat = $db->update('products', $data_to_update);

    if($stat)
    {
        $_SESSION['success'] = "products updated successfully!";
        //Redirect to the listing page,
        header('location: products.php');
        //Important! Don't execute the rest put the exit/die. 
        exit();
    }
}


//If edit variable is set, we are performing the update operation.
if($edit)
{
    $db->where('id', $products_id);
    //Get data to pre-populate the form.
    $products = $db->getOne("products");
}
?>


<?php
    include_once 'includes/header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <h2 class="page-header">Update products</h2>
    </div>
    <!-- Flash messages -->
    <?php
        include('./includes/flash_messages.php')
    ?>

    <form class="" action="" method="post" enctype="multipart/form-data" id="contact_form">
        
        <?php
            //Include the common form for add and edit  
            require_once('./forms/products_form.php'); 
        ?>
    </form>
</div>




<?php include_once 'includes/footer.php'; ?>