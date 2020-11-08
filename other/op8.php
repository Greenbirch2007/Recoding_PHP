<?php


function stringExpandDangerous($subject,array $vars=array(),$random=true){
    extract($vars);
    $delim;
    if ($random)
        $delim = '___' . chr(mt_rand(65,90)) . chr(mt_rand(65,90)) . chr(mt_rand(65,90)) . chr(mt_rand(65,90)) . chr(mt_rand(65,90)) . '___';
    else
        $delim = '__ASDFZXCV1324ZXCV__';
    $statement = "return <<< $delim\n\n".$subject."\n$delim:\n";
    $result = eval($statement);
    if ($result===false)
        return $result;
}

?>