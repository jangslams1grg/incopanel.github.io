
<?php
//delete.php

include('database_connection.php');

if(isset($_POST["image_id"]))
{
 $file_path = '../files/products/' . $_POST["image_name"];
 echo dirname(__FILE__);
 if(unlink($file_path))
 {
  $query = "DELETE FROM products WHERE image_id = '".$_POST["image_id"]."'";
  $statement = $connect->prepare($query);
  $statement->execute();
 }
}

?>