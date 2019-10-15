<?php
require '../resources/config/connect.php';
if(isset($_POST['register'])){
$customerName =  $_POST['customerName'];
$contactLastName = $_POST['contactLastName'];
$contactFirst = $_POST['contactFirstName'];
$phone = $_POST['phone'];
$country = $_POST['country'];

$sql = "INSERT INTO `customers`(`customerName`, `contactLastName`, `contactFirstName`, `phone`, `country`) VALUES ('$customerName','$contactLastName','$contactFirst','$phone','$country')";
$data = $pdo->prepare($sql);
$data->execute();
}
?>
