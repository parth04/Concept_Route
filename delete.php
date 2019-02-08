<?php
require_once('connect.php');

$id = $_GET['id'];

	
$stmt = "DELETE FROM Details WHERE id=$id";
$res = mysqli_query($conn, $stmt);
echo"Execute hua command";
if($res){
    
	header('location: index1.php');
}else{
	echo "Failed to delete";
}
?>