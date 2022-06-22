<?php 
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
$del_id = filter_input(INPUT_POST, 'del_id');
if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST') 
{

	if($_SESSION['admin_type']!='super'){
		$_SESSION['failure'] = "Não tens permissões para fazer esta ação";
    	header('location: customers.php');
        exit;

	}
    $customer_id = $del_id;

    $db = getDbInstance();
    $db->where('id', $customer_id);
    $status = $db->delete('customers');
    
    if ($status) 
    {
        $_SESSION['info'] = "Utilizador apagado com sucesso!";
        header('location: customers.php');
        exit;
    }
    else
    {
    	$_SESSION['failure'] = "Impossível apagar o utilizador";
    	header('location: customers.php');
        exit;

    }
    
}