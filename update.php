<?php

session_start();

require_once 'db.php';


if( empty($_POST['id']) ) {
	header("Location: index.php");
}

$id 		= $_GET['id'];

$name 		= isset($_POST['name']) ? $_POST['name'] : '';
$email 		= isset($_POST['email']) ? $_POST['email'] : '';
$country 	= isset($_POST['dd_country']) ? $_POST['dd_country'] : '';

$gender 	= (isset($_POST['rdo_gender']) && $_POST['rdo_gender'] == 'f') ? 'Female' : 'Male';


$query = "UPDATE food
					SET name = '$name',  
					email    = '$email', 
					dd_country   = '$country', 
					rdo_gender	 = '$gender'
			WHERE 	id 			 = '$id' ";


if( mysqli_query($conn, $query) ) {
	$_SESSION['msg']['type'] = "success";
	$_SESSION['msg']['text'] = "Record updated successfully...";
} else {
	$_SESSION['msg']['type'] = "error";
	$_SESSION['msg']['text'] = "Error while updating record...";
}

header("Location: listt.php");

