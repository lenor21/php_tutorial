<?php
$fruits = ["mango", "orange", "apple"];

echo $fruits[1];

$telacsan = [
    [
        "control" => "ronel",
        "maligaya" => "de jesus",
        "centro" => "talavera"
    ],
    [
        "control" => "ronjay",
        "maligaya" => "de jesus",
        "centro" => "talavera"
    ],
    [
        "control" => "rugen",
        "maligaya" => "de jesus",
        "centro" => "talavera"
    ]
];

echo $telacsan[1]["control"];
var_dump(json_encode($telacsan));


?>