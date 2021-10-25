<?php

	require_once 'db.php';

	$country_id = $_GET['country_id'];

	$options = '';

	$query = "SELECT * FROM states WHERE country_id = '$country_id' ";
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) > 0) {

		while ($row = mysqli_fetch_object($result)) {
			$options .= '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
		}
	} else {
		$options = '<option value="">No record found</option>';
	}
 

	exit($options);
