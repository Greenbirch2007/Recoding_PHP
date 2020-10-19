<?php

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"https://kabutan.jp/stock/chart?code=8920&ashi=4");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
$html = curl_exec($ch);
curl_close($ch);
var_dump($html);

?>

