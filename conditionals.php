<?php
$age = 27;

if ($age >= 18) {
    echo "You can vote!";
} else {
    echo "You cannot vote!";
}
// ==================================================

$date = date(1);

echo $date;

if ($date <= 1) {
    echo "date is less than 1";
} elseif ($date >= 2) {
    echo "date is greater than 1";
}

// ==================================================
$posts = ["first post"];

if (!empty($posts)) {
    echo $posts[0];
} else {
    echo "No posts";
}

echo !empty($posts) ? $posts[0] : "No post";
// $firstPost = !empty($posts) ? $posts[0] : "No post";
// $firstPost = !empty($posts) ? $posts[0] : null;
$firstPost = $posts[0] ?? null;

echo $firstPost;
// ===================================================

$favColor = "";

switch($favColor) {
    case "red":
        echo "the color is red";
        break;
    case "blue":
        echo "the color is blue";
        break;
    case "green":
        echo "the color is green";
        break;
    default:
        echo "no color at all";
}

?>