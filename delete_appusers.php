<?php 
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
$del_id = filter_input(INPUT_POST, 'del_id');
if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST') 
{

	if($_SESSION['admin_type']!='super'){
		$_SESSION['failure'] = "You don't have permission to perform this action";
    	header('location: app_users.php');
        exit;

	}
    $appusers_id = $del_id;

    $db = getDbInstance();
    $db->where('id', $appusers_id);
    $status = $db->delete('app_users');
    
    if ($status) 
    {
        $_SESSION['info'] = "App User deleted successfully!";
        header('location: app_users.php');
        exit;
    }
    else
    {
    	$_SESSION['failure'] = "Unable to delete app user";
    	header('location: app_users.php');
        exit;

    }
    
}