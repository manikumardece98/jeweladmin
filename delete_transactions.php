<?php 
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
$del_id = filter_input(INPUT_POST, 'del_id');
if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST') 
{

	if($_SESSION['admin_type']!='super'){
		$_SESSION['failure'] = "You don't have permission to perform this action";
    	header('location: transactions.php');
        exit;

	}
    $transactions_id = $del_id;

    $db = getDbInstance();
    $db->where('id', $transactions_id);
    $status = $db->delete('transactions');
    
    if ($status) 
    {
        $_SESSION['info'] = "Transactions deleted successfully!";
        header('location: transactions.php');
        exit;
    }
    else
    {
    	$_SESSION['failure'] = "Unable to delete transactions";
    	header('location: transactions.php');
        exit;

    }
    
}