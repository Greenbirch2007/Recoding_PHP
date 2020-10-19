<?php

function getContents($url){
    $header =array("Referer:http://www.baidu.com/");
    $ch =curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_TIMEOUT,30);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
    ob_start();
    curl_exec($ch);
    $contents = ob_get_contents();
    curl_close($ch);
    return $contents;

}

$url = "https://www.baidu.com/link?url=b34APzBjz-cGLoxsG4-nviHmtVS0tCvEftS6ApCAsojT1a0h9oFFPprwK4JpNYgGaQE29QPUtRdPUeu3lIz2M7GW7dqLMi5ytlHLOVa3v_VY23dOoRiUSyV9zr_cI8Rg&amp;wd=&amp;eqid=c89cf372000002cc0000000255705961&amp;ie=utf-8";
$contents=getContents($url);
echo $contents
?>