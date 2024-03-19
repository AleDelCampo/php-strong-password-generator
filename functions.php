<?php

function generateRandomPassword($length) {


    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+{}|:<>?';

    $charsLength = strlen($chars);

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomChar = $chars[rand(0, $charsLength)];
        
        $password .= $randomChar;
    }

    return $password;
}


if (isset($_GET['passLength'])) {

    $passLength = $_GET['passLength'];

    $randomPassword = generateRandomPassword($passLength);

} else {

    $randomPassword = generateRandomPassword(8);
}
