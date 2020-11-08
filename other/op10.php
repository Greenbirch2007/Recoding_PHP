<?php


$array = array(1,2,3,4,5);
foreach ($array as $i => $value){
    unset($array[$i]);
}
print_r($array);
$array[] = 6;
print_r($array);
$array = array_values($array);
$array[]=99;
print_r($array);

?>