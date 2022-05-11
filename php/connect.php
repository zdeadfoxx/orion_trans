<?php
session_start();

$connect = mysqli_connect('localhost', 'root', '', 'ksy');

if (!$connect) {
    die('Error connect to DataBase');
}


?>
