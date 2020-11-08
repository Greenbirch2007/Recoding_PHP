<?php

function stringExpand($subject,array $vars){
    foreach ($vars as $name=> $value){
        $subject = preg_replace(sprintf('/$\{?%s}?/',$name),$value,$subject);
    }
    return $subject;
}

?>