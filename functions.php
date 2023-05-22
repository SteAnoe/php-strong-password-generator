<?php

$password_length = isset($_GET['password-length']) ? $_GET['password-length'] : 0;

if(!empty($password_length)){
    $password = generatePassword($password_length);
}

function generatePassword($password_length){
    $smallLetters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    $bigLetters = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    $numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $specialLetters = ["!", "?", "%", "$", "&", "*", "-", "+", "/"];
    $password = '';
    $allCharacters = array_merge($smallLetters, $bigLetters, $numbers, $specialLetters);
    for($i = 1; $i <= $password_length; $i++){
        $random = rand(0, count($allCharacters)-1);
        $password .= $allCharacters[$random];
    }
    return $password;
}

