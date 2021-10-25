<?php
session_start();

require_once 'db.php';
 // move_uploaded_file(filename ye file katemporary name hy, destination ye jahan server p file ko upload krna hy)actually jb form sy file server k pas jati hy tow ja k aik temporary folder mein store ho jati hy ....wahan php ka code pra wahan move_uploaded_file ka function us file ko temporary location sy hta k hamaryupload k folder mein move kr dy ga.....so php just file ko temporaray location sy hamary folder mein move krata hy
// $targetfile="uploads/".basename($_FILES["file"]["name"]);
// if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetfile)){
// 	if(file_exists($filename)){
// 		echo 'file already exists';
// 		$uploadok=0;
// 	}
// 	else if
// 		($_FILES['file']['type'])=='image/jpeg'
// {
// move_uploaded_file(filename, destination)
// }	
// }
// else{
// 	echo 'file foramt is not right';
// }

$target_file = "uploads/" . basename($_FILES["fileToUpload"]["name"]);
if( move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ) {
	if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
else
echo "file uploaded";
} else {
	echo "Error upload file";
}
$name= isset($_POST['name']) ? $_POST['name'] : '';
$email= isset($_POST['email']) ? $_POST['email'] :'';
$message= isset($_POST['message']) ? $_POST['message'] :'';
$phone=  isset($_POST['phone']) ? $_POST['phone'] :'';
$dd_country= isset($_POST['dd_country']) ? $_POST['dd_country'] : '';
$rdo_gender= (isset($_POST['rdo_gender']) && $_POST['rdo_gender'] == 'f') ? 'Female' : 'Male';

$chk_terms= isset($_POST['chk_terms']) ? $_POST['chk_terms'] :'';

$created_on = date('Y-m-d h:i:s');

$query ="INSERT INTO food( name, email, phone, message, dd_country, rdo_gender, chk_terms, fileToUpload) VALUES ('$name', '$email','$phone','$message','$dd_country', '$rdo_gender', '$chk_terms','')";
if( mysqli_query($conn, $query) ) {
	$_SESSION['msg']['type'] = "success";
	$_SESSION['msg']['text'] = "Record inserted successfully...";
} else {
	$_SESSION['msg']['type'] = "error";
	$_SESSION['msg']['text'] = "Error while adding new record...";
}

?>