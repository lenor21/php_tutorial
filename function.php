<?php

$y = 22;

function registerUser($email) {
    global $y;

    echo "user registered!<br>";
    echo $y . "<br>";
    echo $email . " registered!<br>";
}

registerUser("dejesusronel29@gmail.com");

// ==========================================
function sum($num1, $num2) {
    return $num1 + $num2;
}

$number = sum(5, 5);
echo $number . "<br>";

// ==========================================
$subtract = function($num1, $num2) {
    return $num1 - $num2;
};

 echo $subtract(10, 5) . "<br>";

// ==========================================

$multiply = fn($num1, $num2) => $num1 * $num2;
echo $multiply(5, 4);

?>