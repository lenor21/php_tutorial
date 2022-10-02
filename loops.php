<?php

for ($x = 0; $x <= 10; $x+=1) {
    echo "Number " . $x . "<br>";
}

// ===================================
$y = 1;

while ($y <= 15) {
    echo "number" . $y . "<br>";
    $y++;
}

// ===================================
$posts = ["first post", "second post", "third post", "fourth post"];

for ($z = 0; $z < count($posts); $z++) {
    echo $posts[$z];
}

// foreach($posts as $post) {
//     echo $post;
// }
foreach($posts as $index => $post) {
    echo $index . "-" . $post . "<br>";
}

$person = [
    "first_name" => "Ronel",
    "last_name" => "De Jesus",
    "email" => "dejesusronel29@gmail.com"
];

foreach($person as $key => $value) {
    echo "$key - $value<br>";
}
?>