<?php


	require_once 'db.php';

	$username = $_POST['username'];

	$query = "SELECT COUNT(*) as Total FROM food WHERE username = '$username' ";
	$result = mysqli_query($conn, $query);

	$row = mysqli_fetch_object($result);

	if($row->Total == 0) {

		exit("<div class='success'>Username availabale!</div>");
	
	} else {

		exit("<div class='error'>Username not availabale!</div>");
	}
