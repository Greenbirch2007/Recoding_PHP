<?php


$url = "https://www.baidu.com/link?url=b34APzBjz-cGLoxsG4-nviHmtVS0tCvEftS6ApCAsojT1a0h9oFFPprwK4JpNYgGaQE29QPUtRdPUeu3lIz2M7GW7dqLMi5ytlHLOVa3v_VY23dOoRiUSyV9zr_cI8Rg&wd=&eqid=c89cf372000002cc0000000255705961&ie=utf-8";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_NOBODY, true);
curl_setopt($ch, CURLOPT_HEADERFUNCTION, function ($ch, $str) use(&$location) {
    // 第一个参数是curl资源，第二个参数是每一行独立的header!
    list ($name, $value) = array_map('trim', explode(':', $str, 2));
    $name = strtolower($name);
    if('location'==$name)
    {
        $location = $value;
        return 0;
    }
    return strlen($str);
});
curl_exec($ch);
curl_close($ch);
echo $location;


?>