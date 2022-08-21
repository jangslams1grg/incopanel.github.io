<?php require_once 'includes/session.php'; ?>
<?php require_once 'includes/dbconfig.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php confirm_logged_in(); ?>

<?php
include('database_connection.php');

if(isset($_POST["image_id"]))
{
 $file_path = '../files/testimonials/' . $_POST["image_name"];
 echo dirname(__FILE__);
 if(unlink($file_path))
 {
  $query = "DELETE FROM testimonials WHERE image_id = '".$_POST["image_id"]."'";
  $statement = $connect->prepare($query);
  $statement->execute();
 }
}

?>