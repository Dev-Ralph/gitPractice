<?php
require '../resources/config/connect.php';
$id = $_GET['id'];
// if(!isset($_GET['edit'])){
//   $edit = Null;
// }else {
//   $edit = $_GET['edit'];
//   $sql = "SELECT * FROM `customers`";
//   $data = $pdo->prepare($sql);
//   $data->execute();
$customerNumber = $_GET['id'];
$sql = "SELECT * FROM `customers` WHERE `customerNumber`= '$id'";
$data= $pdo->prepare($sql);
$data->execute([':id' => $customerNumber]);
$result = $data->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST['updateUser'])){
  $customerName = $_POST['customerName1'];
  $contactLastName = $_POST['contactLastName1'];
  $contactFirstName = $_POST['contactFirstName1'];
  $phone = $_POST['phone1'];
  $country = $_POST['country1'];

  $sql = "UPDATE `customers` SET `customerName`= '$customerName',`contactLastName`= '$contactLastName',`contactFirstName`= '$contactFirstName',`phone`= '$phone',`country`= '$country' WHERE `customerNumber`= '$id'";
  $data= $pdo->prepare($sql);
  $data->execute();
// }
}
?>
