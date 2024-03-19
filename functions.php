<?php

function generateRandomPassword($length, $useNumbers = true, $useLetters = true, $useSymbols = false, $allowRepeating = false) {

    $chars = '';

    if ($useNumbers) {
        $chars .= '0123456789';
    }

    if ($useLetters) {
        $chars .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }

    if ($useSymbols) {
        $chars .= '!@#$%^&*()_+{}|:<>?';
    }

    $charsLength = strlen($chars);
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomChar = $chars[rand(0, $charsLength - 1)];
        
        if (!$allowRepeating && strpos($password, $randomChar) !== false) {
            $i--;
            continue;
        }

        $password .= $randomChar;
    }

    return $password;
}