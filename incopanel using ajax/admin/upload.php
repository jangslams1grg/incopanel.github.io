<?php require_once 'includes/session.php'; ?>
<?php require_once 'includes/dbconfig.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php confirm_logged_in(); ?>

<?php
//upload.php
include('database_connection.php');
if(count($_FILES["file"]["name"]) > 0)
{
 //$output = '';
 sleep(3);
 for($count=0; $count<count($_FILES["file"]["name"]); $count++)
 {
  $file_name = $_FILES["file"]["name"][$count];
  $tmp_name = $_FILES["file"]['tmp_name'][$count];
  $file_array = explode(".", $file_name);
  $file_extension = end($file_array);
  if(file_already_uploaded($file_name, $connect))
  {
   $file_name = $file_array[0] . '-'. rand() . '.' . $file_extension;
  }
  $location = '../files/services/' . $file_name;
  if(move_uploaded_file($tmp_name, $location))
  {
   $query = "
   INSERT INTO tbl_image (image_name, image_description) 
   VALUES ('".$file_name."', '')
   ";
   $statement = $connect->prepare($query);
   $statement->execute();
  }
 }
}

function file_already_uploaded($file_name, $connect)
{
 
 $query = "SELECT * FROM tbl_image WHERE image_name = '".$file_name."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $number_of_rows = $statement->rowCount();
 if($number_of_rows > 0)
 {
  return true;
 }
 else
 {
  return false;
 }
}

?>

