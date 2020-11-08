<?php

$fruit=array(
    'a'=>'apple',
    'b'=>'banana',
    //    etc
);

print "This is a $fruit[a]";    //    unquote the key
print "This is a ${fruit['a']}";    //    Complex Syntax
print "This is a {$fruit['a']}";    //    Complex Syntax variation

?>