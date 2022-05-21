<?php

require_once 'connect.php';

$name = $_POST['name'];
$status = $_POST['status'];

mysqli_query($connect,"INSERT INTO `myorders` (`id`, `name`, `status`) VALUES (NULL, '$name', '$status')");

header('Location: /a/about.php');



