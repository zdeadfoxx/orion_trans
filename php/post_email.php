<?php
session_start();
require_once 'connect.php';

$first__city = ['first__city'];
$second__city = ['second__city'];
$car = ['car'];
$name = ['name'];
$phone = ['phone'];
$email = ['email'];
$text__info = ['text__info'];

 
mysqli_query($connect, "INSERT INTO `applications` (`id`, `first__city`, `second__city`, `car`, `name`, `phone`, `email`, `text__info`) VALUES ('', '$first__city', '$second__city', '$car', '$name', '$phone', '$email', '$text__info')");


$_SESSION['message'] = 'Заявка успешна оставлена!';
header('Location: application.html');

?>
