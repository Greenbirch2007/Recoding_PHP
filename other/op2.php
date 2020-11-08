<?php

$array = array('1263576', '1.234', '1.2e3', '7E-10', 'not a number', 'a 1234 as part of a string', 'here\'s a float: 35E1');
$regex = '`(?:
     # Exponential floats
     [+-]?(?:(?:(?P<LNUM>[0-9]+)|(?P<DNUM>([0-9]*\.(?P>LNUM)|(?P>LNUM)\.[0-9]*)))[eE][+-]?(?P>LNUM))
     # Or ordinary floats
     |(?P>DNUM)
     # Or integers
     |(?P>LNUM)
 )`x';

foreach ( $array as $string) {
    if (preg_match($regex, $string, $matches) === 1) {
        var_dump($matches[0]);
    }
}
?>