<?php
$user = 'root';
$pass = '';
$local = 'localhost';
$dbname = 'test';

$constring = 'mysql:host='.$local.';dbname='.$dbname;

$pdo = new PDO($constring, $user, $pass);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
?>
