<?php
/*check file exists or not
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}*/
/*chexk file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}*/





/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}*/
$_target="uploads/".basename($_FILES["fileToUpload"]["name"]);
                      //temporary name                     destination
if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $_target))
	echo "file uploaded";
else
	echo "error occurs";
?>