<?php

session_start();
require_once 'db.php';
if(empty($_GET['id'])||is_numeric($_GET['id']))
{
	header("Location:listt.php");
}
$id=$_GET['id'];
$query="DELETE FROM food where id='$id' ";
if(mysqli_query($conn,$query))
{
	$_SESSION['msg']['type']="success";
	$_SESSION['msg']['text']="record deleted successfully";
}
else
{
	$_SESSION['msg']['type']="error";
	$_SESSION['msg']['text']="error occurs deleting record....";
}
header("Location: listt.php");
?>
