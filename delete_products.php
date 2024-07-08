<?php
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';

$del_id = filter_input(INPUT_POST, 'del_id');

if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_SESSION['admin_type'] != 'super') {
        $_SESSION['failure'] = "You don't have permission to perform this action";
        header('location: products.php');
        exit;
    }

    $products_id = $del_id;

    $db = getDbInstance();
    $db->where('id', $products_id);
    
    // Get product information, including the products_image field
    $product = $db->getOne('products', 'products_image');
    
    if (!$product) {
        $_SESSION['failure'] = "Product not found";
        header('location: products.php');
        exit;
    }

    $status = $db->delete('products');

    if ($status) {
        // Construct the image path based on the products_image field
        $imageDirectory = 'uploads/';
        $imagePath = $imageDirectory . $product['products_image'];
        echo "Image Path: $imagePath<br>";
        
        // Check if the file exists before attempting to delete
        if (file_exists($imagePath)) {
            if (unlink($imagePath)) {
                $_SESSION['info'] = "Product and associated image deleted successfully!";
            } else {
                $_SESSION['info'] = "Failed to delete associated image. Error: " . error_get_last()['message'];
                error_log("Failed to delete image: $imagePath");
            }
        } else {
            $_SESSION['info'] = "Product deleted successfully, but associated image does not exist.";
        }
        
        
        header('location: products.php');
        exit;
    } else {
        $_SESSION['failure'] = "Unable to delete product";
        header('location: products.php');
        exit;
    }
}
?>
