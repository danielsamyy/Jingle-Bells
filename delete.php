<?php
include ("connection.php");

$id = $_GET['id'];
$deleteQry = "DELETE FROM product WHERE p_id='$id' ";
$del = mysqli_query($database, $deleteQry);

if($del){
  mysqli_close($database);  //close connection to database
  header("location:admin.php");
}else{
  echo "Error in deleting this record";
}
?>