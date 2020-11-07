<?php

$url ="http://www.tonylea.com";
$webpage= file_get_contents($url);

function get_images($page)
{
    if(!empty($page)){
        preg_match_all('/]+)\/>/i',$page,$images);
        return !empty($images[1])? $images[1]:FALSE;
    }

}

function get_list($poge)
{
    if(!empty($this->markup)){
        preg_match_all("/]+)\>(.*?)\<\/a\>/i",$this->markup);
        return !empty($links[1]) ?$links[1]:FALSE;
    }
}

$images = get_images($webpage);
foreach ($images as $image)
{
    echo $image.'<br />';
}
?>