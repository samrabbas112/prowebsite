<?php

session_start();

require_once 'db.php';

if( empty($_POST['txt_email']) ) {
	header("Location: index.php");
}

$target_file = "uploads/" . basename($_FILES["fileToUpload"]["name"]);

if( move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ) {
	echo "File uploaded";
} else {
	echo "Error upload file";
}

$name 		= isset($_POST['txt_name']) ? $_POST['txt_name'] : '';
$password 	= isset($_POST['txt_password']) ? $_POST['txt_password'] : '';
$email 		= isset($_POST['txt_email']) ? $_POST['txt_email'] : '';
$country 	= isset($_POST['dd_country']) ? $_POST['dd_country'] : '';

$gender 	= (isset($_POST['rdo_gender']) && $_POST['rdo_gender'] == 'f') ? 'Female' : 'Male';

$address 	= isset($_POST['txt_address']) ? $_POST['txt_address'] : '';
$terms 		= isset($_POST['chk_terms']) ? $_POST['chk_terms'] : '';

$created_on = date('Y-m-d h:i:s');


$query = "INSERT INTO users (txt_name, txt_password, txt_email, dd_country, rdo_gender, chk_terms, txt_address, fl_resume, status, created_on) VALUES ('$name', '$password', '$email', '$country', '$gender', '$terms', '$address', '', '1', '$created_on') ";


if( mysqli_query($conn, $query) ) {
	$_SESSION['msg']['type'] = "success";
	$_SESSION['msg']['text'] = "Record inserted successfully...";
} else {
	$_SESSION['msg']['type'] = "error";
	$_SESSION['msg']['text'] = "Error while adding new record...";
}

header("Location: index.php");

