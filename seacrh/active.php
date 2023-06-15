<?php


include 'connection.php';
$id = $_GET['id'];
$status = $_GET['Status'];
$updataquery  = "UPDATE `employeemaster` SET `Status` = '$status WHERE `Id` = $id";
mysqli_query($conn,$updataquery);
header('location:Search.php');




?>