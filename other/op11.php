<?php
$a = array(1=>"one",2=>"twpo",3=>"three");

unset($a[2]);
$b= array_values($a);
print_r($b);

?>