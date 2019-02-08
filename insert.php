<?php
require_once('connect.php');


if(isset($_POST) & !empty($_POST))
{


$item = $_POST['item'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];



$stmt="INSERT INTO Details (item, price, quantity) VALUES ('$item', '$price', '$quantity')";
$res=mysqli_query($conn,$stmt) or die (mysqli_error($conn));
if($res){
    $smsg = "Successfully inserted data, Insert New data.";
}else{
    $fmsg = "Data not inserted, please try again later.";
}

$conn->close();
header("Location: index1.php");

}


?>