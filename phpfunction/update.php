<?php

require_once 'connect.php';

$name = $_POST['name'];
$status = $_POST['status'];



$name = $_POST['name'];
$status = $_POST['status'];

mysqli_query($connect,"UPDATE `myorders` SET `name` = '$name' , `status` = '$status' WHERE `myorders`.`id` = 1");

header('Location: /a/about.php');