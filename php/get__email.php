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

    $get__email = mysqli_query($connect, "SELECT * FROM `applications` WHERE `first__city` = '$first__city' AND `second__city` = '$second__city' AND 'car' = '$car'  AND `name` = '$name'
     AND `phone` = '$phone'
     AND `email` = '$email'
     AND `text__info` = '$text__info'");
    if (mysqli_num_rows($get__email) > 0) {

        $email1 = mysqli_fetch_assoc($get__email);

        $_SESSION['applications'] = [
            "first__city" => $email1['first__city'],
            "second__city" => $email1['second__city'],
            "car" => $email1['car'],
            "name" => $email1['name'],
            "phone" => $email1['phone'],
            "email" => $email1['email'],
            "text__info" => $email1['text__info']
        ];

        header('Location: application.html');

    } 
    
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
