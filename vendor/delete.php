<?php

require_once '../config/connect.php';
$goods_id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `goods` WHERE `goods`.`id` = '$goods_id'");
header('Location: /');
?>