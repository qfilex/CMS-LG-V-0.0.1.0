<?php
$connect = mysqli_connect("localhost", "admin", "1", "utilizatori");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM posts WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
