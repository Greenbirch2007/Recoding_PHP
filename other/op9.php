<?php

$a = array(
    "foot"=>"bar",
    42=>46,
    "multi"=>array(
        "d"=>array(
            "9"=>"foo"
        )
    )
);

var_dump($a["foot"]);
var_dump($a[42]);
var_dump($a["multi"]["d"]["9"]);



?>