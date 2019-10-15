<?php
if(isset($_POST['delete'])){
require '../resources/config/connect.php';
$sql = "DELETE FROM `customers` WHERE `customerName` = 'Lopez'";
$data= $pdo->prepare($sql);
$data->execute();
$results = $data->fetchAll();
}
?>
