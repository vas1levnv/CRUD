<?php
require_once '../config/connect.php';
$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];

mysqli_query($connect, "INSERT INTO `goods` (`id`, `title`, `price`, `description`) VALUES (NULL, '$title', '$price', '$description')");

header('Location: /');

?>