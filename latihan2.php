<?php
include 'simple_html_dom.php';
$target = 'http://www.hdwallpapers.in/1920x1080_hd-wallpapers-r.html';
$html = file_get_html($target);

foreach($html->find("div[class=thumb]") as $f){
$crot = $f->find("img[class=thumb_img]",0)->src;
$ahh = str_replace("thumbs","download",$crot);
$wall = str_replace("t1","1920x1080",$ahh);

echo 'http://www.hdwallpapers.in'.$wall.'<br/>';
}
?>