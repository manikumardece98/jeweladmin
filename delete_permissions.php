<?php 
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
$del_id = filter_input(INPUT_POST, 'del_id');
if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST') 
{

	if($_SESSION['admin_type']!='super'){
		$_SESSION['failure'] = "You don't have permission to perform this action";
    	header('location: permissions.php');
        exit;

	}
    $permissions_id = $del_id;

    $db = getDbInstance();
    $db->where('id', $permissions_id);
    $status = $db->delete('permissions');
    
    if ($status) 
    {
        $_SESSION['info'] = "Permissions deleted successfully!";
        header('location: permissionss.php');
        exit;
    }
    else
    {
    	$_SESSION['failure'] = "Unable to delete permissions";
    	header('location: permissionss.php');
        exit;

    }
    
}